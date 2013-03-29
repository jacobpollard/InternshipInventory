create table intern_faculty (
	id 			integer NOT NULL,
	banner_id 		varchar NOT NULL,
	username		varchar NOT NULL,
	salutation 		varchar,
	first_name 		varchar NOT NULL,
	last_name 		varchar NOT NULL,
	phone 			varchar,
	fax 			varchar,
	street_address1 varchar,
	street_address2 varchar,
	city 			varchar,
	state 			char(2),
	zip 			varchar,
	PRIMARY KEY(id)
);