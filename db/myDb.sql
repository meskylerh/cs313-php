CREATE TABLE public.user
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL
);

CREATE TABLE public.metal
(
	id SERIAL NOT NULL PRIMARY KEY,
	btype bullion NOT NULL,
	image VARCHAR(30) NOT NULL,
	name VARCHAR(100) NOT NULL,
	description TEXT NOT NULL,
	price DECIMAL NOT NULL,
	mtype metalType NOT NULL
);

Create Table public.collection
(
   id SERIAL NOT NULL PRIMARY KEY,
   collection_name VARCHAR(100) not null,
   user_id INT references public.user(id),
   metal_id INT references public.metal(id),
   quantity INT NOT NULL
);

CREATE TABLE public.orders
(
	id SERIAL NOT NULL PRIMARY KEY,
	user_id INT references public.user(id),
	metal_id INT references public.metal(id)
);



create type metalType as enum ('silver', 'gold', 'Platinum', 'copper');
create type bullion as enum ('coin', 'bar', 'round');


alter table public.metal
add column weight DECIMAL NOT NULL;

alter table metal
add column 	image VARCHAR(30) NOT NULL,

alter table metal
add column 	mtype metalType NOT NULL;

Alter Table metal
Alter Column id TYPE SERIAL;

INSERT INTO metal 
(btype,
 image,
 name,
 description,
 price,
 mtype,
 weight
 )
  VALUES (
  'coin',
  's1.jpg',
  'Silver Peregrine .9999 silver',
  'This is the first release in the Birds of Prey series from the Royal Canadian Mint.
   The Birds of Prey series is the successor of the popular Canadian Wildlife Series',
   19.47,
  'silver',
    1);
	
	
INSERT INTO metal 
(btype,
 image,
 name,
 description,
 price,
 mtype,
 weight
 )
  VALUES (
  'coin',
  's2.jpg',
  'Silver Bison .9999 silver',
  'The Royal Canadian Mint has long been known for high quality .9999 fine Silver 
	products and this uniquely sized item continues that tradition.',
   19.47,
  'silver',
    1.25);
	
INSERT INTO metal 
(btype,
 image,
 name,
 description,
 price,
 mtype,
 weight
 )
  VALUES (
  'coin',
  's3.jpg',
  'Silver Eagle .999 silver',
  'Sold out at the mint. 2016 is the 30th anniversary of the 1 oz American Silver Eagle bullion coin program from the United States Mint.',
   19.47,
  'silver',
    1);
	
INSERT INTO metal 
(btype,
 image,
 name,
 description,
 price,
 mtype,
 weight
 )
  VALUES (
  'coin',
  's4.jpg',
  'Silver norse gods Thor 2oz .999 silver',
  'Depicts Thor wielding his hammer, wearing his belt and gripping the fang of the serpent Jormungand. Also included in the design is a goats head lightning and the inscription THOR..',
   124.52,
  'silver',
    2);


INSERT INTO metal 
(btype,
 image,
 name,
 description,
 price,
 mtype,
 weight
 )
  VALUES (
  'coin',
  'c1.jpg',
  'Indian head ',
  'This Copper round provides one of the most recognizable and beloved designs in all of American coinage.',
   1.55,
  'copper',
    1);	
	
INSERT INTO metal 
(btype,
 image,
 name,
 description,
 price,
 mtype,
 weight
 )
  VALUES (
  'coin',
  'c2.jpg',
  'Standing Liberty',
  'Copper Standing Liberty Round pays tribute to the 90% Silver Standing Liberty Quarters, minted from 1916 to 1930.',
   1.55,
  'copper',
    1);	
	
INSERT INTO metal 
(btype,
 image,
 name,
 description,
 price,
 mtype,
 weight
 )
  VALUES (
  'coin',
  'g1.jpg',
  'American eagle',
  'The Gold American Eagle coin became a high-demand item immediately upon its introduction in 1986',
   1348.43,
  'gold',
    1);	
	
INSERT INTO metal 
(btype,
 image,
 name,
 description,
 price,
 mtype,
 weight
 )
  VALUES (
  'coin',
  'g2.jpg',
  'Canadian Maple Leaf',
  'many consider the Canadian Maple Leaf to be one of the worlds most beautiful Gold coin.',
   1335.93,
  'gold',
    1);	
	
INSERT INTO metal 
(btype,
 image,
 name,
 description,
 price,
 mtype,
 weight
 )
  VALUES (
  'coin',
  'p1.jpg',
  'Platinum 1 oz kangaroo',
  'The Perth Mint is pleased to present the first Australian Kangaroo 1 oz Platinum Bullion Coin. ',
   957.07,
  'Platinum',
    1);	
	
INSERT INTO metal 
(btype,
 image,
 name,
 description,
 price,
 mtype,
 weight
 )
  VALUES (
  'coin',
  'p1.jpg',
  'American eagle platinum',
  'Each of these patriotic coins features a beautifully detailed image of the Statue of Liberty',
   1014.36,
  'Platinum',
    1);	
  
 SELECT * FROM metal;
alter table metal
drop column type;



delete from metal 
where id = 4;















CREATE TABLE public.Scriptures
(
	id SERIAL NOT NULL PRIMARY KEY,
	book VARCHAR(40) NOT NULL ,
	chapter INT NOT NULL,
	verse INT NOT NULL,
	content TEXT NOT NULL
);


INSERT INTO scripture
 (book
 chapter,
 verse,
 content)
  VALUES 
  (
  'John',
  1,
  5,
  'And the light shineth in darkness; and the darkness comprehended it not.');

INSERT INTO scripture 
(book,
 chapter,
 verse,
 content)
  VALUES (
  'Doctrine and Covenants',
  88,
  49,
  'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.');

INSERT INTO scripture 
(book,
 chapter,
 verse,
 content)
  VALUES 
  ('Doctrine and Covenants',
  93,
  28,
  'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');

INSERT INTO scripture 
(book,
 chapter,
 verse,
 content)
  VALUES 
  ('Mosiah',
  16,
  9,
  'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');

