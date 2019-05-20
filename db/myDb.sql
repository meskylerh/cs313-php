CREATE TABLE public.user
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL
);

CREATE TABLE public.band
(
	band_id INT NOT NULL PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	type genre  NOT NULL,
);

Create Table public.showtime
(
   showtime_id INT NOT NULL PRIMARY KEY,
   Date VARCHAR(100) not null,
   time TIME Not null
);

CREATE TABLE public.food
(
	food_id INT NOT NULL PRIMARY KEY,
	name Varchar(100) Not Null,
	price DECIMAL Not Null
);
Create TABLE public.menu
(	
	menu_id INT NOT NULL PRIMARY KEY,
	meal meal NOT NULL,
	name VARCHAR(100) references public.food(name),
	price DECIMAL references public.food(price)
);
	
CREATE TABLE public.ticket
(
	ticket_id INT NOT NULL PRIMARY KEY,
	date Varchar(100) references Public.showtime(Date),
	time TIME references public.showtime(time),
	name VARCHAR(100) references public.band(name)
	price DECIMAL NOT NULL
);
	
	


Create type meal as enum ('breakfast', 'lunch', 'dinner');
create type genre as enum ('country', 'metal', 'rock', 'disco', 'pop');



