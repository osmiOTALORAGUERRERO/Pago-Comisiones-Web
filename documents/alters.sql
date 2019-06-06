ALTER TABLE `commissions`.`Sellers`
ADD COLUMN `location` VARCHAR(150) NULL AFTER `id_recruitment`;

ALTER TABLE `commissions`.`Seasons`
CHANGE COLUMN `name_season` `name_season` VARCHAR(100) NULL ;

ALTER TABLE `commissions`.`Financial`
ADD COLUMN `password` VARCHAR(150) NOT NULL AFTER `contact_number`;

ALTER TABLE `commissions`.`SoldProducts`
DROP FOREIGN KEY `fk_SoldProducts_1`;
ALTER TABLE `commissions`.`SoldProducts`
ADD CONSTRAINT `fk_SoldProducts_1`
  FOREIGN KEY (`numberSale`)
  REFERENCES `commissions`.`Sales` (`number_sale`)
  ON DELETE CASCADE
  ON UPDATE NO ACTION;
