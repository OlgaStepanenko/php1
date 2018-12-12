CREATE TABLE `geekbrains`.`gallery_images` ( 
	`name` VARCHAR(50) NOT NULL , 
	`path` VARCHAR(50) NOT NULL , 
	`gallery` VARCHAR(50) NOT NULL ) 
ENGINE = InnoDB;

INSERT INTO gallery_images (name, path, gallery)
VALUES 
('foto_1', 'img/flex1.png', 'Первая галерея'),
('foto_2', 'img/flex2.png', 'Первая галерея'),
('foto_3', 'img/flex3.png', 'Первая галерея'),
('foto_4', 'img/flex4.png', 'Первая галерея'),
('foto_5', 'img/flex5.png', 'Первая галерея'),
('foto_6', 'img/flex6.png', 'Первая галерея'),
('foto_7', 'img/flex7.png', 'Первая галерея'),
('foto_8', 'img/flex8.png', 'Первая галерея'),
('foto_9', 'img/flex9.png', 'Первая галерея');