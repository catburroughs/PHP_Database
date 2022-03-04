

CREATE TABLE IF NOT EXISTS 'Members' (
'Personid' int NOT NULL auto_increment,
'FirstName' VARCHAR(150) NOT NULL ,
'LastName' varchar(255) NOT NULL,
'Email' VARCHAR(255) ,
'School' VARCHAR(255) ,
PRIMARY KEY (Personid)


CREATE TABLE IF NOT EXISTS 'School Members'{
    'School' VARCHAR(255),
    'Personid' INT NOT NULL,
    'FirstName' VARCHAR(150) NOT NULL ,
    'LastName' varchar(255) NOT NULL,
    PRIMARY KEY (Personid)
