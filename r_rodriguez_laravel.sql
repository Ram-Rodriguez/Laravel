CREATE USER 'ram2'@'ram';
CREATE DATABASE r_rodriguez_laravel_db;
grant all privileges on r_rodriguez_laravel_db.* to 'ram2'@'localhost';
flush privileges;

use r_rodriguez_laravel_db;
drop table products;
show tables;
select * from products;