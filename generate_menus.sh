#/bin/env sh
cd $STATIC
for l in sv fi en
do
	echo "$(date): Generating menu $l.php"
	MENU=$(php -f menu.php lang=$l)
	echo $MENU > menu_$l.html
done
