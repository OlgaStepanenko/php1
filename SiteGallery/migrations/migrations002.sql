CREATE TABLE `geekbrains`.`gallery_spb` ( 
	`id` INT(5) NOT NULL auto_increment,
	`comment` TEXT NOT NULL , 
	`big` VARCHAR(50) NOT NULL , 
	`small` INT(50) NOT NULL , 
	`ord` INT(5) NOT NULL ), 
	PRIMARY KEY ('id'),
ENGINE = InnoDB;


	--`name` VARCHAR(50) NOT NULL , 
	--`path` VARCHAR(50) NOT NULL , 
	--`gallery` VARCHAR(50) NOT NULL
 --) 
--ENGINE = InnoDB;

INSERT INTO gallery_spb (id, comment, big, small, ord) VALUES 
('1', 'Фото 1', 'img/spb1.jpg', 'img/spb1.jpg', '1'),
('2', 'Фото 2', 'img/spb2.jpg', 'img/spb2.jpg', '2'),
('3', 'Фото 3', 'img/spb3.jpg', 'img/spb3.jpg', '3'),
('4', 'Фото 4', 'img/spb4.jpg', 'img/spb4.jpg', '4'),
('5', 'Фото 5', 'img/spb5.jpg', 'img/spb5.jpg', '5'),
('6', 'Фото 6', 'img/spb6.jpg', 'img/spb6.jpg', '6');