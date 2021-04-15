use mysql;
create user 'admin'@'localhost' identified by "Fjeclot21@";
create database ongs;
use ongs;
grant all privileges on ongs.* to 'admin'@'localhost';


