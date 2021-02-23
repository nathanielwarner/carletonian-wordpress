1. Install and connect to Ubuntu 20.04. Execute the following instructions inside Ubuntu.
2. Run `sudo apt update && sudo apt full-upgrade`
3. Reboot (type `reboot`)
4. Install the Apache web server: `sudo apt install apache2` (you'll need to start it with `sudo service apache2 start` if running on WSL)
5. Enable rewrites: `sudo a2enmod rewrite`
6. Install the MariaDB database system: `sudo apt install mariadb-server mariadb-client` (similarly, if you're on WSL, start it with `sudo service mysql start`)
7. Run `sudo mysql_secure_installation`. Enter y for each question except the password.
13. Create the wordpress database and user, keeping note of the password:
```
sudo mysql
CREATE DATABASE wordpress;
GRANT ALL PRIVILEGES ON wordpress.* TO 'carlroot'@'localhost' IDENTIFIED BY 'SecurePasswordYouCreateGoesHere';
FLUSH PRIVILEGES;
EXIT
```
14. Upload the database backup provided by Nathaniel using SFTP (unnecessary if you're doing this on your computer): https://linuxize.com/post/how-to-use-linux-sftp-command-to-transfer-files/
14. Unzip the database backup: `gzip -d wordpress-migrate-something.sql.gz`
15. Apply the backup: `sudo mysql wordpress < wordpress-migrate-something.sql`
8. Install PHP: `sudo apt install php libapache2-mod-php php-mysql php-simplexml php-zip`
9. Enable simplexml module: `sudo phpenmod simplexml && sudo phpenmod zip && sudo service apache2 reload`
9. Change directory to /var/www: `cd /var/www`
10. Clone the Carletonian repository: `sudo git clone https://github.com/nathanielwarner/carletonian-wordpress`
11. Assign ownership of the directory to Apache: `sudo chown -R www-data:www-data carletonian-wordpress`
14. Move to the website document root: `cd carletonian-wordpress`
15. Copy the example environment file while posing as the Apache web server: `sudo -u www-data cp .env.example .env`
16. Open the environment file: `sudoedit -u www-data .env`
17. Edit the value for DB_USER and DB_PASSWORD to match the database username and the password you chose earlier
18. If you're doing this on the actual server, edit the AUTH_KEY and that other scary-looking stuff below with random values from this site: https://api.wordpress.org/secret-key/1.1/salt/
19. Edit the S3 details below with values from Nathaniel
20. Exit the file and save (Ctrl-X then y then Enter)
21. Install Composer: `sudo apt install composer`
22. Install the composer dependencies: `sudo -u www-data composer install`
23. Edit the global Apache configuration to allow Wordpress to rewrite urls. `sudoedit /etc/apache2/apache2.conf` and change `AllowOverride` from `None` to `All` under `<Directory /var/www>`
21. Create an Apache virtual host configuration: `sudoedit /etc/apache2/sites-available/thecarletonian.com.conf` and put in:
```
<VirtualHost *:80>
	ServerName thecarletonian.com
	ServerAdmin webmaster@thecarletonian.com
	DocumentRoot /var/www/carletonian-wordpress
	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
Note that you should replace thecarletonian.com with localhost if working on your computer rather than a remote server.
22. Check the configuration with `apache2ctl -t`. If it says "Syntax OK" at the end, enable the site: `sudo a2ensite thecarletonian.com.conf`, and reload apache: `sudo service apache2 reload`
23. Disable the default virtual host: `sudo a2dissite 000-default.conf && sudo service apache2 reload`

If you're doing this on your computer, you should now be able to go to `localhost` in your web browser, and see the Carletonian page.
