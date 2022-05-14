<h1 align="center">31261 - The Sensor DB</h1>
<h5 align="center">15/05/2022</h5>

<h3 align="center">Description</h3>

This is based on my implementation of SQLIA vulnerable web app called 'The Gadget Shop'. With the titles and database renamed to 'sensors', to fit the context of IoT Security. For the purposes of project demonstration for my supervisors.

<h3 align="center">Instructions</h3>

1. Install PHP 7.4.29
- `sudo apt install php7.4 php7.4-mysql php7.4-cli`

2. Install MySQL 8.0
- `sudo apt mysql-server`

2. Initialise the MySQL database
- `sudo vim /etc/mysql/mysql.conf.d/mysqld.cnf`
```
# append the following to the [mysqld] section excluding this comment
[mysqld]
secure_file_priv = ""
```
- `sudo mysql < db/init_db.sql`
3. Run the application
```
cd sql-injection-php
php -S localhost:5000
```

<h4 align="center">technologies used</h4>
<div align="center">
   <img alt="bootstrap" src="https://img.shields.io/badge/-Bootstrap-black?logo=bootstrap">
   <img alt="mysql" src="https://img.shields.io/badge/-MySQL-black?logo=mysql&logoColor=cyan">
   <img alt="php" src="https://img.shields.io/badge/-PHP-black?logo=php">
</div>
