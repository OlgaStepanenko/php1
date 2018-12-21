<?php 
CREATE DATABASE test 

CREATE TABLE employee (
	id int (11) NOT NULL AUTO_INCREMENT,
	first_name varchar (250) NULL DEFAULT'',
	middle_name varchar (250) NULL DEFAULT'',
	last_name varchar (250) NULL DEFAULT'',
	PRIMARY KEY (`id`)
);

INSERT INTO employee (first_name, middle_name, last_name) VALUES ('Иван', 'Иванович', 'Иванов');
INSERT INTO employee (first_name, middle_name, last_name) VALUES ('Петр', 'Петрович', 'Петров');
INSERT INTO employee (first_name, middle_name, last_name) VALUES ('Мария', 'Ивановна', 'Сидорова');

SELECT * FROM employee WHERE id >0

?>

