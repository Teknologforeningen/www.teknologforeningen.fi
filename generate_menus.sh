#/bin/env sh
cd $STATIC
for l in sv fi en
do
	echo "$(date +'[%d-%b-%Y %T]') crond: generating menu $l.php" >> /dev/stdout
	MENU=$(php -f menu.php lang=$l)
	echo "$(date +'[%d-%b-%Y %T]') crond: $l.php: done" >> /dev/stdout
	echo $MENU > menu_$l.html
done
