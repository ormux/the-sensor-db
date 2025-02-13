<h1 align="center">31261 - The Sensor DB</h1>
<h5 align="center">15/05/2022</h5>

![the-sensor-db](https://user-images.githubusercontent.com/19354579/168476334-f9ab3256-b5da-4387-a4c1-787a94002b27.png)

<h3 align="center">Description</h3>

This is a simulated dummy environment used to demonstrate vulnerable web applications running on IoT devices. For the purposes of demonstrating various kinds of SQL injection attacks, in relation to IoT security.

<h3 align="center">Instructions for Raspberry Pi</h3>

1. Install PHP 7.3
- `sudo apt update`
- `sudo apt install php7.3 php7.3-mysql`

2. Enable Short Open Tags
- `sudo vim /etc/php/7.3/cli/php.ini`
```
# replace this line with the value below
short_open_tags = On
```
3. Install MariaDB 
- `sudo apt install mariadb-server`

4. Configure The Database
- `sudo vim /etc/mysql/mariadb.conf.d/50-server.cnf`
```
# append the following to the [mysqld] section excluding this comment
[mysqld]
secure_file_priv = ""
```
- `sudo mysql < sql/init_db.sql`

5. Apply/Remove Firewall Rules
- `sudo bash ufw-rules.sh on`
- `sudo bash ufw-rules.sh off`

<h3 align="center">Instructions for WSL 2</h3>

1. Install PHP 7.4.29
- `sudo apt update`
- `sudo apt install php7.4 php7.4-mysql`

2. Enable Short Open Tags
- `sudo vim /etc/php/7.4/cli/php.ini`
```
# replace this line with the value below
short_open_tags = On
```
3. Install MySQL 8.0 
- `sudo apt mysql-server`

4. Configure The Database
- `sudo vim /etc/mysql/mysql.conf.d/mysqld.cnf`
```
# append the following to the [mysqld] section excluding this comment
[mysqld]
secure_file_priv = ""
```
- `sudo mysql < sql/init_db.sql`

5. Apply/Remove Firewall Rules
- `sudo bash ufw-rules.sh on`
- `sudo bash ufw-rules.sh off`

<h3 align="center">Running the Web App</h3>

```
chmod 777 31261-The-Sensor-DB
cd 31261-The-Sensor-DB
php -S 0.0.0.0:8000
```

<h4 align="center">technologies used</h4>
<div align="center">
   <img alt="bootstrap" src="https://img.shields.io/badge/-Bootstrap-black?logo=bootstrap">
   <img alt="mysql" src="https://img.shields.io/badge/-MySQL-black?logo=mysql&logoColor=cyan">
   <img alt="php" src="https://img.shields.io/badge/-PHP-black?logo=php">
</div>
