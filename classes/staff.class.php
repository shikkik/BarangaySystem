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

        public function create_staff() {

            if(isset($_POST['add_staff'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
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
                        $message2 = "Account added, you can now continue logging in";
    
                        echo "<script type='text/javascript'>alert('$message2');</script>";
    
                }

                else {
                    echo "<script type='text/javascript'>alert('Email Account already exists');</script>";
                }
            }
            
        }

        public function check_staff($email) {

            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM tbl_user WHERE email = ?");
            $stmt->Execute([$email]);
            $total = $stmt->rowCount(); 
    
            return $total;
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

            $email = $_GET['email'];
            
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM tbl_user where email = '$email'");
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
                $email = $_GET['email'];
                $password = $_POST['password'];
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
                    $stmt = $connection->prepare("UPDATE tbl_user SET password =?, lname =?, 
                    fname = ?, mi =?, age =?, sex =?, address =?, contact =?, position =?, 
                    role =?, addedby =? WHERE email = ?");
                    $stmt->execute([ $password, $lname, $fname, $mi, $age, $sex, $address,
                    $contact, $position,$role, $addedby, $email]);
                   
                    echo "naka udpate na";
                    header("location: staff_crud.php");

            }
        }

        public function delete_staff(){

            $email = $_POST['email'];

            if(isset($_POST['delete_staff'])) {
                $connection = $this->openConn();
                $stmt = $connection->prepare("DELETE FROM tbl_user where email = ?");
                $stmt->execute([$email]);

                header("location: staff_crud.php");
            }
        }
    }

    $staffbmis = new StaffClass();
?>