CREATE DATABASE meeting;

CREATE TABLE public.user
(
	id serial not null primary key,
	username varchar(255) not null,
	password varchar(255) not null,
	display_name varchar(255) not null
);

CREATE TABLE public.speaker
(
	id serial not null primary key,
	name varchar(255) not null
);

CREATE TABLE public.conference
(
	id serial not null primary key,
	year Smallint not null
);

CREATE TABLE public.note
(
	id serial not null primary key,
	user_id int not null References public.user(id),
	speaker_id int not null References public.speaker(id),
	conference_id int not null References public.conference(id),
	note_text text not null
);