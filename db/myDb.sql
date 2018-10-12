CREATE TABLE public.user
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL
);

CREATE TABLE public.metal
(
	id INT NOT NULL PRIMARY KEY,
	btype bullion NOT NULL,
	name VARCHAR(100) NOT NULL,
	description TEXT NOT NULL,
	price DECIMAL NOT NULL,
	type metalType NOT NULL
);

Create Table public.collection
(
   id INT NOT NULL PRIMARY KEY,
   collection_name VARCHAR(100) not null,
   user_id INT references public.user(id),
   metal_id INT references public.metal(id),
   quantity INT NOT NULL
);

CREATE TABLE public.orders
(
	id INT NOT NULL PRIMARY KEY,
	user_id INT references public.user(id),
	metal_id INT references public.metal(id)
);



create type metalType as enum ('silver', 'gold', 'Platinum', 'copper');
create type bullion as enum ('coin', 'bar', 'round');


alter table public.metal
add column weight DECIMAL NOT NULL;