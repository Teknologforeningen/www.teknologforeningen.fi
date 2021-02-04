FROM php:8.0.1-fpm-alpine3.13 AS landingpage

ARG STATIC=/usr/share/nginx/html/www.teknologforeningen.fi
ARG GENERATE_MENUS=\
	'cd '$STATIC';\
	for l in sv fi en; do;\
	MENU=""\
	echo "$(date): Generating menu $l.php";\
	MENU=$(php -f menu.php lang=$l);\
	echo $MENU > menu_$l.php;\
	done'

COPY ["static/index.php", "static/companies.php", "static/menu.php", "static/TaffaAPI.class.php", "static/gen_menu.sh", "$STATIC/"]
COPY ["menu_crontab", "/etc/crontabs/root"]

RUN mkdir $STATIC
RUN eval $GENERATE_MENUS

STOPSIGNAL SIGQUIT
EXPOSE 9000
CMD ["/entrypoint.sh"]
