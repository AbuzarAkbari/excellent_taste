-- MySQL Script generated by MySQL Workbench
-- Mon Mar  4 13:26:37 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema excellent_taste
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `excellent_taste` ;

-- -----------------------------------------------------
-- Schema excellent_taste
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `excellent_taste` DEFAULT CHARACTER SET utf8 ;
USE `excellent_taste` ;

-- -----------------------------------------------------
-- Table `excellent_taste`.`tafel`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `excellent_taste`.`tafel` ;

CREATE TABLE IF NOT EXISTS `excellent_taste`.`tafel` (
  `tafel_id` INT NOT NULL AUTO_INCREMENT,
  `tafelnummer` VARCHAR(255) NULL,
  `aantal` INT NULL,
  PRIMARY KEY (`tafel_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `excellent_taste`.`reservering`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `excellent_taste`.`reservering` ;

CREATE TABLE IF NOT EXISTS `excellent_taste`.`reservering` (
  `reservering_id` INT NOT NULL AUTO_INCREMENT,
  `aantal_personen` INT NULL,
  `gereserveerd_op` DATETIME NULL,
  `gebruikt` TINYINT NULL,
  `tafel_id` INT NOT NULL,
  `gereserveerd_voor` DATETIME NULL,
  `naam` VARCHAR(255) NULL,
  `achternaam` VARCHAR(255) NULL,
  `telefoonnummer` VARCHAR(255) NULL,
  PRIMARY KEY (`reservering_id`),
  INDEX `fk_reservering_tafel1_idx` (`tafel_id` ASC),
  CONSTRAINT `fk_reservering_tafel1`
    FOREIGN KEY (`tafel_id`)
    REFERENCES `excellent_taste`.`tafel` (`tafel_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `excellent_taste`.`bon`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `excellent_taste`.`bon` ;

CREATE TABLE IF NOT EXISTS `excellent_taste`.`bon` (
  `product_id` INT NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL,
  `aantal` INT NULL,
  `prijs` DECIMAL(9,2) NULL,
  PRIMARY KEY (`product_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `excellent_taste`.`bestelling`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `excellent_taste`.`bestelling` ;

CREATE TABLE IF NOT EXISTS `excellent_taste`.`bestelling` (
  `bestelling_id` INT NOT NULL,
  `reservering_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  PRIMARY KEY (`bestelling_id`),
  INDEX `fk_bestelling_reservering1_idx` (`reservering_id` ASC),
  INDEX `fk_bestelling_product_copy11_idx` (`product_id` ASC),
  CONSTRAINT `fk_bestelling_reservering1`
    FOREIGN KEY (`reservering_id`)
    REFERENCES `excellent_taste`.`reservering` (`reservering_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bestelling_product_copy11`
    FOREIGN KEY (`product_id`)
    REFERENCES `excellent_taste`.`bon` (`product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `excellent_taste`.`categorie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `excellent_taste`.`categorie` ;

CREATE TABLE IF NOT EXISTS `excellent_taste`.`categorie` (
  `categorie_id` INT NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(255) NULL,
  `parent_id` INT NULL,
  PRIMARY KEY (`categorie_id`),
  INDEX `fk_categorie_categorie1_idx` (`parent_id` ASC),
  CONSTRAINT `fk_categorie_categorie1`
    FOREIGN KEY (`parent_id`)
    REFERENCES `excellent_taste`.`categorie` (`categorie_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `excellent_taste`.`product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `excellent_taste`.`product` ;

CREATE TABLE IF NOT EXISTS `excellent_taste`.`product` (
  `product_id` INT NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL,
  `beschrijving` TEXT NULL,
  `prijs` DECIMAL(9,2) NULL,
  `categorie_id` INT NOT NULL,
  PRIMARY KEY (`product_id`),
  INDEX `fk_product_sub_category1_idx` (`categorie_id` ASC),
  CONSTRAINT `fk_product_sub_category1`
    FOREIGN KEY (`categorie_id`)
    REFERENCES `excellent_taste`.`categorie` (`categorie_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `excellent_taste`.`betaling informatie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `excellent_taste`.`betaling informatie` ;

CREATE TABLE IF NOT EXISTS `excellent_taste`.`betaling informatie` (
  `betaling_id` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(45) NULL,
  `betaalmethode` VARCHAR(45) NULL,
  `bestelling_bestelling_id` INT NOT NULL,
  PRIMARY KEY (`betaling_id`),
  INDEX `fk_betaling informatie_bestelling1_idx` (`bestelling_bestelling_id` ASC),
  CONSTRAINT `fk_betaling informatie_bestelling1`
    FOREIGN KEY (`bestelling_bestelling_id`)
    REFERENCES `excellent_taste`.`bestelling` (`bestelling_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
