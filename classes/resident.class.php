<?php 

    require_once('main.class.php');

    class ResidentClass extends BMSClass {

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
                $role = $_POST['role'];
                $addedby = $_POST['addedby'];

                if ($this->check_resident($email) == 0) {
                    $connection = $this->openConn();
                    $stmt = $connection->prepare("INSERT INTO tbl_resident (`email`,`password`,`lname`,`fname`,
                    `mi`, `age`, `sex`, `status`, `address`, `contact`, `bdate`, `bplace`, `nationality`,
                    `role`, `addedby`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                    $stmt->Execute([$email, $password, $lname, $fname, $mi, $age, $sex, $status, 
                    $address, $contact, $bdate, $bplace, $nationality, $role, $addedby]);

                    echo "<script type='text/javascript'>alert('Account added, you can now continue logging in');</script>";

                   
                }

                else {
                    echo "<script type='text/javascript'>alert('Email Account already exists');</script>";
                }
            }
            
        }

        public function check_resident($email) {

            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM tbl_resident WHERE email = ?");
            $stmt->Execute([$email]);
            $total = $stmt->rowCount(); 
    
            return $total;
        }

        public function view_resident(){
            
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $email = $_POST['email'];

            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT age, sex, email FROM tbl_resident");
            $stmt->execute();
            $view = $stmt->fetch($age, $sex, $email);
            $total = $stmt->rowCount();

            //eto yung condition na i ch check kung may laman si products at i re return niya kapag meron
            if($total > 0 )  {
                return $view;
            }
            else{
                return false;
            }
        }

        public function view_single_resident($email){
            
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $email = $_POST['email'];

            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT age, sex, email FROM tbl_resident where email = ?");
            $stmt->execute([$email]);
            $view = $stmt->fetch($age, $sex, $email);
            $total = $stmt->rowCount();

            //eto yung condition na i ch check kung may laman si products at i re return niya kapag meron
            if($total > 0 )  {
                return $view;
            }
            else{
                return false;
            }
        }
    }

    $residentbms = new ResidentClass();
?>