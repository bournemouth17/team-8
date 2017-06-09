/*
Code to create the Skills table within the database
*/

CREATE TABLE Skills (
	skill_id int NOT NULL AUTO_INCREMENT,
	skill varchar(45) NOT NULL, 
	PRIMARY KEY (skill_id),
	UNIQUE KEY skill_id_UNIQUE (skill_id)
	);
	
/*
Code to create the Volunteers table within the database
*/	
CREATE TABLE Volunteers (
  volunteer_id int NOT NULL AUTO_INCREMENT,
  first_name varchar(45) NOT NULL,
  last_name varchar(45) NOT NULL,
  age int(3) NOT NULL,
  gender varchar(45) NOT NULL,
  email varchar(45) NOT NULL,
  phone varchar(45) NOT NULL,
  location varchar(45) NOT NULL,
  interests varchar(45) NOT NULL,
  preference varchar(45) NOT NULL,
  nok_first_name varchar(45) NOT NULL,
  nok_last_name varchar(45) NOT NULL,
  nok_phone varchar(45) NOT NULL,
  volunteer_status varchar(45) NOT NULL,
  PRIMARY KEY (volunteer_id),
  UNIQUE KEY volunteer_id_UNIQUE (volunteer_id)
  );
  
  /*
  Code to create the Volunteer_skills table within the database
  To hold all the Volunteer's skills information
  */
     
  CREATE TABLE Volunteer_skills ( 
  	volunteer_id int,
  	skill_id int,
  	FOREIGN KEY (skill_id) REFERENCES Skills(skill_id),
    FOREIGN KEY (volunteer_id) REFERENCES Volunteers(volunteer_id)
    );

/*
Code to create the Operations table within the database
*/
CREATE TABLE Operations (
  operation_id int NOT NULL AUTO_INCREMENT,
  operation_date datetime NOT NULL,
  location varchar(45) NOT NULL,
  operation_type varchar(45) NOT NULL,
  skill_id int NOT NULL,
  PRIMARY KEY (operation_id),
  FOREIGN KEY (skill_id) REFERENCES Skills(skill_id),
  UNIQUE KEY operation_id_UNIQUE (operation_id)
  );
  

/*
Code to create the Matched table within the database.
This manages all volunteers as they are matched to an operation.
*/	
CREATE TABLE Matched AS (
	SELECT   
		v.volunteer_id,
  		v.first_name,
  		v.last_name,
  		v.age,
  		v.gender,
  		v.email,
  		v.phone,
  		v.location,
  		v.interests,
  		v.skills,
  		v.preference, 
  		v.nok_first_name,
  		v.nok_last_name,
  		o.operation_id,
  		o.operation_type,
  		o.location
  	FROM v.Volunteers 
  	JOIN o.Operations ON v.skills = o.skills
  	);








