-- MySQL Script generated by MySQL Workbench
-- Tue Dec  5 17:16:31 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema escomTitulos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema escomTitulos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `escomTitulos` DEFAULT CHARACTER SET utf8 ;
USE `escomTitulos` ;

-- -----------------------------------------------------
-- Table `escomTitulos`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `escomTitulos`.`usuario` ;

CREATE TABLE IF NOT EXISTS `escomTitulos`.`usuario` (
  `idusuario` VARCHAR(12) NOT NULL,
  `usuario_pass` VARCHAR(45) NULL,
  `usuario_correo` VARCHAR(45) NULL,
  `usuario_nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `escomTitulos`.`estudiante`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `escomTitulos`.`estudiante` ;

CREATE TABLE IF NOT EXISTS `escomTitulos`.`estudiante` (
  `idestudiante` INT NOT NULL AUTO_INCREMENT,
  `estudiante_turno` VARCHAR(45) NULL,
  `estudiante_genero` TINYINT(1) NULL,
  `estudiante_telefono` VARCHAR(45) NULL,
  `estudiante_movil` VARCHAR(45) NULL,
  `estudiante_fechaNacimiento` DATE NULL,
  `estudiante_boleta` VARCHAR(12) NULL,
  PRIMARY KEY (`idestudiante`),
  INDEX `estudiante_usuario_fk_idx` (`estudiante_boleta` ASC),
  UNIQUE INDEX `estudiante_boleta_UNIQUE` (`estudiante_boleta` ASC),
  CONSTRAINT `estudiante_usuario_fk`
    FOREIGN KEY (`estudiante_boleta`)
    REFERENCES `escomTitulos`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `escomTitulos`.`evento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `escomTitulos`.`evento` ;

CREATE TABLE IF NOT EXISTS `escomTitulos`.`evento` (
  `idevento` INT NOT NULL AUTO_INCREMENT,
  `evento_titulo` VARCHAR(45) NULL,
  `evento_lugar` VARCHAR(45) NULL,
  `evento_fecha` DATETIME NULL,
  `evento_invitadosPAlumno` INT NULL,
  `evento_fechaLimite` DATETIME NULL,
  `evento_encavezado` VARCHAR(100) NULL,
  `evento_rutaImagen` VARCHAR(45) NULL,
  `evento_primerTexto` TEXT NULL,
  `evento_segundoTexto` TEXT NULL,
  `evento_direccion` VARCHAR(100) NULL,
  `evento_programa` VARCHAR(500) NULL,
  PRIMARY KEY (`idevento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `escomTitulos`.`personal`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `escomTitulos`.`personal` ;

CREATE TABLE IF NOT EXISTS `escomTitulos`.`personal` (
  `idpersonal` INT NOT NULL,
  `personal_nombre` VARCHAR(45) NULL,
  `personal_titulo` VARCHAR(45) NULL,
  `personal_puesto` VARCHAR(45) NULL,
  PRIMARY KEY (`idpersonal`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `escomTitulos`.`evento_estudiante`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `escomTitulos`.`evento_estudiante` ;

CREATE TABLE IF NOT EXISTS `escomTitulos`.`evento_estudiante` (
  `idevento_estudiante` INT NOT NULL,
  `evento_estudiante_idevento` INT NULL,
  `evento_estudiante_idestudiante` INT NULL,
  PRIMARY KEY (`idevento_estudiante`),
  INDEX `fk_evento_estudiante_evento_idx` (`evento_estudiante_idevento` ASC),
  INDEX `fk_evento_estudiante_estudiante_idx` (`evento_estudiante_idestudiante` ASC),
  CONSTRAINT `fk_evento_estudiante_evento`
    FOREIGN KEY (`evento_estudiante_idevento`)
    REFERENCES `escomTitulos`.`evento` (`idevento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evento_estudiante_estudiante`
    FOREIGN KEY (`evento_estudiante_idestudiante`)
    REFERENCES `escomTitulos`.`estudiante` (`idestudiante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `escomTitulos`.`evento_personal`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `escomTitulos`.`evento_personal` ;

CREATE TABLE IF NOT EXISTS `escomTitulos`.`evento_personal` (
  `idevento_personal` INT NOT NULL,
  `evento_personal_idevento` INT NULL,
  `evento_personal_idpersonal` INT NULL,
  PRIMARY KEY (`idevento_personal`),
  INDEX `fk_evento_personal_idevento_idx` (`evento_personal_idevento` ASC),
  INDEX `fk_evento_personal_idpersonal_idx` (`evento_personal_idpersonal` ASC),
  CONSTRAINT `fk_evento_personal_idevento`
    FOREIGN KEY (`evento_personal_idevento`)
    REFERENCES `escomTitulos`.`evento` (`idevento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evento_personal_idpersonal`
    FOREIGN KEY (`evento_personal_idpersonal`)
    REFERENCES `escomTitulos`.`personal` (`idpersonal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `escomTitulos`.`evento_estudiante_foto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `escomTitulos`.`evento_estudiante_foto` ;

CREATE TABLE IF NOT EXISTS `escomTitulos`.`evento_estudiante_foto` (
  `idevento_estudiante_foto` INT NOT NULL,
  `evento_estudiante_foto_idevento` INT NULL,
  `evento_estudiante_foto_idestudiante` INT NULL,
  `evento_estudiante_foto_ruta` VARCHAR(45) NULL,
  `evento_estudiante_foto_valido` BIT NULL,
  PRIMARY KEY (`idevento_estudiante_foto`),
  INDEX `fk_evento_estudiante_foto_idevento_idx` (`evento_estudiante_foto_idevento` ASC),
  INDEX `fk_evento_estudiante_foto_idestudiante_idx` (`evento_estudiante_foto_idestudiante` ASC),
  CONSTRAINT `fk_evento_estudiante_foto_idevento`
    FOREIGN KEY (`evento_estudiante_foto_idevento`)
    REFERENCES `escomTitulos`.`evento` (`idevento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evento_estudiante_foto_idestudiante`
    FOREIGN KEY (`evento_estudiante_foto_idestudiante`)
    REFERENCES `escomTitulos`.`estudiante` (`idestudiante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
