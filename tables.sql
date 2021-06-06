Accounts Tables 

    CREATE TABLE bmis.tbl_admin 
    ( id_admin INT NOT NULL AUTO_INCREMENT , 
    email VARCHAR(255) NOT NULL , 
    password VARCHAR(255) NOT NULL , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    role VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_admin)) ENGINE = InnoDB;

    CREATE TABLE bmis.tbl_user 
    ( id_user INT NOT NULL AUTO_INCREMENT ,
    email VARCHAR(255) NOT NULL ,
    password VARCHAR(255) NOT NULL ,
    lname VARCHAR(255) NOT NULL ,
    fname VARCHAR(255) NOT NULL ,
    mi VARCHAR(255) NOT NULL ,
    age INT(20) NOT NULL ,
    sex VARCHAR(255) NOT NULL ,
    address VARCHAR(255) NOT NULL,
    contact VARCHAR(255) NOT NULL ,
    position VARCHAR(255) NOT NULL ,
    role VARCHAR(255) NOT NULL ,
    PRIMARY KEY (id_user)) ENGINE = InnoDB;

    ALTER TABLE tbl_user ADD addedby INT NOT NULL AFTER role;
    ALTER TABLE `tbl_user` CHANGE `addedby` `addedby` VARCHAR(255) NOT NULL;
    ALTER TABLE `tbl_user` CHANGE `addedby` `addedby` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL;


    CREATE TABLE bmis.tbl_resident 
    ( id_resident INT NOT NULL AUTO_INCREMENT , 
    email VARCHAR(255) NOT NULL , 
    password VARCHAR(255) NOT NULL , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    age INT NOT NULL,
    sex VARCHAR(255) NOT NULL , 
    status VARCHAR(255) NOT NULL , 
    address VARCHAR(255) NOT NULL , 
    contact VARCHAR(255) NOT NULL , 
    bdate DATE NOT NULL , 
    bplace VARCHAR(255) NOT NULL , 
    nationality VARCHAR(255) NOT NULL , 
    role VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_resident)) ENGINE = InnoDB;

    ALTER TABLE tbl_resident ADD addedby VARCHAR(255) NOT NULL AFTER role;
    ALTER TABLE `tbl_resident` CHANGE `addedby` `addedby` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL;


