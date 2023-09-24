CREATE DATABASE tp_1;
CREATE TABLE Pantalon (id_pants SMALLINT AUTO_INCREMENT PRIMARY KEY, name varchar(20), marque varchar(20), stock int);
INSERT INTO `pantalon` (`id_pants`, `name`, `marque`, `stock`) VALUES
(1, 'pantalon éléphant', 'elephant', 200),
(2, 'pantalon Skinny', 'new regime', 120),
(3, 'pantalon Court', 'Levis', 500),
(4, 'pantalon Crocodile', 'Lacoste', 1220),
(5, 'pantalon lezard', 'Lacoste', 200),
(6, 'pantalon lux', 'new regime', 20);
