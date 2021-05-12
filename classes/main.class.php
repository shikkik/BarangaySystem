<?php 

class BMISClass {

    //pag s set ng database connection na inherited sa child classes
    protected $server = "mysql:host=localhost;dbname=bmis";
    protected $user = "root";
    protected $pass = "";
    protected $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    //displays an error 404
    public function show_404()
    {
        http_response_code(404);
        echo "Page is currently unavailable";
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

        //authentication function para sa administrator
        public function login() {
            if(isset($_POST['login'])) {

                $email = $_POST['email'];
                $password = $_POST['password'];
            
                $connection = $this->openConn();

                
                $stmt = $connection->prepare("SELECT * FROM tbl_admin WHERE email = ? AND password = ?");
                $stmt->Execute([$email, $password]);
                $user = $stmt->fetch();
                //$total = $stmt->rowCount();

                if($user['role'] == 'administrator') {
                    $this->set_userdata($user);
                    header('Location: admin_dashboard.php');
                    return (0);
                }

                elseif($user['role'] != 'administrator') {
                    $stmt = $connection->prepare("SELECT * FROM tbl_user WHERE email = ? AND password = ?");
                    $stmt->Execute([$email, $password]);
                    $user = $stmt->fetch();
                   
                    if($user['role'] == 'user') {
                        $this->set_userdata($user);
                        header('Location: testingcrud.php');
                        return(0);
                    }

                    elseif($user['role'] != 'user') {
                        $stmt = $connection->prepare("SELECT * FROM tbl_resident WHERE email = ? AND password = ?");
                        $stmt->Execute([$email, $password]);
                        $user = $stmt->fetch();

                        if($user['role'] == 'resident') {
                            $this->set_userdata($user);
                            header('Location: resident_homepage.php');
                            return(0);
                        }

                        else {
                            $message = "Invalid Email or Password";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                    }
                }
            }
        }

    //eto yung function na mag e end ng session tas i l logout ka 
    public function logout(){
        if(!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['userdata'] = null;
        unset($_SESSION['userdata']); 
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

    //eto yung condition na mag s set userdata na gagamiting pagkakakilala sayo sa buong session kapag nag login in ka
    public function set_userdata($array) {

        //i ch check nito kung naka set naba yung session, kapag hindi pa naka set i r run niya yung session_start();
        if(!isset($_SESSION)) {
            session_start();
        }

        //eto si userdata yung mag s set ng name mo tsaka role/access habang ikaw ay nag b browse at gumagamit ng store management
        $_SESSION['userdata'] = array(
            "id_resident" => $array['id_resident'], 
            "emailadd" => $array['email'],
            //"fullname" => $array['lname']. " ".$array['fname']. " ".$array['mi'],
            "surname" => $array['lname'],
            "firstname" => $array['fname'],
            "mname" => $array['mi'],
            "age" => $array['age'],
            "sex" => $array['sex'],
            "status" => $array['status'],
            "address" => $array['address'],
            "contact" => $array['contact'],
            "bdate" => $array['bdate'],
            "bplace" => $array['bplace'],
            "nationality" => $array['nationality'],
            "family_role" => $array['family_role'],
            "role" => $array['role']
        );
        return $_SESSION['userdata'];
    }

    //eto yung function na mag bibigay restriction sa mga admin pages
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

$bmis = new BMISClass(); //variable to call outside of its class

?>
