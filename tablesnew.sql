RESIDENT SQL QUERY

ALTER TABLE `tbl_resident` ADD `houseno` VARCHAR(255) NULL AFTER `status`, 
ADD `street` VARCHAR(255) NULL AFTER `houseno`, ADD `brgy` VARCHAR(255) NULL AFTER `street`, 
ADD `municipal` VARCHAR(255) NULL AFTER `brgy`;
ALTER TABLE `tbl_resident` ADD `res_photo` MEDIUMBLOB NOT NULL AFTER `email`;
ALTER TABLE `tbl_resident` ADD `voter` VARCHAR(255) NULL AFTER `family_role`;
