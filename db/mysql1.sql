CREATE DATABASE millionaire;
\c millionaire

CREATE TABLE player_info(
	id SERIAL PRIMARY KEY,
	first_name varchar(128) NOT NULL,
	last_name varchar(128) NOT NULL,
	phone_number varchar(128) NOT NULL,
	email varchar(128) NOT NULL UNIQUE
);

CREATE TABLE game_questionnaire (
	id SERIAL PRIMARY KEY,
	name_id INT NOT NULL REFERENCES player_info(id),
	questions varchar(265) NOT NULL
);

CREATE Table game_correct_answers (
	questionnaire_id INT NOT NULL REFERENCES game_questionnaire(id),
	answers Varchar(128) NOT NULL
);

CREATE TABLE game_incorrect_answers (
	questionnaire_id INT NOT NULL REFERENCES game_questionnaire(id),
	answers varchar(128) NOT NULL
);


SELECT * FROM player_info;
SELECT * FROM game_questionnaire;
SELECT * FROM game_correct_answers;
SELECT * FROM game_incorrect_answers;