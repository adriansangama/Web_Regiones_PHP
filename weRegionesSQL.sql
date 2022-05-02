-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema webregiones
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema webregiones
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `webregiones` DEFAULT CHARACTER SET utf8mb4 ;
USE `webregiones` ;

-- -----------------------------------------------------
-- Table `webregiones`.`cuenta_login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webregiones`.`cuenta_login` (
  `idCuenta` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idCuenta`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `webregiones`.`experiencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webregiones`.`experiencias` (
  `idPersona` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `comentario` TEXT NOT NULL,
  PRIMARY KEY (`idPersona`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `webregiones`.`regiones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webregiones`.`regiones` (
  `idRegion` INT(11) NOT NULL AUTO_INCREMENT,
  `region` VARCHAR(50) NOT NULL,
  `descripcion` TEXT NOT NULL,
  PRIMARY KEY (`idRegion`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `webregiones`.`lugares_turisticos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webregiones`.`lugares_turisticos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` TEXT NOT NULL,
  `idRegion` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `idRegion` (`idRegion` ASC) VISIBLE,
  CONSTRAINT `lugares_turisticos_ibfk_1`
    FOREIGN KEY (`idRegion`)
    REFERENCES `webregiones`.`regiones` (`idRegion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 22
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
