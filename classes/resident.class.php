<?php 

    require_once('main.class.php');

    class ResidentClass extends BMSClass {

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

        public function create_resident() {
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

                echo "Resident Account Added";
            }

            else {
                echo "Email Account already exists";
            }
        }

        public function check_resident($email) {

            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM members WHERE email = ?");
            $stmt->Execute([$email]);
            $total = $stmt->rowCount(); 
    
            return $total;
        }
    }

    $residentbms = new ResidentClass();
?>