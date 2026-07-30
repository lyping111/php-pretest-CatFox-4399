create database if not exists login;

use login;

create table if not exists users(
id int(11) primary key auto_increment,
email varchar(100),
password varchar(150)
);

insert into users(email,password) values('ongking4399@gmail.com','1234');

-- [OZS]My water mark ;v;
