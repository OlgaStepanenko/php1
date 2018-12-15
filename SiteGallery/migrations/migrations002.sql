CREATE TABLE `geekbrains`.`gallery_spb` ( 
	`name` VARCHAR(50) NOT NULL , 
	`path` VARCHAR(50) NOT NULL , 
	`gallery` VARCHAR(50) NOT NULL
 ) 
ENGINE = InnoDB;

INSERT INTO gallery_spb (name, path, gallery)
VALUES 
('image_1', 'img/spb1.jpg', 'Вторая галерея'),
('image_2', 'img/spb2.jpg', 'Вторая галерея'),
('image_3', 'img/spb3.jpg', 'Вторая галерея'),
('image_4', 'img/spb4.jpg', 'Вторая галерея'),
('image_5', 'img/spb5.jpg', 'Вторая галерея'),
('image_6', 'img/spb6.jpg', 'Вторая галерея');