create database ticketing_test;

use ticketing_test;

CREATE TABLE tickets(
id int NOT NULL AUTO_INCREMENT,
subject varchar(1000),
user_id varchar(100),
asignee_id varchar(100),
priority int(1),
description varchar(20000),
PRIMARY KEY (id)
);

insert into tickets(subject,user_id,asignee_id,priority,description) values("Help With Pulse","Scott Smith","Gabe Hutchison",0,"Hello, I can not get pulse to load on my computer. please help...");