-- MySQL Script generated by MySQL Workbench
-- Mon Nov 26 13:39:11 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema Project
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Project
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `Project` ;

-- -----------------------------------------------------
-- Table `Project`.`Progress`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Project`.`Progress` (
  `idProgress` INT NOT NULL,
  `videoID` VARCHAR(45) NULL,
  `username` VARCHAR(16) NULL,
  `subjectID` VARCHAR(45) NULL,
  `progresscount` VARCHAR(45) NULL,
  PRIMARY KEY (`idProgress`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Project`.`Youtube`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Project`.`Youtube` (
  `videoID` INT NOT NULL,
  `link` VARCHAR(45) NULL,
  `subjectID` INT NULL,
  PRIMARY KEY (`videoID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Project`.`Subjects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Project`.`Subjects` (
  `subject_name` VARCHAR(50) NOT NULL,
  `subjectID` INT(5) NOT NULL,
  PRIMARY KEY (`subjectID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Project`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Project`.`User` (
  `Username` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NULL,
  `Major` VARCHAR(45) NULL,
  `School` VARCHAR(45) NULL,
  PRIMARY KEY (`Username`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;