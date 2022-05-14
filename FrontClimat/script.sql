create table Actu(
	id int,
	dateActus date not null,
	categorie varchar(10),
	titre varchar(20),
	resume varchar(50),
	contenu varchar(100)
);

alter table Actu add column url varchar(20);


create table Actus(
	id int,
	dateActus date not null,
	categorie varchar(10),
	titre varchar(20),
	resume varchar(50),
	contenu varchar(100),
	url varchar(100) default titre.'-'.id
);