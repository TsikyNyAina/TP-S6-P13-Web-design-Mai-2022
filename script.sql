create database climat;
use climat;

create table admin(
	id int primary key auto_increment,
	nom varchar(50),
	mail varchar(50),
	mdp varchar(100)
);

create table article(
	id int primary key auto_increment,
	titre varchar(100) not null,
	soustitre varchar(200) not null,
	dateArticle datetime default CURRENT_TIMESTAMP,
	source varchar(50) not null,
	resume text not null,
	image varchar(100),
	url varchar(100)
);

create table sousArticle(
	id int primary key auto_increment,
	titre varchar(100),
	contenu text,
	idarticle int,
	foreign key (idarticle) references article(id)
);

create table user(
	id int primary key auto_increment,
	nom varchar(50),
	prenom varchar(50),
	mail varchar(100),
	aEnvoyer int
);

insert into admin values(null,'Rakoto','rakoto@gmail.com',sha1('mdpprom13'));

insert into article(titre,soustitre,dateArticle,source,resume,image) values('Comment les Activites Humaines contribuent au Rechauffement Climatique?',
	'Comment sait-on que le rechauffement climatique est cause par les activites humaines ?',
	'10 septembre 2015','Clement Fourmier','nous expliquions pourquoi il est aujourd’hui de plus en plus difficile de douter du rechauffement 
	climatique. La concentration de CO2 augmente, et avec elle, les temperatures moyennes. Mais en quoi les activites humaines sont-elles responsables ?
	 Quelles sont les industries qui rechauffent le plus notre planete ? ',null);
	insert into sousArticle(titre,contenu,idarticle) values('Comment sait-on que le rechauffement climatique est cause par les activites humaines ?','Le systeme climatique est tres complexe et les causes de ses evolutions sont difficiles à analyser avec precision. Pour cette raison, il n’existe aucune etude qui puisse dire « X tonnes de CO2 emises par les activites humaines vont faire augmenter la temperature de Y degres ». La temperature varie en fonction de tres nombreux criteres (activite volcanique, solaire, capacite du sol à renvoyer les infrarouges…), il est donc impossible d’isoler un facteur. Cet argument est regulierement utilise par les climatosceptiques pour dire qu’il n’existe pas de preuve que le CO2 produit par l’Homme soit la cause de la montee des temperatures.

Ce que l’on sait en revanche, depuis plus d’une centaine d’annees grâce au scientifique suedois Svante Arrhenius, est que le CO2 a la propriete de bloquer certaines radiations dans l’atmosphere, radiations qui font augmenter les temperatures. C’est le fameux effet de serre. Quand le CO2 augmente, les radiations (et donc la temperature) augmentent egalement. On sait enfin que si le CO2 dans l’atmosphere augmente, c’est notamment parce que l’activite humaine en rejette une quantite importante dans l’air et que les mecanismes naturels du cycle du carbone ne parviennent pas à compenser cette augmentation.

Pour le dire simplement : l’Homme produit du CO2 et d’autres gaz à effet de serre, ce qui cree les conditions d’une augmentation des temperatures terrestres.',1);

	insert into sousArticle(titre,contenu,idarticle) values('Comment les activites humaines contribuent-elles au rechauffement climatique ?','Concretement, les activites humaines produisent surtout 4 types de gaz à effet de serre (GES) : le dioxyde de carbone ou CO2 (77% des gaz emis), le methane ou CH4 (15%), l’oxyde nitrique (7%) et des gaz divers comme les chlorofluorocarbures (1%).

Le CO2 est majoritairement emis par la combustion d’energie. Le chauffage, l’industrie, les transports… toutes les activites energivores emettent du CO2. Au total, elles contribuent à plus de 66% de emissions de GES des activites humaines. 

Le methane, quant à lui, est surtout emis par les activites agricoles (elevage et cultures qui representent 13,8% des emissions), mais aussi par la production de dechets (3,2%). Les changements de l’occupation des sols (majoritairement la deforestation) participent à 12,2% des emissions et le reste est le fait des processus industriels (4,3%).',1);
	



create table admin(
	id serial primary key,
	nom varchar(50),
	mail varchar(50),
	mdp varchar(100)
);

insert into admin(nom,mail,mdp) values('Rakoto','rakoto@gmail.com','mdpprom13');

create sequence seq_article start with 1;

create table article(
	id int primary key,
	titre varchar(100) not null,
	soustitre varchar(200) not null,
	dateArticle date default now(),
	source varchar(50) not null,
	resume text not null,
	image varchar(100),
	url varchar(100) not null
);
