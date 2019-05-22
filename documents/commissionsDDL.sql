-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema commissions
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema commissions
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `commissions` DEFAULT CHARACTER SET utf8 ;
USE `commissions` ;

-- -----------------------------------------------------
-- Table `commissions`.`Coordinator`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`Coordinator` (
  `id_coordinator` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `contact_number` INT NOT NULL,
  `password` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id_coordinator`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`Recruitment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`Recruitment` (
  `id_recruitment` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_recruitment`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`Sellers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`Sellers` (
  `id_seller` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `contact_number` INT NOT NULL,
  `ext` VARCHAR(50) NULL,
  `functions` VARCHAR(250) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `id_coordinator` INT NULL,
  `id_recruitment` INT NOT NULL,
  PRIMARY KEY (`id_seller`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  INDEX `fk_Seller_1_idx` (`id_coordinator` ASC),
  INDEX `fk_Seller_2_idx` (`id_recruitment` ASC),
  CONSTRAINT `fk_Seller_1`
    FOREIGN KEY (`id_coordinator`)
    REFERENCES `commissions`.`Coordinator` (`id_coordinator`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Seller_2`
    FOREIGN KEY (`id_recruitment`)
    REFERENCES `commissions`.`Recruitment` (`id_recruitment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`Products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`Products` (
  `id_product` INT NOT NULL AUTO_INCREMENT,
  `product` VARCHAR(100) NOT NULL,
  `category` VARCHAR(2) NOT NULL,
  `price` FLOAT(10,2) NOT NULL,
  PRIMARY KEY (`id_product`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`Clients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`Clients` (
  `nit_client` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `position` VARCHAR(45) NULL,
  PRIMARY KEY (`nit_client`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`Sales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`Sales` (
  `number_sale` INT NOT NULL,
  `sale_detail` VARCHAR(300) NOT NULL,
  `date` DATE NOT NULL,
  `total_sale` FLOAT(10,2) NULL,
  `id_seller` INT NOT NULL,
  `nit_client` INT NOT NULL,
  PRIMARY KEY (`number_sale`),
  INDEX `fk_Sales_1_idx` (`id_seller` ASC),
  INDEX `fk_Sales_2_idx` (`nit_client` ASC),
  CONSTRAINT `fk_Sales_1`
    FOREIGN KEY (`id_seller`)
    REFERENCES `commissions`.`Sellers` (`id_seller`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Sales_2`
    FOREIGN KEY (`nit_client`)
    REFERENCES `commissions`.`Clients` (`nit_client`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`Financial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`Financial` (
  `id_financial` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NULL,
  `contact_number` INT NOT NULL,
  PRIMARY KEY (`id_financial`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`Seasons`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`Seasons` (
  `id_season` INT NOT NULL AUTO_INCREMENT,
  `name_season` VARCHAR(100) NOT NULL,
  `month` VARCHAR(45) NOT NULL,
  `number_sellers` INT NOT NULL,
  `porcentage_products` FLOAT(4,1) NOT NULL,
  PRIMARY KEY (`id_season`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`trackings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`trackings` (
  `id_tracking` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `date` DATE NOT NULL,
  `description` VARCHAR(200) NULL,
  `nit_client` INT NOT NULL,
  `id_seller` INT NOT NULL,
  PRIMARY KEY (`id_tracking`),
  INDEX `fk_trackings_1_idx` (`nit_client` ASC),
  INDEX `fk_trackings_2_idx` (`id_seller` ASC),
  CONSTRAINT `fk_trackings_1`
    FOREIGN KEY (`nit_client`)
    REFERENCES `commissions`.`Clients` (`nit_client`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_trackings_2`
    FOREIGN KEY (`id_seller`)
    REFERENCES `commissions`.`Sellers` (`id_seller`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`Emails`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`Emails` (
  `id_email` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `nit_client` INT NOT NULL,
  PRIMARY KEY (`id_email`),
  INDEX `fk_Directions_1_idx` (`nit_client` ASC),
  CONSTRAINT `fk_Directions_1`
    FOREIGN KEY (`nit_client`)
    REFERENCES `commissions`.`Clients` (`nit_client`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`ContactNumbers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`ContactNumbers` (
  `id_contact_number` INT NOT NULL AUTO_INCREMENT,
  `number` INT NOT NULL,
  `nit_client` INT NOT NULL,
  PRIMARY KEY (`id_contact_number`),
  INDEX `fk_ContactNumbers_1_idx` (`nit_client` ASC),
  CONSTRAINT `fk_ContactNumbers_1`
    FOREIGN KEY (`nit_client`)
    REFERENCES `commissions`.`Clients` (`nit_client`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`SoldProducts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`SoldProducts` (
  `id_product` INT NOT NULL AUTO_INCREMENT,
  `product` VARCHAR(45) NOT NULL,
  `numberSale` INT NOT NULL,
  PRIMARY KEY (`id_product`),
  INDEX `fk_SoldProducts_1_idx` (`numberSale` ASC),
  CONSTRAINT `fk_SoldProducts_1`
    FOREIGN KEY (`numberSale`)
    REFERENCES `commissions`.`Sales` (`number_sale`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`payments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`payments` (
  `id_payment` INT NOT NULL,
  `base_balance` FLOAT(10,2) NOT NULL,
  `commission` FLOAT(10,2) NOT NULL,
  `id_seller` INT NOT NULL,
  `id_financial` INT NULL,
  `id_coordinator` INT NOT NULL,
  `calification` ENUM('Good', 'Bad') NULL,
  PRIMARY KEY (`id_payment`),
  INDEX `fk_payments_1_idx` (`id_seller` ASC),
  INDEX `fk_payments_2_idx` (`id_financial` ASC),
  INDEX `fk_payments_3_idx` (`id_coordinator` ASC),
  CONSTRAINT `fk_payments_1`
    FOREIGN KEY (`id_seller`)
    REFERENCES `commissions`.`Sellers` (`id_seller`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_payments_2`
    FOREIGN KEY (`id_financial`)
    REFERENCES `commissions`.`Financial` (`id_financial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_payments_3`
    FOREIGN KEY (`id_coordinator`)
    REFERENCES `commissions`.`Coordinator` (`id_coordinator`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`SeasonBySeller`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`SeasonBySeller` (
  `id_season` INT NOT NULL,
  `id_seller` INT NOT NULL,
  INDEX `fk_SeasonBySeller_1_idx` (`id_season` ASC),
  INDEX `fk_SeasonBySeller_2_idx` (`id_seller` ASC),
  CONSTRAINT `fk_SeasonBySeller_1`
    FOREIGN KEY (`id_season`)
    REFERENCES `commissions`.`Seasons` (`id_season`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SeasonBySeller_2`
    FOREIGN KEY (`id_seller`)
    REFERENCES `commissions`.`Sellers` (`id_seller`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `commissions`.`Managers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commissions`.`Managers` (
  `id_manager` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_manager`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `commissions`.`Recruitment`
-- -----------------------------------------------------
START TRANSACTION;
USE `commissions`;
INSERT INTO `commissions`.`Recruitment` (`id_recruitment`, `type`) VALUES (DEFAULT, 'Fijo');
INSERT INTO `commissions`.`Recruitment` (`id_recruitment`, `type`) VALUES (DEFAULT, 'Indefinido');

COMMIT;
