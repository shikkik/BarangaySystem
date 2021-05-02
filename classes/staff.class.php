<?php 

    require_once('main.class.php');

    class StaffClass extends BMSClass {

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





    }

    $stafftbms = new StaffClass();
?>