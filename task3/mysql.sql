create database if not exists task_three;

use task_three;

create table if not exists products(
id int(11) primary key auto_increment,
receiving_date timestamp default current_timestamp,
tracking_number varchar(100),
product_name varchar(100),
cubic_meter varchar(255),
weight varchar(255)
);

insert into products(receiving_date,tracking_number,product_name,cubic_meter,weight) values('2026-7-30','C1C2JG45J8','Bottle','15GP','16G'),
('2026-7-31','C1C2JG45J8','Phone','5GP','240G'); -- two column-[remind]
-- update products set tracking_number = 'D1D2HZ98I0' where id=1;
-- delete from products where id=2;

-- select id,receiving_date from products order by id desc; 
												-- or asc; [remind]

-- alter table products add employees varchar(50);
-- alter table products drop column employees;

-- drop table products -- [drop/delete table]-[remind]

-- alter table products modify weight varchar(100); 
-- alter table products change cubic_meter CBM varchar(255); -- change [past_name] [new_name] varchar [change column name]-[remind]

-- finally done... QvQ

-- Dump completed on 2026-07-30 14:14:36

-- [OZS]My water mark ;v;