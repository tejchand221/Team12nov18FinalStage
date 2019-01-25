#File:	feedback.sql

#Create table named users

CREATE TABLE if not exists users
(
	fname varchar(50) not null ,
	lname varchar(50) not null ,
	dob date not null ,
	email varchar(50) primary key,
	phone varchar(10) not null ,
 	address varchar(80) not null ,
  	postcode varchar(4) not null,
	password varchar(30) not null); 

#End users.sql