Resident Application Tables


    CREATE TABLE bmis.tbl_tbdots 
    ( id_tbdots INT NOT NULL , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    age INT NOT NULL , 
    sex VARCHAR(255) NOT NULL , 
    address VARCHAR(255) NOT NULL , 
    contact VARCHAR(255) NOT NULL , 
    bdate INT NOT NULL , 
    height FLOAT NOT NULL , 
    weight FLOAT NOT NULL , 
    philhealth VARCHAR(255) NOT NULL , 
    sched_date DATETIME NOT NULL , 
    sched_time TIME NOT NULL , 
    remarks VARCHAR(1000) NOT NULL ) ENGINE = InnoDB;

    ALTER TABLE `tbl_tbdots` ADD `occupation` VARCHAR(255) NOT NULL AFTER `address`;
    ALTER TABLE `tbl_tbdots` ADD `id_resident` INT NOT NULL AFTER `id_tbdots`;
    ALTER TABLE tbl_tbdots ADD addedby INT NOT NULL AFTER remarks;
    ALTER TABLE tbl_tbdots CHANGE id_tbdots id_tbdots INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (id_tbdots);
    ALTER TABLE `tbl_tbdots` CHANGE `weight` `weight` VARCHAR(255) NOT NULL;
    ALTER TABLE `tbl_tbdots` CHANGE `height` `height` VARCHAR(255) NOT NULL;
    ALTER TABLE `tbl_tbdots` CHANGE `remarks` `remarks` VARCHAR(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL;
    ALTER TABLE `tbl_tbdots` DROP `sched_date`;
    ALTER TABLE `tbl_tbdots` DROP `sched_time`;

    ALTER TABLE `tbl_tbdots` ADD `date_applied` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `addedby`;

   ALTER TABLE `tbl_tbdots` DROP FOREIGN KEY `tbl_tbdots_ibfk_1`; ALTER TABLE `tbl_tbdots` ADD CONSTRAINT `tbl_tbdots_ibfk_1` FOREIGN KEY (`id_resident`) 
   REFERENCES `tbl_resident`(`id_resident`) ON DELETE CASCADE ON UPDATE CASCADE;



    CREATE TABLE bmis.tbl_vaccine 
    ( id_vaccine INT NOT NULL AUTO_INCREMENT , 
    child VARCHAR(255) NOT NULL , 
    age INT NOT NULL , 
    sex VARCHAR(255) NOT NULL , 
    bdate DATE NOT NULL , 
    bplace VARCHAR(255) NOT NULL , 
    address VARCHAR(255) NOT NULL , 
    height FLOAT NOT NULL , 
    weight FLOAT NOT NULL , 
    father VARCHAR(255) NOT NULL , 
    mother VARCHAR(255) NOT NULL , 
    dosage VARCHAR(255) NOT NULL , 
    vaccdate DATE NOT NULL , 
    remarks VARCHAR(1000) NOT NULL , 
    addedby VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_vaccine)) ENGINE = InnoDB;

    ALTER TABLE `tbl_vaccine` ADD `dateapply` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `addedby`;
    ALTER TABLE `tbl_vaccine` ADD `id_resident` INT NOT NULL AFTER `id_vaccine`;
    ALTER TABLE `tbl_vaccine` DROP `father`;
    ALTER TABLE `tbl_vaccine` DROP `mother`;
    ALTER TABLE `tbl_vaccine` DROP `dosage`;
    ALTER TABLE `tbl_vaccine` DROP `remarks`;
    ALTER TABLE `tbl_vaccine` CHANGE `id_resident` `id_resident` INT(11) NULL;

    ALTER TABLE `tbl_vaccine` ADD FOREIGN KEY (`id_resident`) REFERENCES `tbl_resident`(`id_resident`) ON DELETE CASCADE ON UPDATE CASCADE;

    ALTER TABLE `tbl_vaccine` ADD `lname` VARCHAR(255) NOT NULL AFTER `weight`, ADD `fname` VARCHAR(255) NOT NULL AFTER `lname`, ADD `mi` VARCHAR(255) NOT NULL AFTER `fname`, ADD `vaccine` VARCHAR(255) NOT NULL AFTER `mi`;

    CREATE TABLE bmis.tbl_animal 
    ( id_animal INT NOT NULL AUTO_INCREMENT , 
    pettype VARCHAR(255) NOT NULL , 
    breed VARCHAR(255) NOT NULL , 
    sex VARCHAR(255) NOT NULL , 
    age INT NOT NULL , 
    origin VARCHAR(255) NOT NULL , 
    purpose VARCHAR(255) NOT NULL , 
    disease VARCHAR(255) NOT NULL , 
    vaccination VARCHAR(255) NOT NULL , 
    vaccdate DATE NOT NULL , 
    owner VARCHAR(255) NOT NULL , 
    address VARCHAR(255) NOT NULL , 
    contact VARCHAR(255) NOT NULL , 
    addedby VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_animal)) ENGINE = InnoDB;

    ALTER TABLE `tbl_animal` DROP `origin`;
    ALTER TABLE `tbl_animal` DROP `vaccdate`;
    ALTER TABLE `tbl_animal` DROP `disease`;
    ALTER TABLE `tbl_animal` ADD `dateapply` DATE NULL DEFAULT CURRENT_TIMESTAMP AFTER `contact`;

    CREATE TABLE bmis.tbl_motherchild 
    ( id_motherchild INT NOT NULL AUTO_INCREMENT , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    age INT NOT NULL , 
    address VARCHAR(255) NOT NULL , 
    contact VARCHAR(255) NOT NULL , 
    remarks VARCHAR(1000) NOT NULL , 
    addedby VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_motherchild)) ENGINE = InnoDB;

    ALTER TABLE `tbl_motherchild` CHANGE `remarks` `remarks` VARCHAR(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL;
    ALTER TABLE `tbl_motherchild` ADD `id_resident` INT NOT NULL AFTER `id_motherchild`;
    ALTER TABLE `tbl_motherchild` ADD `dateapply` VARCHAR(244) NOT NULL AFTER `remarks`;
    ALTER TABLE `tbl_motherchild` CHANGE `dateapply` `dateapply` DATE NOT NULL;


    
    
    CREATE TABLE bmis.tbl_familyplan 
    ( id_familyplan INT NOT NULL AUTO_INCREMENT , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    bdate DATE NOT NULL , 
    age INT NOT NULL , 
    address VARCHAR(255) NOT NULL , 
    contact VARCHAR(255) NOT NULL , 
    occupation VARCHAR(255) NOT NULL , 
    status VARCHAR(255) NOT NULL , 
    spouse VARCHAR(255) NOT NULL , 
    sp_bdate DATE NOT NULL , 
    sp_age INT NOT NULL , 
    sp_occupation INT NOT NULL , 
    children INT NOT NULL , 
    income FLOAT NOT NULL , 
    sched_date DATE NOT NULL , 
    sched_time TIME NOT NULL , 
    addedby VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_familyplan)) ENGINE = InnoDB;

    ALTER TABLE `tbl_familyplan` ADD `id_resident` INT NOT NULL AFTER `id_familyplan`;
    ALTER TABLE `tbl_familyplan` ADD FOREIGN KEY (`id_resident`) REFERENCES `tbl_resident`(`id_resident`) ON DELETE CASCADE ON UPDATE CASCADE;
    ALTER TABLE `tbl_familyplan` CHANGE `sched_date` `dateapply` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP;
    ALTER TABLE `tbl_familyplan` CHANGE `sched_time` `timeapply` TIME NOT NULL;
    ALTER TABLE `tbl_familyplan` CHANGE `sp_occupation` `sp_occupation` VARCHAR(255) NOT NULL;

    ALTER TABLE `tbl_familyplan` DROP `timeapply`;

