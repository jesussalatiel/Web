DROP DATABASE mvc;
CREATE DATABASE IF NOT EXISTS mvc;
USE mvc;

CREATE TABLE IF NOT EXISTS `mvc`.`Cuentas` (
  	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
  	`pass` varchar(255) NOT NULL,
  	`email` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`BarraHueca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc`.`BarraHueca` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `medida_exterior` DOUBLE NOT NULL,
  `medida_interior` DOUBLE NOT NULL,
  `pared_milimetros` DOUBLE NOT NULL,
  `pared_pulgadas` DOUBLE NOT NULL,
  `kg` DOUBLE NOT NULL,
  `peso` DOUBLE NOT NULL,
  `total` DOUBLE NOT NULL,
  `piezas` INT NOT NULL,
  `longitud` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mvc`.`TuberiaAC` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `medida` DOUBLE NOT NULL,
  `diametro_ex_milimetros` DOUBLE NOT NULL,
  `diametro_ex_pulgadas` DOUBLE NOT NULL,
  `cedula` DOUBLE NOT NULL,
  `pared_pulgadas` DOUBLE NOT NULL,
  `pared_milimetros` DOUBLE NOT NULL,
  `diametro_in_milimetros` DOUBLE NOT NULL,
  `diametro_in_pulgadas` DOUBLE NOT NULL,
  `kg` DOUBLE NOT NULL,
  `peso` DOUBLE NOT NULL,
  `total` DOUBLE NOT NULL,
  `piezas` INT NOT NULL,
  `longitud` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

insert into Cuentas (username, pass, email) values('salatiel','juegos','jesusstartx@hotmail.com');
insert into BarraHueca (medida_exterior, medida_interior, pared_milimetros, pared_pulgadas,kg, peso, total, piezas, longitud) values(321, 16,81, 0.3451, 476.161, 19.051, 476.161, 251, 48);
insert into BarraHueca (medida_exterior, medida_interior, pared_milimetros, pared_pulgadas,kg, peso, total, piezas, longitud) values(322, 16,92, 0.3452, 476.162, 19.052, 476.162, 252, 47);
insert into BarraHueca (medida_exterior, medida_interior, pared_milimetros, pared_pulgadas,kg, peso, total, piezas, longitud) values(323, 16,93, 0.3453, 476.163, 19.053, 476.163, 253, 46);
insert into BarraHueca (medida_exterior, medida_interior, pared_milimetros, pared_pulgadas,kg, peso, total, piezas, longitud) values(324, 16,84, 0.3454, 476.164, 19.054, 476.164, 254, 45);
insert into BarraHueca (medida_exterior, medida_interior, pared_milimetros, pared_pulgadas,kg, peso, total, piezas, longitud) values(325, 16,85, 0.3455, 476.165, 19.055, 476.165, 255, 44);
insert into BarraHueca (medida_exterior, medida_interior, pared_milimetros, pared_pulgadas,kg, peso, total, piezas, longitud) values(326, 16,86, 0.3456, 476.166, 19.056, 476.166, 256, 43);
insert into BarraHueca (medida_exterior, medida_interior, pared_milimetros, pared_pulgadas,kg, peso, total, piezas, longitud) values(327, 16,87, 0.3457, 476.167, 19.057, 476.167, 257, 42);
insert into BarraHueca (medida_exterior, medida_interior, pared_milimetros, pared_pulgadas,kg, peso, total, piezas, longitud) values(328, 16,88, 0.3458, 476.168, 19.058, 476.168, 258, 41);
insert into TuberiaAC (medida, diametro_ex_milimetros, diametro_ex_pulgadas, cedula, pared_pulgadas, pared_milimetros, diametro_in_milimetros, diametro_in_pulgadas, kg, peso, total, piezas, longitud) values (1, 33.41, 1.3151, 40, 0.1331, 3.381, 26.641, 1.0491, 2.521, 15.091, 150.921, 101, 61);
insert into TuberiaAC (medida, diametro_ex_milimetros, diametro_ex_pulgadas, cedula, pared_pulgadas, pared_milimetros, diametro_in_milimetros, diametro_in_pulgadas, kg, peso, total, piezas, longitud) values (2, 33.42, 1.3152, 42, 0.1332, 3.382, 26.642, 1.0492, 2.522, 15.092, 150.922, 102, 62);
insert into TuberiaAC (medida, diametro_ex_milimetros, diametro_ex_pulgadas, cedula, pared_pulgadas, pared_milimetros, diametro_in_milimetros, diametro_in_pulgadas, kg, peso, total, piezas, longitud) values (3, 33.43, 1.3153, 43, 0.1333, 3.383, 26.643, 1.0493, 2.523, 15.093, 150.923, 103, 63);
insert into TuberiaAC (medida, diametro_ex_milimetros, diametro_ex_pulgadas, cedula, pared_pulgadas, pared_milimetros, diametro_in_milimetros, diametro_in_pulgadas, kg, peso, total, piezas, longitud) values (4, 33.44, 1.3154, 44, 0.1334, 3.384, 26.644, 1.0494, 2.524, 15.094, 150.924, 104, 64);
insert into TuberiaAC (medida, diametro_ex_milimetros, diametro_ex_pulgadas, cedula, pared_pulgadas, pared_milimetros, diametro_in_milimetros, diametro_in_pulgadas, kg, peso, total, piezas, longitud) values (5, 33.45, 1.3155, 45, 0.1335, 3.385, 26.645, 1.0495, 2.525, 15.095, 150.925, 105, 65);
insert into TuberiaAC (medida, diametro_ex_milimetros, diametro_ex_pulgadas, cedula, pared_pulgadas, pared_milimetros, diametro_in_milimetros, diametro_in_pulgadas, kg, peso, total, piezas, longitud) values (6, 33.46, 1.3156, 46, 0.1336, 3.387, 26.646, 1.0496, 2.526, 15.096, 150.926, 106, 66);
insert into TuberiaAC (medida, diametro_ex_milimetros, diametro_ex_pulgadas, cedula, pared_pulgadas, pared_milimetros, diametro_in_milimetros, diametro_in_pulgadas, kg, peso, total, piezas, longitud) values (7, 33.47, 1.3157, 47, 0.1337, 3.388, 26.647, 1.0497, 2.527, 15.097, 150.927, 107, 67);
insert into TuberiaAC (medida, diametro_ex_milimetros, diametro_ex_pulgadas, cedula, pared_pulgadas, pared_milimetros, diametro_in_milimetros, diametro_in_pulgadas, kg, peso, total, piezas, longitud) values (8, 33.48, 1.3158, 48, 0.1338, 3.389, 26.648, 1.0498, 2.528, 15.098, 150.928, 108, 68);
insert into TuberiaAC (medida, diametro_ex_milimetros, diametro_ex_pulgadas, cedula, pared_pulgadas, pared_milimetros, diametro_in_milimetros, diametro_in_pulgadas, kg, peso, total, piezas, longitud) values (9, 33.49, 1.3159, 49, 0.1339, 3.310, 26.649, 1.0499, 2.529, 15.099, 150.929, 109, 69);

select * from BarraHueca;
select * from TuberiaAC;