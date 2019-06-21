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
insert into BarraHueca (medida_exterior, medida_interior, pared_milimetros, pared_pulgadas,kg, peso, total, piezas, longitud) values(32, 16,8, 0.345, 476.16, 19.05, 476.16, 25, 4);
insert into TuberiaAC (medida, diametro_ex_milimetros, diametro_ex_pulgadas, cedula, pared_pulgadas, pared_milimetros, diametro_in_milimetros, diametro_in_pulgadas, kg, peso, total, piezas, longitud) values (1, 33.40, 1.315, 40, 0.133, 3.38,26.64, 1.049, 2.52, 15.09, 150.92, 10, 6);

select * from BarraHueca;
select * from TuberiaAC;