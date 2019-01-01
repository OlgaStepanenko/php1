CREATE TABLE catalog (
	id int (15) NOT NULL AUTO_INCREMENT,
	name varchar (250) NULL DEFAULT'',
	track varchar (250) NULL DEFAULT'',
	PRIMARY KEY (`id`)
);

INSERT INTO catalog (name, track) VALUES ('foto_1', './img/catalog/bowtie1.jpg');
INSERT INTO catalog (name, track) VALUES ('foto_2', './img/catalog/bowtie2.jpg');
INSERT INTO catalog (name, track) VALUES ('foto_3', './img/catalog/bowtie3.jpg');
INSERT INTO catalog (name, track) VALUES ('foto_4', './img/catalog/bowtie4.jpg');
INSERT INTO catalog (name, track) VALUES ('foto_5', './img/catalog/bowtiekids1.jpg');
INSERT INTO catalog (name, track) VALUES ('foto_6', './img/catalog/bowtiekids2.jpg');

SELECT * FROM catalog WHERE id >0

SHOW TABLES;