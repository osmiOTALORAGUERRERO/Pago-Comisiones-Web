ALTER TABLE `commissions`.`Sellers`
ADD COLUMN `location` VARCHAR(150) NULL AFTER `id_recruitment`;

ALTER TABLE `commissions`.`Seasons`
CHANGE COLUMN `name_season` `name_season` VARCHAR(100) NULL ;
