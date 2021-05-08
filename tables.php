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


    CREATE TABLE bmis.tbl_resident 
    ( id_resident INT NOT NULL AUTO_INCREMENT , 
    email VARCHAR(255) NOT NULL , 
    password VARCHAR(255) NOT NULL , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    age INT NOT NULL , 
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

    ALTER TABLE tbl_tbdots ADD addedby INT NOT NULL AFTER remarks;
    ALTER TABLE tbl_tbdots CHANGE id_tbdots id_tbdots INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (id_tbdots);



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

    CREATE TABLE bmis.tbl_motherchild 
    ( id_motherchild INT NOT NULL AUTO_INCREMENT , 
    lname VARCHAR(255) NOT NULL , 
    fname VARCHAR(255) NOT NULL , 
    mi VARCHAR(255) NOT NULL , 
    age INT NOT NULL , 
    address VARCHAR(255) NOT NULL , 
    contact VARCHAR(255) NOT NULL , 
    sched_date DATE NOT NULL , 
    sched_time TIME NOT NULL , 
    remarks VARCHAR(1000) NOT NULL , 
    addedby VARCHAR(255) NOT NULL , 
    PRIMARY KEY (id_motherchild)) ENGINE = InnoDB;

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





