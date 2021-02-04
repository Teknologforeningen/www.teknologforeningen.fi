# nginx
FROM nginx:mainline-alpine AS landing-nginx
ARG SRC=.
ENV NGINX_ENVSUBST_TEMPLATE_SUFFIX: ".template"
ENV STATIC=/usr/share/nginx/html/www.teknologforeningen.fi
RUN mkdir -p $STATIC
WORKDIR $STATIC
COPY $SRC/static .
COPY nginx.conf.template /etc/nginx/
ENTRYPOINT ["/docker-entrypoint.sh"]
EXPOSE 80
STOPSIGNAL SIGQUIT
CMD ["/bin/sh", "-c", "envsubst '${STATIC}'< /etc/nginx/nginx.conf.template > /etc/nginx/nginx.conf && exec nginx -g 'daemon off;'"]

# php-fpm
FROM php:8.0.1-fpm-alpine3.13 AS landing-php-fpm
ENV STATIC=/usr/share/nginx/html/www.teknologforeningen.fi
ARG SRC=.
COPY ["$SRC/menu_crontab", "/var/spool/cron/crontabs/root"]
COPY ["$SRC/generate_menus.sh", "$SRC/entrypoint.sh", "/opt/"]
WORKDIR /opt/
RUN chmod +x ./generate_menus.sh ./entrypoint.sh
STOPSIGNAL SIGQUIT
EXPOSE 9000
CMD ["./entrypoint.sh"]
#CMD ["crond", "-f", "-l", "2"]
