RESIDENT SQL QUERY

ALTER TABLE `tbl_resident` ADD `houseno` VARCHAR(255) NULL AFTER `status`, 
ADD `street` VARCHAR(255) NULL AFTER `houseno`, ADD `brgy` VARCHAR(255) NULL AFTER `street`, 
ADD `municipal` VARCHAR(255) NULL AFTER `brgy`;
ALTER TABLE `tbl_resident` ADD `res_photo` MEDIUMBLOB NOT NULL AFTER `email`;
ALTER TABLE `tbl_resident` ADD `voter` VARCHAR(255) NULL AFTER `family_role`;
ALTER TABLE `tbl_resident` CHANGE `res_photo` `res_photo` MEDIUMBLOB NULL;
ALTER TABLE `tbl_resident` CHANGE `address` `address` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL;



// ETO BAGO MGA TABLES SA DOCU PROCESSING

CREATE TABLE `bmis`.`tbl_bspermit`
( `id_bspermit` INT NOT NULL AUTO_INCREMENT , `id_resident` INT NOT NULL , 
`lname` VARCHAR(255) NULL , `fname` VARCHAR(255) NULL , `mi` VARCHAR(255) NULL , 
`bsname` VARCHAR(255) NULL , `houseno` VARCHAR(255) NULL , `street` VARCHAR(252) NULL , 
`brgy` VARCHAR(255) NULL , `municipal` VARCHAR(255) NULL , `bsindustry` VARCHAR(255) NULL , 
PRIMARY KEY (`id_bspermit`)) ENGINE = InnoDB;

ALTER TABLE `tbl_bspermit` ADD `aoe` INT NOT NULL AFTER `bsindustry`;




CREATE TABLE `bmis`.`tbl_brgyid` ( `id_brgyid` INT NULL , `id_resident` INT NOT NULL , 
`lname` VARCHAR(255) NOT NULL , `fname` VARCHAR(255) NOT NULL , `mi` VARCHAR(255) NOT NULL , 
`houseno` VARCHAR(255) NOT NULL , `street` VARCHAR(255) NOT NULL , `brgy` VARCHAR(255) NOT NULL , 
`municipal` VARCHAR(255) NOT NULL , `bplace` VARCHAR(255) NOT NULL , `bdate` VARCHAR(255) NOT NULL , 
`res_photo` VARCHAR(255) NOT NULL , `inc_lname` VARCHAR(255) NOT NULL , 
`inc_fname` VARCHAR(255) NOT NULL , `inc_mi` VARCHAR(255) NOT NULL , 
`inc_contact` VARCHAR(255) NOT NULL , `inc_houseno` VARCHAR(255) NOT NULL , 
`inc_street` VARCHAR(255) NOT NULL , `inc_brgy` VARCHAR(255) NOT NULL , 
`inc_municipal` VARCHAR(255) NOT NULL ) ENGINE = InnoDB;

ALTER TABLE `tbl_brgyid` CHANGE `res_photo` `res_photo` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL;
ALTER TABLE `tbl_brgyid` CHANGE `inc_municipal` `inc_municipal` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL;



DROP TABLE `tbl_indigency`;

CREATE TABLE `bmis`.`tbl_indigency` ( `id_indigency` INT NOT NULL AUTO_INCREMENT , 
`id_resident` INT NOT NULL , `lname` VARCHAR(255) NOT NULL , `fname` VARCHAR(255) NOT NULL ,
 `mi` VARCHAR(255) NOT NULL , `nationality` VARCHAR(255) NOT NULL , `houseno` VARCHAR(255) NOT NULL , 
 `street` VARCHAR(255) NOT NULL , `brgy` VARCHAR(255) NOT NULL , `municipal` VARCHAR(255) NOT NULL , 
 `date` DATE NOT NULL , PRIMARY KEY (`id_indigency`)) ENGINE = InnoDB;



 DROP TABLE `tbl_rescert`;

 CREATE TABLE `bmis`.`tbl_rescert` ( `id_rescert` INT NOT NULL AUTO_INCREMENT , `id_resident` INT NOT NULL , 
 `lname` VARCHAR(255) NOT NULL , `fname` VARCHAR(255) NOT NULL , `mi` VARCHAR(255) NOT NULL , `age` VARCHAR(255) NOT NULL , 
 `houseno` VARCHAR(255) NOT NULL , `street` VARCHAR(255) NOT NULL , `brgy` VARCHAR(255) NOT NULL , 
 `municipal` VARCHAR(255) NOT NULL , `date` DATE NOT NULL , 
 `purpose` VARCHAR(255) NOT NULL , PRIMARY KEY (`id_rescert`)) ENGINE = InnoDB;



DROP TABLE `tbl_clearance`;

CREATE TABLE `bmis`.`tbl_clearance` ( `id_clearance` INT NOT NULL AUTO_INCREMENT , 
`id_resident` INT NOT NULL , `lname` VARCHAR(255) NOT NULL , `fname` VARCHAR(255) NOT NULL , 
`mi` VARCHAR(255) NOT NULL , `purpose` VARCHAR(255) NOT NULL , `houseno` VARCHAR(255) NOT NULL , 
`street` VARCHAR(255) NOT NULL , `brgy` VARCHAR(255) NOT NULL , `municipal` VARCHAR(255) NOT NULL , 
`status` VARCHAR(255) NOT NULL , 
`age` VARCHAR(255) NOT NULL , PRIMARY KEY (`id_clearance`)) ENGINE = InnoDB;



DROP TABLE `tbl_blotter`;

CREATE TABLE `bmis`.`tbl_blotter` ( `id_blotter` INT NOT NULL AUTO_INCREMENT , 
`id_resident` INT NOT NULL , `lname` VARCHAR(255) NOT NULL , `fname` VARCHAR(255) NOT NULL , 
`mi` VARCHAR(255) NOT NULL , `houseno` VARCHAR(255) NOT NULL , `street` VARCHAR(255) NOT NULL , 
`brgy` VARCHAR(255) NOT NULL , `municipal` VARCHAR(255) NOT NULL , `blot_photo` MEDIUMBLOB NOT NULL , 
`contact` INT(20) NOT NULL , `narrative` VARCHAR(50000) NOT NULL , 
PRIMARY KEY (`id_blotter`)) ENGINE = InnoDB;


