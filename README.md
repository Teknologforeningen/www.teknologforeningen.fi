# www.teknologforeningen.fi
Landing page for www.teknologforeningen.fi

## Development setup

### Otto on any platform

1. Install [otto](https://ottoproject.io/) and [VirtualBox](https://www.virtualbox.org/)
2. Clone this repository `git clone https://github.com/Teknologforeningen/www.teknologforeningen.fi.git`
3. In the project folder, run `otto compile`
4. Run ´otto dev´ this will start a virtual machine
5. Allow otto to install all of its dependencies
6. Make a note of the IP that the virtual machine is running on.
7. Log in to the virtual machine with `otto dev ssh` 
	7b. Windows: Use Putty (or similar) to connect.
	7c. Write the IP in the Host Name field. Press enter.
	7d. Login: "vagrant" PW: "vagrant"
8. Run the PHP server with: `php -S 0.0.0.0:5000`
9. The server is now running on port 5000 on the IP printed out in step 5

### MAMP on Mac OS X

1. Download MAMP https://www.mamp.info/en/downloads/
2. Install the .pkg file you downloaded (next, next, continue, etc.)
3. Open the MAMP application from Applications/MAMP/MAMP (the icon is a little elephant!)
4. Inside MAMP, go to *Preferences...*/*Web Server*
5. Select *Apache* and click the little folder icon to the right of "Document Root:". As "Document Root" you should choose the folder where your index.php file is located.
6. Done. Start the server from MAMP by clicking 'Start Servers'. :)


### XAMPP on Windows

1. Start by downloading and installing [XAMPP](https://www.apachefriends.org/index.html)
2. Open XAMPP Control Panel
3. Move the folder www.teknologforeningen.fi to C:\xampp\htdocs
4. Press "Start" on Apache-row
5. In case Xampp fails to run Apache, make sure Xampp isn't being stopped by your antivirus program and try rebooting your computer
6. If it starts successfully open your browser and type localhost/www.teknologforeningen.fi in the addressbar to check if it's up and running

### XAMPP on Arch Linux

1. Ladda ner nyaste XAMPP från https://www.apachefriends.org/
2. Kör vid behov chmod 755 xampp-linux-*-installer.run
3. sudo ./xampp-linux-*-installer.run
4. Lägg till din github-mapp till /opt/lampp/etc/httpd.conf, följ instruktioner på https://wiki.archlinux.org/index.php/Xampp
5. chmod o+x /väg/till/din/mapp/
6. Fungerar kanske? Om inte så hjälper StackExchange.

### TÄFFÄ API

TäffäAPI or as it is referred to in code, TaffaAPI is a class for easy
access to the taffa API located at http://api.teknolog.fi/taffa/