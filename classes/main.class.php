<?php 

class BMSClass {

    //access modifiers para sa connection ng mysql database
    protected $server = "mysql:host=localhost;dbname=bms";
    protected $user = "root";
    protected $pass = "";
    protected $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    //displays an error 404
    public function show_404()
    {
        http_response_code(404);
        echo "Hindi ka admin bawal dito";
        die;
    }

    //eto yung nag o open ng connection ng db
    public function openConn() {
        try {
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            return $this->con;
        }

        catch(PDOException $e) {
            echo "Datbase Connection Error! ", $e->getMessage();
        }
    }

    //eto yung nag c close ng connection ng db
    public function closeConn() {
        $this->con = null;
    }

    //authentication method for administrator to enter
    public function login() {
        if(isset($_POST['adminlogin'])) {

            $username = $_POST['username'];
            $password = $_POST['password']; 
        
            $connection = $this->openConn();
            $stmt = $connection->prepare("SELECT * FROM testadmin WHERE username = ? AND pass = ?");
            $stmt->Execute([$username, $password]);
            $user = $stmt->fetch();
            $total = $stmt->rowCount();  
        
            //calls the set_userdata function 
            if($total > 0) {
                $this->set_userdata($user);
                header('Location: admin_dashboard.php');
            }
            
            else {
                echo "Login Failed";
            }
        
        }
    }

    public function logout(){
        if(!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['userdata'] = null;
        unset($_SESSION['userdata']);
    }

     //eto yung condition na mag s set userdata na gagamiting pagkakakilala sayo sa buong session kapag nag login in ka
     public function set_userdata($array) {

        //i ch check nito kung naka set naba yung session, kapag hindi pa naka set i r run niya yung session_start();
        if(!isset($_SESSION)) {
            session_start();
        }

        //eto si userdata yung mag s set ng name mo tsaka role/access habang ikaw ay nag b browse at gumagamit ng store management
        $_SESSION['userdata'] = array(
            "fullname" => $array['fname']. " ".$array['lname'],
            "role" => $array['role'],
            "currentage" => $array['age']

        );
        return $_SESSION['userdata'];
    }

    // etong method na get_userdata() kukuha ng session mo na 'userdata' mo na i identify sino yung naka login sa site 
    public function get_userdata(){
        
        //i ch check niya ulit kung naka start na ba session o hindi, kapag hindi pa ay i s start niya para surebol
        if(!isset($_SESSION)) {
            session_start();
        }

        return $_SESSION['userdata'];

        //eto naman i ch check niya kung yung 'userdata' naka set na ba sa session natin
        if(!isset($_SESSION['userdata'])) {
            return $_SESSION['userdata'];
        } 

        else {
            return null;
        }
    }

    public function validate_admin(){
        $userdetails = $this->get_userdata();

        if (isset($userdetails)) {
            
            if($userdetails['role'] != "administrator") {
                $this->show_404();
            }

            else {
                return $userdetails;
            }
        }
    }
}

$bms = new BMSClass(); //access modifier to call outside of its class

?>
