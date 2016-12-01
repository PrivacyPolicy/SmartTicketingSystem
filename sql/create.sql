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