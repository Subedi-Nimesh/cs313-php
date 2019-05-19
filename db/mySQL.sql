CREATE TABLE public.user
(
	id				SERIAL NOT NULL PRIMARY KEY,
    username		varchar(128) NOT NULL UNIQUE,
    password		varchar(128) NOT NULL,
    display_name	varchar(128) NOT NULL
);

CREATE TABLE public.speaker
(
	id   SERIAL NOT NULL PRIMARY KEY,
    name varchar(128) NOT NULL UNIQUE,
);

CREATE TABLE public.conference
(
    id   SERIAL NOT NULL PRIMARY KEY,
    year SMALLINT NOT NULL UNIQUE,
);

CREATE TABLE public.note1
(
	id SERIAL NOT NULL PRIMARY KEY,
    user_id int NOT NULL,
    speaker_id int NOT NULL,
	conference_id INT NOT NULL,
	note_text TEXT NOT NULL

    FOREIGN KEY (user_id) REFERENCES user(id), 
    FOREIGN KEY (speaker_id) REFERENCES speaker(id)
    FOREIGN KEY (conference_id) REFERENCES conference(id), 
);