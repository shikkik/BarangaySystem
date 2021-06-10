<?php 

    require_once('main.class.php');
    

    class ResidentClass extends BMISClass {
        //------------------------------------ RESIDENT CRUD FUNCTIONS ----------------------------------------

        public function create_resident() {
            if(isset($_POST['add_resident'])) {
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $lname = $_POST['lname'];
                $fname = $_POST['fname'];
                $mi = $_POST['mi'];
                $age = $_POST['age'];
                $sex = $_POST['sex'];
                $status = $_POST['status'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $bdate = $_POST['bdate'];
                $bplace = $_POST['bplace'];
                $nationality = $_POST['nationality'];
                $familyrole = $_POST['family_role'];
                $role = $_POST['role'];
                $addedby = $_POST['addedby'];

                $min_age = 18;
                $max_age = 150;

                if ($this->check_resident($email) == 0 ) {

                    if(!in_array( $age, range( $min_age, $max_age) ) ){
                        $message1 = "Sorry, you are still underaged to register an account";
                        echo "<script type='text/javascript'>alert('$message1');</script>";
                        return(0);
                    }
    
                    else {
                        $connection = $this->openConn();
                        $stmt = $connection->prepare("INSERT INTO tbl_resident (`email`,`password`,`lname`,`fname`,
                        `mi`, `age`, `sex`, `status`, `address`, `contact`, `bdate`, `bplace`, `nationality`,`family_role`,
                        `role`, `addedby`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
    
                        $stmt->Execute([$email, $password, $lname, $fname, $mi, $age, $sex, $status, 
                        $address, $contact, $bdate, $bplace, $nationality, $familyrole, $role, $addedby]);

                        $message2 = "Account added, you can now continue logging in";
                        echo "<script type='text/javascript'>alert('$message2');</script>";

                        header("Refresh:0");
                    }
                }

                else {
                    echo "<script type='text/javascript'>alert('Email Account already exists');</script>";
                }
            }
        }

        public function view_resident(){
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * from tbl_resident");
            $stmt->execute();
            $view = $stmt->fetchAll();
            return $view;
        }

        public function update_resident() {
            if (isset($_POST['update_resident'])) {
                $email = $_GET['email'];
                $password = md5($_POST['password']);
                $lname = $_POST['lname'];
                $fname = $_POST['fname'];
                $mi = $_POST['mi'];
                $age = $_POST['age'];
                $sex = $_POST['sex'];
                $status = $_POST['status'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $bdate = $_POST['bdate'];
                $bplace = $_POST['bplace'];
                $nationality = $_POST['nationality'];
                $familyrole = $_POST['family_role'];
                $role = $_POST['role'];
                $addedby = $_POST['addedby'];

                $connection = $this->openConn();
                $stmt = $connection->prepare("UPDATE tbl_resident SET password =?, lname =?, 
                fname = ?, mi =?, age =?, sex =?, status =?, address =?, contact =?,
                bdate =?, bplace =?, nationality =?,family_role =?, role =?, addedby =? WHERE email = ?");
                $stmt->execute([$password, $lname, $fname, $mi, $age, $sex, $status, $address,
                $contact, $bdate, $bplace, $nationality, $familyrole, $role, $addedby, $email]);
                   
                $message2 = "Resident Data Updated";
                echo "<script type='text/javascript'>alert('$message2');</script>";
                header("refresh: 0");
            }
        }

        public function delete_resident(){
            $email = $_POST['email'];

            if(isset($_POST['delete_resident'])) {
                $connection = $this->openConn();
                $stmt = $connection->prepare("DELETE FROM tbl_resident where email = ?");
                $stmt->execute([$email]);

                $message2 = "Resident Data Deleted";
                
                echo "<script type='text/javascript'>alert('$message2');</script>";
                header("Refresh:0");
            }
        }

    //-------------------------------- EXTRA FUNCTIONS FOR RESIDENT CLASS ---------------------------------

    


    public function get_single_resident($id_resident){

        $id_resident = $_GET['id_resident'];
        
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * FROM tbl_resident where id_resident = ?");
        $stmt->execute([$id_resident]);
        $resident = $stmt->fetch();
        $total = $stmt->rowCount();

        if($total > 0 )  {
            return $resident;
        }
        else{
            return false;
        }
    }
   
    public function check_resident($email) {

        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * FROM tbl_resident WHERE email = ?");
        $stmt->Execute([$email]);
        $total = $stmt->rowCount(); 

        return $total;
    }

    public function count_resident() {
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_resident");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();
        return $rescount;
    }

    public function check_household($lname, $mi) {
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * FROM tbl_resident WHERE lname = ? AND mi = ?");
        $stmt->Execute([$lname, $mi]);
        $total = $stmt->rowCount(); 
        return $total;
    }

    public function view_household_list() {
        $lname = $_POST['lname'];
        $mi = $_POST['mi'];

        if(isset($_POST['search_household'])) {
            $connection = $this->openConn();
            $stmt1 = $connection->prepare("SELECT * FROM `tbl_resident` WHERE `lname` LIKE '%$lname%' and  `mi` LIKE '%$mi%'");
            $stmt1->execute();
        }
    }

    public function count_male_resident() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_resident where sex = 'male' ");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }

    public function count_female_resident() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_resident where sex = 'female'");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }

    public function count_head_resident() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_resident where family_role = 'Family Head'");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }

    public function count_member_resident() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_resident where family_role = 'Family Member'");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }

    public function count_animals() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_animal");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }

    public function count_female_animals() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_animal where sex = 'female'");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }

    public function count_male_animals() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_animal where sex = 'male'");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }

    public function count_tbdots() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_tbdots");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }

    public function count_vacc() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_vaccine");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }

    public function count_familyplan() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_familyplan");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }
    public function count_motherchild() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_motherchild");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }

    public function count_medicine() {
        $connection = $this->openConn();

        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_medicine");
        $stmt->execute();
        $rescount = $stmt->fetchColumn();

        return $rescount;
    }


    public function profile_update() {
        $id_resident = $_GET['id_resident'];
        $age = $_POST['age'];
        $status = $_POST['status'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];

        if (isset($_POST['profile_update'])) {
           
            $connection = $this->openConn();
            $stmt = $connection->prepare("UPDATE tbl_resident SET  `age` = ?,  `status` = ?, 
            `address` = ?, `contact` = ? WHERE id_resident = ?");
            $stmt->execute([ $age, $status, $address,
            $contact, $id_resident]);
               
            $message2 = "Resident Profile Updated";
                
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("Refresh:0");

        }

    }

    //-------------------------------------- EXTRA FUNCTIONS ------------------------------------------------

    public function change_password() {
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
    }


    }

    $residentbmis = new ResidentClass();
?>