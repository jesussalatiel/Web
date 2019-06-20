CREATE DATABASE IF NOT EXISTS mvc;
USE mvc;

CREATE TABLE IF NOT EXISTS `mvc`.`Cuentas` (
  	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
  	`pass` varchar(255) NOT NULL,
  	`email` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mvc`.`Medida` (
  `id_medida` INT NOT NULL AUTO_INCREMENT,
  `exterior` INT NOT NULL,
  `interior` INT NOT NULL,
  PRIMARY KEY (`id_medida`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Pared`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc`.`Pared` (
  `id_pared` INT NOT NULL AUTO_INCREMENT,
  `milimetros` INT NOT NULL,
  `pulgadas` INT NOT NULL,
  PRIMARY KEY (`id_pared`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`BarraHueca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc`.`BarraHueca` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_medida` INT NOT NULL,
  `fk_pared` INT NOT NULL,
  `kg` INT NOT NULL,
  `peso` INT NOT NULL,
  `total` INT NOT NULL,
  `piezas` INT NOT NULL,
  `longitud` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_medida`
    FOREIGN KEY (`fk_medida`)
    REFERENCES `mvc`.`Medida` (`id_medida`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_pared`
    FOREIGN KEY (`fk_pared`)
    REFERENCES `mvc`.`Pared` (`id_pared`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)


insert into Cuentas (username, pass, email) values('salatiel','juegos','jesusstartx@hotmail.com');
insert into Medida (exterior, interior)values(1, 1);
insert into Pared (milimetros, pulgadas)values(12, 12);
insert into BarraHueca (fk_medida, fk_pared, kg, peso, total, piezas, longitud) values(1,1,100,345,12,123,123);


select * from BarraHueca;
select * from Cuentas;
select * from Medida;
select * from Pared;