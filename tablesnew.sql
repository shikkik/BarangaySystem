RESIDENT SQL QUERY

ALTER TABLE `tbl_resident` ADD `houseno` VARCHAR(255) NULL AFTER `status`, 
ADD `street` VARCHAR(255) NULL AFTER `houseno`, ADD `brgy` VARCHAR(255) NULL AFTER `street`, 
ADD `municipal` VARCHAR(255) NULL AFTER `brgy`;
ALTER TABLE `tbl_resident` ADD `res_photo` MEDIUMBLOB NOT NULL AFTER `email`;
ALTER TABLE `tbl_resident` ADD `voter` VARCHAR(255) NULL AFTER `family_role`;
ALTER TABLE `tbl_resident` CHANGE `res_photo` `res_photo` MEDIUMBLOB NULL;
ALTER TABLE `tbl_resident` CHANGE `address` `address` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL;