<?php 

    require_once('main.class.php');

    class StaffClass extends BMISClass {

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

    
    //------------------------------------- CRUD FUNCTIONS FOR STAFF -----------------------------------------------

        public function create_staff() {

            if(isset($_POST['add_staff'])) {
                $email = $_POST['email'];
                $password = ($_POST['password']);
                $lname = $_POST['lname'];
                $fname = $_POST['fname'];
                $mi = $_POST['mi'];
                $age = $_POST['age'];
                $sex = $_POST['sex'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $position = $_POST['position'];
                $role = $_POST['role'];
                $addedby = $_POST['addedby'];

                if ($this->check_staff($email) == 0 ) {

                    $connection = $this->openConn();
                    $stmt = $connection->prepare("INSERT INTO tbl_user (`email`,`password`,`lname`,`fname`,
                    `mi`, `age`, `sex`, `address`, `contact`, `position` , `role`, `addedby`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
                    $stmt->Execute([$email, $password, $lname, $fname, $mi, $age, $sex, 
                    $address, $contact, $position, $role, $addedby]);
                    $message2 = "New Staff Adedd";
    
                    echo "<script type='text/javascript'>alert('$message2');</script>";
                    header('refresh:0');
    
                }

                else {
                    echo "<script type='text/javascript'>alert('Email Account already exists');</script>";
                }
            }
        }


        public function view_staff(){

            $connection = $this->openConn();

            $stmt = $connection->prepare("SELECT * from tbl_user");
            $stmt->execute();
            $view = $stmt->fetchAll();
            //$rows = $stmt->
            return $view;
           
        }

        public function view_single_staff(){

            $id_staff = $_GET['id_staff'];
            
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM tbl_user where id_user = '$id_staff'");
            $stmt->execute();
            $view = $stmt->fetch(); 
            $total = $stmt->rowCount();
 
            //eto yung condition na i ch check kung may laman si products at i re return niya kapag meron
            if($total > 0 )  {
                return $view;
            }
            else{
                return false;
            }
        }

        public function update_staff() {
            if (isset($_POST['update_staff'])) {
                $id_user = $_GET['id_user'];
                $password = ($_POST['password']);
                $lname = $_POST['lname'];
                $fname = $_POST['fname'];
                $mi = $_POST['mi'];
                $age = $_POST['age'];
                $sex = $_POST['sex'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $position = $_POST['position'];
                $role = $_POST['role'];
                $addedby = $_POST['addedby'];
                
                    $connection = $this->openConn();
                    $stmt = $connection->prepare("UPDATE tbl_user SET `password` =?, lname =?, 
                    fname = ?, mi =?, age =?, sex =?, `address` =?, contact =?, position =?, 
                    `role` =?, addedby =? WHERE id_user = ?");
                    $stmt->execute([ $password, $lname, $fname, $mi, $age, $sex, $address,
                    $contact, $position,$role, $addedby, $id_user]);
                   
                    $message2 = "Staff Account Updated";
    
                    echo "<script type='text/javascript'>alert('$message2');</script>";
                    header('refresh:0');

            }
        }

        public function delete_staff(){

            $id_user = $_POST['id_user'];

            if(isset($_POST['delete_staff'])) {
                $connection = $this->openConn();
                $stmt = $connection->prepare("DELETE FROM tbl_user where id_user = ?");
                $stmt->execute([$id_user]);
                
                $message2 = "Staff Account Deleted";
                
                echo "<script type='text/javascript'>alert('$message2');</script>";
                 header('refresh:0');
            }
        }

    //--------------------------------------------- EXTRA FUNCTIONS FOR STAFF -------------------------------------------------

            public function get_single_staff($id_user){

                $id_user = $_GET['id_user'];
                
                $connection = $this->openConn();
                $stmt = $connection->prepare("SELECT * FROM tbl_user where id_user = ?");
                $stmt->execute([$id_user]);
                $user = $stmt->fetch();
                $total = $stmt->rowCount();

                if($total > 0 )  {
                    return $user;
                }
                else{
                    return false;
                }
            }


        public function check_staff($id_user) {

            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM tbl_user WHERE id_user = ?");
            $stmt->Execute([$id_user]);
            $total = $stmt->rowCount(); 

            return $total;
        }

        public function count_staff() {
            $connection = $this->openConn();

            $stmt = $connection->prepare("SELECT COUNT(*) from tbl_user");
            $stmt->execute();
            $staffcount = $stmt->fetchColumn();

            return $staffcount;
        }

        public function count_mstaff() {
            $connection = $this->openConn();

            $stmt = $connection->prepare("SELECT COUNT(*) from tbl_user where sex = 'male'");
            $stmt->execute();
            $staffcount = $stmt->fetchColumn();

            return $staffcount;
        }

        public function count_fstaff() {
            $connection = $this->openConn();

            $stmt = $connection->prepare("SELECT COUNT(*) from tbl_user where sex = 'female'");
            $stmt->execute();
            $staffcount = $stmt->fetchColumn();

            return $staffcount;
        }


        //===================================== SCOPE CHANGED FEATURES =======================================

        public function view_staff_male(){
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * from tbl_user WHERE `sex` = 'Male'");
            $stmt->execute();   
            $view = $stmt->fetchAll();
            return $view;
        }
    
        public function view_staff_female(){
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * from tbl_user WHERE `sex` = 'Female'");
            $stmt->execute();
            $view = $stmt->fetchAll();
            return $view;
        }





    }
    $staffbmis = new StaffClass();
?>