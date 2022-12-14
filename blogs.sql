Create Database capital;
Use capital;
CREATE table users(
	first_name varchar (255),
	last_name varchar (255),
	email  varchar(255),
	password  varchar(255),
	blog varchar (255),
    primary key (email)
);