Documents Processing


    CREATE TABLE bmis.tbl_rescert 
    ( id_rescert INT NOT NULL AUTO_INCREMENT , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    age INT NOT NULL , 
    status VARCHAR(255) NOT NULL , 
    nationality VARCHAR(255) NOT NULL , 
    address VARCHAR(255) NOT NULL , 
    addedby VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_rescert)) ENGINE = InnoDB;

    CREATE TABLE bmis.tbl_clearance 
    ( id_clearance INT NOT NULL AUTO_INCREMENT , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    age INT NOT NULL , 
    status VARCHAR(255) NOT NULL , 
    address VARCHAR(255) NOT NULL , 
    purpose VARCHAR(255) NOT NULL , 
    addedby VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_clearance)) ENGINE = InnoDB;

    CREATE TABLE bmis.tbl_indigency 
    ( id_indigency INT NOT NULL AUTO_INCREMENT , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    income FLOAT NOT NULL , 
    date DATE NOT NULL , 
    addedby VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_indigency)) ENGINE = InnoDB;

Non user tables

    CREATE TABLE bmis.tbl_announcement 
    ( id_announcement INT NOT NULL AUTO_INCREMENT , 
    event VARCHAR(1000) NOT NULL , 
    start_date DATETIME NOT NULL , 
    end_date DATETIME NOT NULL , 
    addedby VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_announcement)) ENGINE = InnoDB;

    ALTER TABLE `tbl_announcement` ADD `target` VARCHAR(255) NULL AFTER `event`;
    ALTER TABLE `tbl_announcement` CHANGE `start_date` `start_date` DATE NOT NULL;
    ALTER TABLE `tbl_announcement` CHANGE `end_date` `end_date` DATE NOT NULL;



    CREATE TABLE bmis.tbl_medicine 
    ( id_medicine INT NOT NULL AUTO_INCREMENT , 
    item VARCHAR(255) NOT NULL , 
    dosage VARCHAR(255) NOT NULL , 
    dateman DATE NOT NULL , 
    origin VARCHAR(255) NOT NULL , 
    in DATE NOT NULL , 
    out DATE NOT NULL , 
    stocks INT NOT NULL , 
    remarks VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_medicine)) ENGINE = InnoDB;

    "ALTER TABLE `tbl_medicine` DROP `dosage`;"

    ALTER TABLE tbl_medicine ADD addedby VARCHAR(255) NOT NULL AFTER remarks;
    ALTER TABLE tbl_medicine CHANGE date_in datein DATE NOT NULL;
    ALTER TABLE tbl_medicine CHANGE out dateout DATE NOT NULL;

    CREATE TABLE bmis.tbl_blotter 
    ( id_blotter INT NOT NULL AUTO_INCREMENT , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    age INT NOT NULL , 
    sex VARCHAR(255) NOT NULL , 
    address VARCHAR(255) NOT NULL , 
    image LONGBLOB NOT NULL , 
    narrative LONGTEXT NOT NULL , 
    person_to_complain INT NOT NULL , 
    sched_date INT NOT NULL , 
    sched_time INT NOT NULL , 
    addedby INT NOT NULL , 
    PRIMARY KEY (id_blotter)) ENGINE = InnoDB;







        if (isset($_POST['resident_change_password'])) {
            $id_resident = $_GET['id_resident'];
            $oldpassword = md5($_POST['oldpassword']);
            $oldpasswordverify = md5($_POST['oldpasswordverify']);
            $newpassword = md5($_POST['newpassword']);
            $checkpassword = $_POST['checkpassword'];

            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT `password` FROM tbl_resident WHERE id_resident = ?");
            $stmt->execute([$id_resident]);
            $result = $stmt->fetch();

            if($result > 0) {
                
                if (md5($_POST['newpassword']) != md5($_POST['checkpassword'])){
                    echo "New Password and Verification Password does not Match";
                }

                elseif (md5($_POST['oldpassword']) != md5($_POST['oldpasswordverify'])){
                    echo "Old Password is Incorrect";
                }

                else {
                    $connection = $this->openConn();
                    $stmt = $connection->prepare("UPDATE tbl_resident SET password =? WHERE id_resident = ?");
                    $stmt->execute([ md5($newpassword), $id_resident]);
                    
                    $message2 = "Password Updated";
                    echo "<script type='text/javascript'>alert('$message2');</script>";
                    header("refresh: 0");
                }

            }
        }