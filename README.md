# Raspberry-Pi-Tempreture

## Setup

``` bash
# Update and upgrade
sudo apt update 
> updates the list of available packages and their versions, but it does not install or upgrade any packages.
>  Installs newer versions of the packages you have. After updating the lists, the package manager knows about available updates. This is why you first want to update
sudo apt upgrade

# Give permission
> Add this at the end of the file and be careful 

sudo visudo

www-data ALL=NOPASSWD: /opt/vc/bin/

# Download php and apache
sudo apt install apache2
sudo apt install php libapache2-mod-php php-mysql

# Host your website
Upload the website files

# Give permission for the port you want your local website to be hosted
/etc/apache2 find the file ports.conf and add Listen PORT
/etc/apache2/sites-available create website conf file inside add the following

<VirtualHost *:81>
        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/topic

        ErrorLog /var/www/topic/error.log
        CustomLog /var/www/topic/access.log combined
</VirtualHost>


#Open your website and you will see it working

```