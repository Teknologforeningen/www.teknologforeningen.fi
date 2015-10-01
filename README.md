
www.teknologforeningen.fi
-------------------------

**Instruktioner: PHP Server för Mac**
1. Ladda ner MAMP från https://www.mamp.info/en/downloads/
2. Installera den .pkg fil du fick ner (next, next, continue, osv.)
3. Öppna MAMP från Applications/MAMP/MAMP (ikonen är en liten elefant!)
4. Väl inne i MAMP, gå till *Preferences...*/*Web Server*
5. Välj *Apache* och klicka sedan på den lilla folder-ikonen till höger om "Document Root:". Som "Document Root" skall du välja den mapp där din index.php-fil finns.
6. Done. Starta servern från MAMP med att välja 'Start Servers'.

**Instruktioner: XAMPP på Arch Linux**
1. Ladda ner nyaste XAMPP från https://www.apachefriends.org/
2. Kör vid behov chmod 755 xampp-linux-*-installer.run
3. sudo ./xampp-linux-*-installer.run
4. Lägg till din github-mapp till /opt/lampp/etc/httpd.conf, följ instruktioner på https://wiki.archlinux.org/index.php/Xampp
5. chmod o+x /väg/till/din/mapp/
6. Fungerar kanske? Om inte så hjälper StackExchange.