<?php 

    require('main.class.php');

    class StaffClass extends BMSClass {

        public function validate_user(){
            $userdetails = $this->get_userdata();
            
            if (isset($userdetails)) {
    
                if($userdetails['role'] == 'user' || $userdetails['role'] == 'administrator') {
                    return $userdetails;
                }
    
                else {
                    $this->show_404();
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

        public function create_staff(){
            
            if(isset($_POST['add_user'])) {

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
    
                if ($this->check_staff($email) == 0) {
                    $connection = $this->openConn();
                    $stmt = $connection->prepare("INSERT INTO tbl_user (`email`,`password`,`lname`,`fname`,
                    `mi`, `age`, `sex`, `address`, `contact`, `position`, `role`, `addedby`) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    
                    $stmt->Execute([$email, $password, $lname, $fname, $mi, $age, $sex, $address, $contact, $position, $role, $addedby]);
    
                    echo "User Account Added";
                }
    
                else {
                    echo "User Account already exists";
                }
            }
        }

        public function view_staff() {
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM tbl_user");
            $stmt->execute();
            $view = $stmt->fetchAll();
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
            if(isset($_POST['update_user'])) {


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

                
                if ($this->check_staff($email) == 1) {
                
                $connection = $this->openConn();
                $stmt = $connection->prepare("UPDATE tbl_user SET email =?, password =?, lname =?,
                fname =?, mi =?, age =?, sex =?, address =?, contact =?, position =?, role =? WHERE email = ?");
                $stmt->Execute([$password, $lname, $fname, $mi, $age, $sex, $address, $contact, $position, $role, $addedby, $email]);

                echo "User Account Updated";
                }

                else {
                    echo "hindi gumana badi";
                }
            }
        }

        public function delete_staff() {
            if(isset($_POST['delete_user'])) {

                $email = $_POST['email'];

                $connection = $this->openConn();
                $stmt = $connection->prepare("DELETE FROM tbl_user WHERE email = :email");
                //$stmt = $connection->prepare("DELETE FROM tbl_user WHERE email = '" .$_GET['email'] ."'");
                $stmt->execute(array(": email"=>$email));
                $result = $stmt->rowCount();
    
                if ($result == 0) {
                    
                    echo "User Account Deleted";
                }
                
                else {
                    echo "hindi gumana badi";
                }
    
            }

           
            
            
        }
        /*
        //authentication method for residents to enter
        public function stafflogin() {
        if(isset($_POST['stafflogin'])) {

            $email = $_POST['email'];
            $password = $_POST['password']; 
        
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM tbl_staff WHERE email = ? AND password = ?");
            $stmt->Execute([$email, $password]);
            $user = $stmt->fetch(); //i f fetch niya yung data na gagamitin para sa session handling
            $total = $stmt->rowCount(); //para malaman tsaka i return yung affected rows or records sa command or query 
            
                //i ch check kung meron siyang nakuha sa rowcount
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


    }

    $staffbms = new StaffClass();
?>