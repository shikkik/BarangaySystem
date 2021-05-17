<?php 

    require_once('main.class.php');
    

    class ResidentClass extends BMISClass {

        /*
        //authentication method for residents to enter
        public function residentlogin() {
        if(isset($_POST['residentlogin'])) {

            $username = $_POST['email'];
            $password = $_POST['password']; 
        
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM tbl_residents WHERE email = ? AND password = ?");
            $stmt->Execute([$username, $password]);
            $user = $stmt->fetch();
            $total = $stmt->rowCount();
            
                //calls the set_userdata function 
                if($total > 0) {
                    $this->set_userdata($user);
                    header('Location: resident_homepage.php');
                }
                
                else {
                    echo '<script>alert("Email or Password is Invalid")</script>';
                }
            }
        }
        */


        //------------------------------------ RESIDENT CRUD FUNCTIONS ----------------------------------------

        public function create_resident() {

            if(isset($_POST['add_resident'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
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

                    if( !in_array( $age, range( $min_age, $max_age) ) ){
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

        public function count_resident() {
            $connection = $this->openConn();

            $stmt = $connection->prepare("SELECT COUNT(*) from tbl_resident");
            $stmt->execute();
            $rescount = $stmt->fetchColumn();

            return $rescount;
        }

        public function view_household_list() {
            $lname = $_POST['lname'];
            $mi = $_POST['mi'];

            if(isset($_POST['search_household'])) {
                $connection = $this->openConn();

                $stmt1 = $connection->prepare("SELECT * FROM `tbl_resident` WHERE `lname` LIKE '%$lname%' and  `mi` LIKE '%$mi%'");
			    $stmt1->execute();
            }
            else {

            }
        }

        public function update_resident() {
            if (isset($_POST['update_resident'])) {
                $email = $_GET['email'];
                $password = $_POST['password'];
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
                    $stmt->execute([ $password, $lname, $fname, $mi, $age, $sex, $status, $address,
                    $contact, $bdate, $bplace, $nationality, $familyrole, $role, $addedby, $email]);
                   
                    echo "naka udpate na";
                    header("location: resident_crud.php");

            }
        }

        public function delete_resident(){

            $email = $_POST['email'];

            if(isset($_POST['delete_resident'])) {
                $connection = $this->openConn();
                $stmt = $connection->prepare("DELETE FROM tbl_resident where email = ?");
                $stmt->execute([$email]);

                header("Refresh:0");
            }
        }





        public function check_household($lname, $mi) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM tbl_resident WHERE lname = ? AND mi = ?");
            $stmt->Execute([$lname, $mi]);
            $total = $stmt->rowCount(); 
    
            return $total;
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

    public function resident_change_password() {
        
        if(isset($_POST['change_pass'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];
            $newpassword = $_POST['newpassword'];
            $confirmpassword = $_POST['confirmpassword'];

            $connection = $this->openConn(); 

            $stmt1 = $connection->prepare("SELECT password FROM tbl_resident WHERE email = ?");
            $stmt1->Execute([$email]);
            $stmt1->fetch();

            if($stmt1 > 0){

                if($password) {

                }

            } 

            else {
                $message2 = "Invalid";
                echo "<script type='text/javascript'>alert('$message2');</script>";
            }
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

    }

    $residentbmis = new ResidentClass();
?>