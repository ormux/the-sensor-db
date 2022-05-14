DROP USER IF EXISTS 'tsdbUser'@'localhost';
CREATE USER 'tsdbUser'@'localhost' IDENTIFIED BY 'tsdbPass';
CREATE DATABASE IF NOT EXISTS tsdb;
GRANT ALL PRIVILEGES ON tsdb.* TO 'tsdbUser'@'localhost';
GRANT FILE ON *.* TO 'tsdbUser'@'localhost';
USE tsdb;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS sensors;
CREATE TABLE users(
   id int not null auto_increment, 
   username varchar(10), 
   password varchar(10), 
   primary key (id)
);
CREATE TABLE sensors(
   id int not null auto_increment, 
   name varchar(10), 
   temp varchar(10), 
   primary key (id)
);

INSERT INTO users(username, password) VALUES ('tatum', 'pass123');
INSERT INTO users(username, password) VALUES ('alexa', 'secret');
INSERT INTO users(username, password) VALUES ('kaila', 'letmein');
INSERT INTO users(username, password) VALUES ('willy', 'qwerty');

INSERT INTO sensors(name, temp) VALUES ('bedroom', '30C');
INSERT INTO sensors(name, temp) VALUES ('kitchen', '38C');
INSERT INTO sensors(name, temp) VALUES ('hallway', '40C');
INSERT INTO sensors(name, temp) VALUES ('bathroom', '41C');
