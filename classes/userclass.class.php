<?php 
    require_once('mainclass.class.php');

    class ResidentClass extends BMSClass {

        //authentication method for residents to enter
        public function userlogin() {
        if(isset($_POST['userlogin'])) {

            $username = $_POST['email'];
            $password = $_POST['password']; 
        
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM dummyresident WHERE email = ? AND password = ?");
            $stmt->Execute([$username, $password]);
            $user = $stmt->fetch();
            $total = $stmt->rowCount();  
            
                //calls the set_userdata function 
                if($total > 0) {
                    $this->set_userdata($user);
                    header('Location: userlandingpage.php');
                }
                
                else {
                    echo '<script>alert("Email or Password is Invalid")</script>';
                }
            }
        }
    }

    $userbms = new ResidentClass();
?>