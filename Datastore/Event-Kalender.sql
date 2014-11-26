SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `Eventkalender` ;
CREATE SCHEMA IF NOT EXISTS `Eventkalender` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Eventkalender` ;

-- -----------------------------------------------------
-- Table `Eventkalender`.`Genre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Eventkalender`.`Genre` ;

CREATE TABLE IF NOT EXISTS `Eventkalender`.`Genre` (
  `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eventkalender`.`Veranstaltung`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Eventkalender`.`Veranstaltung` ;

CREATE TABLE IF NOT EXISTS `Eventkalender`.`Veranstaltung` (
  `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `besetzung` VARCHAR(255) NULL,
  `beschreibung` TEXT NOT NULL,
  `dauer` TIME NOT NULL,
  `bild` VARCHAR(100) NULL,
  `bildbeschreibung` VARCHAR(255) NULL,
  `fk_Genre_ID` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Veranstaltung_Genre1_idx` (`fk_Genre_ID` ASC),
  CONSTRAINT `fk_Veranstaltung_Genre1`
    FOREIGN KEY (`fk_Genre_ID`)
    REFERENCES `Eventkalender`.`Genre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eventkalender`.`Link`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Eventkalender`.`Link` ;

CREATE TABLE IF NOT EXISTS `Eventkalender`.`Link` (
  `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NULL,
  `link` VARCHAR(255) NOT NULL,
  `fk_Veranstaltung_ID` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`ID`, `fk_Veranstaltung_ID`),
  INDEX `fk_Link_Veranstaltung1_idx` (`fk_Veranstaltung_ID` ASC),
  CONSTRAINT `fk_Link_Veranstaltung1`
    FOREIGN KEY (`fk_Veranstaltung_ID`)
    REFERENCES `Eventkalender`.`Veranstaltung` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eventkalender`.`Vorstellung`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Eventkalender`.`Vorstellung` ;

CREATE TABLE IF NOT EXISTS `Eventkalender`.`Vorstellung` (
  `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `datum` DATE NOT NULL,
  `zeit` TIME NOT NULL,
  `fk_Veranstaltung_ID` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`ID`, `fk_Veranstaltung_ID`),
  INDEX `fk_Vorstellung_Veranstaltung1_idx` (`fk_Veranstaltung_ID` ASC),
  CONSTRAINT `fk_Vorstellung_Veranstaltung1`
    FOREIGN KEY (`fk_Veranstaltung_ID`)
    REFERENCES `Eventkalender`.`Veranstaltung` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eventkalender`.`Preisgruppe`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Eventkalender`.`Preisgruppe` ;

CREATE TABLE IF NOT EXISTS `Eventkalender`.`Preisgruppe` (
  `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  `preis` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eventkalender`.`Veranstaltung_hat_Preisgruppe`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Eventkalender`.`Veranstaltung_hat_Preisgruppe` ;

CREATE TABLE IF NOT EXISTS `Eventkalender`.`Veranstaltung_hat_Preisgruppe` (
  `fk_Preisgruppe_ID` INT UNSIGNED NOT NULL,
  `fk_Veranstaltung_ID` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`fk_Preisgruppe_ID`, `fk_Veranstaltung_ID`),
  INDEX `fk_Veranstaltung_hat_Presigruppen_Preisgruppe_idx` (`fk_Preisgruppe_ID` ASC),
  INDEX `fk_Veranstaltung_hat_Presigruppen_Veranstaltung1_idx` (`fk_Veranstaltung_ID` ASC),
  CONSTRAINT `fk_Veranstaltung_hat_Presigruppen_Preisgruppe`
    FOREIGN KEY (`fk_Preisgruppe_ID`)
    REFERENCES `Eventkalender`.`Preisgruppe` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Veranstaltung_hat_Presigruppen_Veranstaltung1`
    FOREIGN KEY (`fk_Veranstaltung_ID`)
    REFERENCES `Eventkalender`.`Veranstaltung` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eventkalender`.`Benutzer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Eventkalender`.`Benutzer` ;

CREATE TABLE IF NOT EXISTS `Eventkalender`.`Benutzer` (
  `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `benutzername` VARCHAR(45) NOT NULL,
  `passwort` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
