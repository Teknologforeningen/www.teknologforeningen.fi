

# www.teknologforeningen.fi
Landing page for www.teknologforeningen.fi

## Development setup

### Instructions: PHP Server for Mac**

1. Download MAMP https://www.mamp.info/en/downloads/
2. Install the .pkg file you downloaded (next, next, continue, etc.)
3. Open the MAMP application from Applications/MAMP/MAMP (the icon is a little elephant!)
4. Inside MAMP, go to *Preferences...*/*Web Server*
5. Select *Apache* and click the little folder icon to the right of "Document Root:". As "Document Root" you should choose the folder where your index.php file is located.
6. Done. Start the server from MAMP by clicking 'Start Servers'. :)


### Instructions for Windows

1. Start by downloading and installing [XAMPP](https://www.apachefriends.org/index.html)
2. Open XAMPP Control Panel
3. Move the folder www.teknologforeningen.fi to C:\xampp\htdocs
4. Press "Start" on Apache-row
5. In case Xampp fails to run Apache, make sure Xampp isn't being stopped by your antivirus program and try rebooting your computer
6. If it starts successfully open your browser and type localhost/www.teknologforeningen.fi in the addressbar to check if it's up and running

### Instruktioner: XAMPP på Arch Linux

1. Ladda ner nyaste XAMPP från https://www.apachefriends.org/
2. Kör vid behov chmod 755 xampp-linux-*-installer.run
3. sudo ./xampp-linux-*-installer.run
4. Lägg till din github-mapp till /opt/lampp/etc/httpd.conf, följ instruktioner på https://wiki.archlinux.org/index.php/Xampp
5. chmod o+x /väg/till/din/mapp/
6. Fungerar kanske? Om inte så hjälper StackExchange.
