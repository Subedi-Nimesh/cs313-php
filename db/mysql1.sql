CREATE DATABASE millionaire;

\c millionaire

CREATE TABLE game.name {
	id SERIAL PRIMARY KEY,
	first_name varchar(128) NOT NULL,
	last_name varchar(128) NOT NULL
};

CREATE TABLE game.player_info {
	id SERIAL PRIMARY KEY,
	phone_number varchar(128) NOT NULL,
	email varchar(128) NOT NULL UNIQUE
};

CREATE TABLE game.questionnaire {
	id SERIAL PRIMARY KEY,
	name_id INT NOT NULL REFERENCES game.name(id),
	questions varchar(265) NOT NULL,
	correct_answer Varchar(128) NOT NULL
};

CREATE TABLE game.incorrect_answers {
	id SERIAL PRIMARY KEY,
	answers varchar(128) NOT NULL
};
