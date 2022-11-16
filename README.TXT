Management Application

This is a web application to help you manage your documents, contracts and equipment for a small business.
Tested in Ubuntu 18,20 and 22 only



-----How to install-----
1. Install mysql-server, phpmyadmin (Optional), apache2, php
2. create dabase in mysql (Note your DB-Name, Mysaql-User and DB-Pass).
3. Got to Management-Application folder and type: sudo mysql -u <Mysql-User> -p <DB-Name> < managementapplication.sql
4. Put your Database info (username, password, databasename) in <Management-Application>/db-connections/config.php and db.php
5. Use the default username and password (email: admin@mail.com /pass: admin) or (user: admin pass: admin).
6. enjoy




---Apache2 configuration to enable apache auth basic for Registration
1. put this in your Default Apache config file

      <Directory /var/www/html/<management_app>/register>
        # AllowOverride All
        AuthType Basic
        AuthName "Restricted Files"
        AuthUserFile /var/www/html/<management_app>/register/.htpasswd
        Require valid-user
        </Directory>
2. If you wanto change the admin user and password for registration form: Go to <Management-Application>/register/ and command this.
sudo htpasswd -c .htpasswd <New_User>
