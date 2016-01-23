# www.teknologforeningen.fi
Landing page for www.teknologforeningen.fi

## Production

### Updating

To update the site you should pull the latest changes from git using the `www-data` user. This can be done with the following command:
```
sudo -u www-data git pull --ff-only
```

If this command fails it means someone has made changes on the server and you should seek out that person and spank them.

### Installation

To run this in production you need to set up a webserver like Apache. Once that is set-up you should clone the repository into the `/var/www` folder. Make sure to set the ownership of the folder to `www-data` in order to allow the webserver user to access it.

## Development setup

### Docker (recommended way)

[Install Docker](https://docs.docker.com/)

The following command will start a Docker container listening on port 8000. Make sure to replace the path with the path to the project.

```
docker run -t -i -p 8000:80 -v <path_to_project>:/var/www "eriksencosta/php-dev:latest" /bin/bash
```

Once the container is running you need to start the webserver:
```
webserver start
```

The site should now be available at http://localhost:8000 (or at the IP of the virtual machine running Docker if you're using Windows/Mac).

To exit the container use: `exit`.

Here is an example of what this might look like:

```
$ docker run -t -i -p 8000:80 -v ~/Projects/www.teknologforeningen.fi:/var/www "eriksencosta/php-dev:latest" /bin/bash
root@a0c39ad37ba9:/# webserver start
Starting PHP-FPM (PHP version 5.6.6) server.
Starting Nginx server.
Done.
root@a0c39ad37ba9:/# exit
exit
```

For more information look here: https://hub.docker.com/r/eriksencosta/php-dev/

### Otto on any platform

1. Install [otto](https://ottoproject.io/), [VirtualBox](https://www.virtualbox.org/) and [vagrant](https://www.vagrantup.com/)
2. Clone this repository `git clone https://github.com/Teknologforeningen/www.teknologforeningen.fi.git`
3. If on linux, make sure kernel modules are loaded: `sudo modprobe vboxdrv vboxnetadp vboxnetflt`
4. In the project folder, run `otto compile`
5. Run `otto dev` this will start a virtual machine
6. Allow otto to install all of its dependencies
7. Make a note of the IP that the virtual machine is running on.
8. Log in to the virtual machine with `otto dev ssh` 
    8b. Windows: Use Putty (or similar) to connect.
    8c. Write the IP in the Host Name field. Press enter.
    8d. Login: "vagrant" PW: "vagrant"
9. Run the PHP server with: `php -S 0.0.0.0:5000`
10. The server is now running on port 5000 on the IP printed out in step 5

Alternatively, install XAMPP/MAMP locally:

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

## TÄFFÄ API

TäffäAPI or as it is referred to in code, TaffaAPI is a class for easy
access to the taffa API located at http://api.teknolog.fi/taffa/