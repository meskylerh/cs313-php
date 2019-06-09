CREATE TABLE users
(
	user_id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL
);


CREATE TABLE menu
(	menu_id SERIAL NOT NULL PRIMARY KEY,
	name Varchar(100) Not Null,
	price DECIMAL Not Null,
	day DAY NOT NULL
);


CREATE TABLE event
(
	event_id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	date DATE NOT NULL,
	time TIME NOT NULL,
	type genre  NOT NULL,
	accepted BOOLEAN NOT NULL
);

CREATE TABLE request
(
	request_id SERIAL NOT NULL PRIMARY KEY,
	event_id INT,
	FOREIGN KEY (event_id) references event(event_id) 
);

create type genre as enum ('country', 'metal', 'rock', 'disco', 'pop');
create type DAY as enum ('Monday', 'Tuesday', 'Wednesday', 'Thrusday', 'Friday');


