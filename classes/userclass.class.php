<?php 
    require_once('mainclass.class.php');

    class ResidentClass extends BMSClass {

        //authentication method for residents to enter
        public function login() {
        if(isset($_POST['userlogin'])) {

            $username = $_POST['username'];
            $password = $_POST['password']; 
        
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM residents WHERE email = ? AND pass = ?");
            $stmt->Execute([$username, $password]);
            $user = $stmt->fetch();
            $total = $stmt->rowCount();  
        
            //calls the set_userdata function 
            if($total > 0) {
                $this->set_userdata($user);
                header('Location: homepage.php');
            }
            
            else {
                echo "Login Failed";
            }
        
        }
    }
    }
?>