	drop database if exists fitnes;
	create database fitnes;
	use fitnes;

	create table clan(
	id int not null primary key auto_increment,
	ime varchar(255) not null,
	prezime varchar(255) not null,
	korisnicko_ime varchar(255) not null,
	email varchar(255) not null,
	password varchar(255) not null,
	clanarina_placena char(2)
	);
