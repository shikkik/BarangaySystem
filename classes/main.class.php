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

        //authentication function para sa sa tatlong type ng accounts
        public function login() {
            if(isset($_POST['login'])) {

                $email = $_POST['email'];
                $password = md5($_POST['password']);
            
                $connection = $this->openConn();

                //unang i c capture admin
                $stmt = $connection->prepare("SELECT * FROM tbl_admin WHERE email = ? AND password = ?");
                $stmt->Execute([$email, $password]);
                $user = $stmt->fetch();
               

                //statement na mag ch check kung admin yung role
                if($user['role'] == 'administrator') {
                    $this->set_userdata($user);
                    header('Location: admn_dashboard.php');
                    return (0);
                }

                //kapag hindi admin ang role ng nag enter next na i c capture user login
                elseif($user['role'] != 'administrator') {
                    $stmt = $connection->prepare("SELECT * FROM tbl_user WHERE email = ? AND password = ?");
                    $stmt->Execute([$email, $password]);
                    $user = $stmt->fetch();
                   
                    //statement na mag ch check kung user yung role
                    if($user['role'] == 'user') {
                        $this->set_userdata($user);
                        header('Location: staff_dashboard.php');
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
            "id_user" => $array['id_user'],
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


 //----------------------------------------------------- ADMIN CRUD ---------------------------------------------------------
    public function create_admin() {

        if(isset($_POST['add_admin'])) {
        
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $role = $_POST['role'];
    
                if ($this->check_admin($email) == 0 ) {
        
                    $connection = $this->openConn();
                    $stmt = $connection->prepare("INSERT INTO tbl_admin (`email`,`password`,`lname`,`fname`,
                    `mi`, `role` ) VALUES (?, ?, ?, ?, ?, ?)");
                    
                    $stmt->Execute([$email, $password, $lname, $fname, $mi, $role]);
                    
                    $message2 = "Administrator account added, you can now continue logging in";
                    echo "<script type='text/javascript'>alert('$message2');</script>";
                }
            }
    
            else {
                echo "<script type='text/javascript'>alert('Account already exists');</script>";
            }
    }



 //  ----------------------------------------------- ANNOUNCEMENT CRUD ---------------------------------------------------------


    public function create_announcement() {
        if(isset($_POST['create_announce'])) {
            $id_announcement = $_POST['id_announcement'];
            $event = $_POST['event'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $addedby = $_POST['addedby'];

            $connection = $this->openConn();
            $stmt = $connection->prepare("INSERT INTO tbl_announcement (`id_announcement`, 
            `event`, `start_date`, `end_date`, `addedby`) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$id_announcement, $event, $start_date, $end_date, $addedby]);

            $message2 = "Announcement Added";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header('refresh:0');
        }

        else {
            $message2 = "There was a problem in creating this data";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");
        }
    }

    public function view_announcement(){
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * from tbl_announcement");
        $stmt->execute();
        $view = $stmt->fetchAll();
        return $view;
    }

    public function update_announcement() {
        if (isset($_POST['update_announce'])) {
            $id_announcement = $_GET['id_announcement'];
            $event = $_POST['event'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $addedby = $_POST['addedby'];

            $connection = $this->openConn();
            $stmt = $connection->prepare("UPDATE tbl_announcement SET event =?, start_date =?, 
            end_date = ?, addedby =? WHERE id_announcement = ?");
            $stmt->execute([ $event, $start_date, $end_date, $addedby, $id_announcement]);
               
            $message2 = "Announcement Updated";
            echo "<script type='text/javascript'>alert('$message2');</script>";
             header("refresh: 0");
        }

        else {
            $message2 = "There was a problem in updating this data";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");
        }
    }

    public function delete_announcement(){
        $id_announcement = $_POST['id_announcement'];

        if(isset($_POST['delete_announcement'])) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("DELETE FROM tbl_announcement where id_announcement = ?");
            $stmt->execute([$id_announcement]);

            header("Refresh:0");
        }
    }

    public function count_announcement() {
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT COUNT(*) from tbl_announcement");
        $stmt->execute();
        $ancount = $stmt->fetchColumn();
        return $ancount;
    }

    //------------------------------------------ MOTHER CHILD CHECKUP CRUD -----------------------------------------------


    public function create_animal() {
        $id_resident = $_POST['id_resident'];
        $pettype = $_POST['pettype'];
        $breed = $_POST['breed'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $purpose = $_POST['purpose'];
        $vaccination = $_POST['vaccination'];
        $owner = $_POST['owner'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $dateapply = $_POST['dateapply'];
        $addedby = $_POST['addedby'];


        $connection = $this->openConn();
        $stmt = $connection->prepare("INSERT INTO tbl_animal (`id_resident`, 
        `pettype`, `breed`, `sex`, `age`, `purpose`, `vaccination`, `owner`, `address`,
        `contact`, `dateapply`, `addedby`)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([$id_resident, $pettype, $breed, $sex, $age, $purpose, $vaccination,
        $owner, $address,  $contact, $dateapply,  $addedby]);

        $message2 = "Application Applied, you will be receive our text message for further details";
        echo "<script type='text/javascript'>alert('$message2');</script>";
        header("refresh: 0");
        
    }

    public function view_animal(){
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * from tbl_animal");
        $stmt->execute();
        $view = $stmt->fetchAll();
        return $view;
    }

    public function update_animal() {
        if (isset($_POST['update_animal'])) {
            $id_animal = $_GET['id_animal'];
            $pettype = $_POST['pettype'];
            $breed = $_POST['breed'];
            $sex = $_POST['sex'];
            $age = $_POST['age'];
            $purpose = $_POST['purpose'];
            $vaccination = $_POST['vaccination'];
            $owner = $_POST['owner'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            $dateapply = $_POST['dateapply'];
            $addedby = $_POST['addedby'];

            $connection = $this->openConn();
            $stmt = $connection->prepare("UPDATE tbl_animal SET pettype = ?, breed = ?, sex = ?, 
            age = ?, purpose = ?, vaccination = ?, owner = ?, address = ?, contact = ?, dateapply = ?,
            addedby = ? WHERE id_animal = ?");
            $stmt->execute([ $pettype, $breed, $sex, $age, $purpose, $vaccination, $owner, 
            $address, $contact, $dateapply, $addedby, $id_animal]);
            
            $message2 = "Animal Registry & Welfare Data Updated";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");
        }
    }

    public function delete_animal(){
        $id_animal = $_POST['id_animal'];

        if(isset($_POST['delete_animal'])) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("DELETE FROM tbl_animal where id_animal = ?");
            $stmt->execute([$id_animal]);

            header("Refresh:0");
        }
    }


    //  --------------------------------------------------------- MEDICINE CRUD ---------------------------------------------------------


    public function create_medicine() {
        if(isset($_POST['create_medicine'])) {

            $id_medicine = $_POST['id_medicine'];
            $item = $_POST['item'];
            $dateman = $_POST['dateman'];
            $origin = $_POST['origin'];
            $datein = $_POST['datein'];
            $dateout = $_POST['dateout'];
            $stocks = $_POST['stocks'];
            $remarks = $_POST['remarks'];
            $addedby = $_POST['addedby'];

            $connection = $this->openConn();
            $stmt = $connection->prepare("INSERT INTO tbl_medicine (`id_medicine`, 
            `item`, `dateman`, `origin`, `datein`, `dateout`, `stocks`, `remarks`, `addedby`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->execute([$id_medicine, $item, $dateman, $origin, $datein, $dateout, $stocks, $remarks, $addedby]);

            $message2 = "Medicine Added";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            
            header('refresh:0');
        }
    }


    public function view_medicine(){
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * from tbl_medicine");
        $stmt->execute();
        $view = $stmt->fetchAll();

        return $view;
    }

    public function update_medicine() {
        if (isset($_POST['update_medicine'])) {
            $id_medicine = $_GET['id_medicine'];
            $item = $_POST['item'];
            $dateman = $_POST['dateman'];
            $origin = $_POST['origin'];
            $datein = $_POST['datein'];
            $dateout = $_POST['dateout'];
            $stocks = $_POST['stocks'];
            $remarks = $_POST['remarks'];
            $addedby = $_POST['addedby'];


            $connection = $this->openConn();
            $stmt = $connection->prepare("UPDATE tbl_medicine SET item =?, dateman =?, 
            origin = ?, datein = ?, dateout = ?, stocks = ?, remarks =?, addedby = ?
            WHERE id_medicine = ?");
            $stmt->execute([ $item, $dateman, $origin, $datein, $dateout, $stocks, $remarks, $addedby, $id_medicine]);
            
            $message2 = "Medicine Item Updated";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");

        }
    }

    public function delete_medicine(){
        $id_medicine = $_POST['id_medicine'];

        if(isset($_POST['delete_medicine'])) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("DELETE FROM tbl_medicine where id_medicine = ?");
            $stmt->execute([$id_medicine]);

            header("Refresh:0");
        }
    }

    //------------------------------------------ TB DOTS CRUD -----------------------------------------------


    public function create_tbdots() {
        if(isset($_POST['create_tbdots'])) {
            $id_tbdots = $_POST['id_tbdots'];
            $id_resident = $_POST['id_resident'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $address = $_POST['address'];
            $occupation = $_POST['occupation'];
            $contact = $_POST['contact'];
            $bdate = $_POST['bdate'];
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            $philhealth = $_POST['philhealth'];
            $remarks = $_POST['remarks'];
            $addedby = $_POST['addedby'];



            $connection = $this->openConn();
            $stmt = $connection->prepare("INSERT INTO tbl_tbdots (`id_tbdots`, `id_resident`, 
            `lname`, `fname`, `mi`, `age`, `sex`, `address`, `occupation`, `contact`, `bdate`, `height`, 
            `weight`, `philhealth`, `remarks`, `addedby`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->execute([$id_tbdots, $id_resident, $lname, $fname, $mi, $age, $sex, 
            $address, $occupation, $contact, $bdate, $height, $weight, $philhealth, $remarks, $addedby]);

            $message2 = "Application Applied";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header('refresh:0');
        }
    }

    public function view_tbdots(){
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * from tbl_tbdots");
        $stmt->execute();
        $view = $stmt->fetchAll();
        return $view;
    }

    public function update_tbdots() {
        if (isset($_POST['update_tbdots'])) {
            $id_tbdots = $_GET['id_tbdots'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $address = $_POST['address'];
            $occupation = $_POST['occupation'];
            $contact = $_POST['contact'];
            $bdate = $_POST['bdate'];
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            $philhealth = $_POST['philhealth'];
            $remarks = $_POST['remarks'];
            $addedby = $_POST['addedby'];


            $connection = $this->openConn();
            $stmt = $connection->prepare("UPDATE tbl_tbdots SET lname =?, fname =?, 
            mi = ?, age = ?, sex = ?, `address` = ?, occupation = ?, contact = ?,
            bdate = ?, height = ?, `weight` = ?, philhealth = ? remarks =?, addedby = ?
            WHERE id_tbdots = ?");
            $stmt->execute([ $lname, $fname, $mi, $age, $sex, $address, $occupation, $contact, 
            $bdate, $height, $weight, $philhealth, $remarks, $addedby, $id_tbdots]);
            
            $message2 = "TB DOTS Data Updated";
            echo "<script type='text/javascript'>alert('$message2');</script>";
             header("refresh: 0");
        }

        else {
            $message2 = "There was a problem in updating this data";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");
        }
    }

    public function delete_tbdots(){
        $id_tbdots = $_POST['id_tbdots'];

        if(isset($_POST['delete_tbdots'])) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("DELETE FROM tbl_tbdots where id_tbdots = ?");
            $stmt->execute([$id_tbdots]);

            header("Refresh:0");
        }
    }


    //------------------------------------------ MOTHER CHILD CHECKUP CRUD -----------------------------------------------


    public function create_motherchild() {
        $id_resident = $_POST['id_resident'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mi = $_POST['mi'];
        $age = $_POST['age'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $remarks = $_POST['remarks'];
        $dateapply = $_POST['dateapply'];
        $addedby = $_POST['addedby'];


        $connection = $this->openConn();
        $stmt = $connection->prepare("INSERT INTO tbl_motherchild (`id_resident`, 
        `lname`, `fname`, `mi`, `age`, `contact`, `address`, `remarks`, `dateapply`, `addedby`)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([$id_resident, $lname, $fname, $mi, $age, 
        $contact, $address,  $remarks, $dateapply,  $addedby]);

        $message2 = "Application Applied, you will be receive our text message for further details";
        echo "<script type='text/javascript'>alert('$message2');</script>";
        header("refresh: 0");
        
    }

    public function view_motherchild(){
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * from tbl_motherchild");
        $stmt->execute();
        $view = $stmt->fetchAll();
        return $view;
    }

    public function update_motherchild() {
        if (isset($_POST['update_motherchild'])) {
            $id_motherchild = $_GET['id_motherchild'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $age = $_POST['age'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $remarks = $_POST['remarks'];
            $addedby = $_POST['addedby'];

            $connection = $this->openConn();
            $stmt = $connection->prepare("UPDATE tbl_motherchild SET lname = ?, fname = ?, mi = ?, 
            age = ?, contact = ?, address = ?, remarks = ?, addedby = ? WHERE id_motherchild = ?");
            $stmt->execute([ $lname, $fname, $mi, $age, $address, $contact, $remarks, $addedby, $id_motherchild]);
            
            $message2 = "Mother & Child Check-up Data Updated";
            echo "<script type='text/javascript'>alert('$message2');</script>";
             header("refresh: 0");
        }
    }

    public function delete_motherchild(){
        $id_motherchild = $_POST['id_motherchild'];

        if(isset($_POST['delete_motherchild'])) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("DELETE FROM tbl_motherchild where id_motherchild = ?");
            $stmt->execute([$id_motherchild]);

            header("Refresh:0");
        }
    }

    //------------------------------------------------------- FAMILY PLAN CRUD ----------------------------------------------------------------------


    public function create_familyplan() {
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $age = $_POST['age'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $occupation = $_POST['occupation'];
            $status = $_POST['status'];
            $bdate = $_POST['bdate'];

            $spouse = $_POST['sp_lname']. " ". $_POST['sp_fname']. " ". $_POST['sp_mi'];
            $sp_age = $_POST['sp_age'];
            $sp_bdate = $_POST['sp_bdate'];
            $sp_occupation = $_POST['sp_occupation'];
            $children = $_POST['children'];
            $income = $_POST['income'];
            $id_resident = $_POST['id_resident'];
            $dateapply = $_POST['dateapply'];
            $addedby = $_POST['addedby'];

                $connection = $this->openConn();
                $stmt = $connection->prepare("INSERT INTO tbl_familyplan (`id_resident`, 
                `lname`, `fname`, `mi`, `age`, `contact`, `address`, `occupation`, `status`, `bdate`, 
                `spouse`, `sp_age`, `sp_bdate`, `sp_occupation`, `children`, `income`, `dateapply`, 
                `addedby`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                $stmt->execute([$id_resident, $lname, $fname, $mi, $age,
                $contact, $address, $occupation, $status, $bdate, $spouse, $sp_age, $sp_bdate, $sp_occupation,
                $children, $income, $dateapply,  $addedby]);

                $message2 = "Application Applied, you will be receive our text message for further details";
                echo "<script type='text/javascript'>alert('$message2');</script>";
                header('refresh:0');
    }

    public function view_familyplan(){
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * from tbl_familyplan");
        $stmt->execute();
        $view = $stmt->fetchAll();
        return $view;
    }

    public function update_familyplan() {
        if (isset($_POST['update_familyplan'])) {
            $id_familyplan = $_GET['id_familyplan'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $age = $_POST['age'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $occupation = $_POST['occupation'];
            $status = $_POST['status'];
            $bdate = $_POST['bdate'];

            $spouse = $_POST['sp_lname']. " ". $_POST['sp_fname']. " ". $_POST['sp_mi'];
            $sp_age = $_POST['sp_age'];
            $sp_bdate = $_POST['sp_bdate'];
            $sp_occupation = $_POST['sp_occupation'];
            $children = $_POST['children'];
            $income = $_POST['income'];
            $addedby = $_POST['addedby'];

            $connection = $this->openConn();
            $stmt = $connection->prepare("UPDATE tbl_familyplan SET lname = ?, fname = ?, mi = ?, 
            age = ?, contact = ?, address = ?, occupation = ?, status = ?, bdate =?, spouse = ?,
            sp_age = ?, sp_bdate = ?, sp_occupation = ?, children = ?, income = ?, addedby = ? WHERE id_familyplan = ?");
            $stmt->execute([ $lname, $fname, $mi, $age,  $contact, $address, $occupation, $status, $bdate,
            $spouse, $sp_age, $sp_bdate, $sp_occupation, $children, $income, $addedby, $id_familyplan]);
            
            $message2 = "Family Plan Data Updated";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");
        }
    }

    public function delete_familyplan(){
        $id_familyplan = $_POST['id_familyplan'];

        if(isset($_POST['delete_familyplan'])) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("DELETE FROM tbl_familyplan where id_familyplan = ?");
            $stmt->execute([$id_familyplan]);

            header("Refresh:0");
        }
    }

    //------------------------------------------ VACCINATION PROGRAM CRUD -----------------------------------------------


    public function create_vaccine() {

        if(isset($_POST['create_vaccine'])) {
            $id_resident = $_POST['id_resident'];
            $child = $_POST['child'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $bdate = $_POST['bdate'];
            $bplace = $_POST['bplace'];
            $address = $_POST['address'];
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $vaccine = $_POST['vaccine'];
            $vaccdate = $_POST['vaccdate'];
            $addedby = $_POST['addedby'];


            $connection = $this->openConn();
            $stmt = $connection->prepare("INSERT INTO tbl_vaccine (`id_resident`, 
            `child`, `age`, `sex`, `bdate`, `bplace`, `address`, `height`,  `weight`,
            `lname`, `fname`, `mi`, `vaccine`, `vaccdate`, `addedby`)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->execute([$id_resident, $child, $age, $sex, $bdate, $bplace, $address, $height, $weight,
            $lname, $fname, $mi, $vaccine, $vaccdate, $addedby]);

            $message2 = "Application Applied, you will receive our text message for further details";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");
        }
        
        
    }

    public function view_vaccine(){
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * from tbl_vaccine");
        $stmt->execute();
        $view = $stmt->fetchAll();
        return $view;
    }

    public function update_vaccine() {
        if (isset($_POST['update_vaccine'])) {
            $id_vaccine = $_GET['id_vaccine'];
            $child = $_POST['child'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $bdate = $_POST['bdate'];
            $bplace = $_POST['bplace'];
            $address = $_POST['address'];
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $vaccine = $_POST['vaccine'];
            $vaccdate = $_POST['vaccdate'];
            $addedby = $_POST['addedby'];


            $connection = $this->openConn();
            $stmt = $connection->prepare("UPDATE tbl_vaccine SET child = ?, age = ?, sex = ?,
            bdate = ?, bplace= ?, address = ?, height = ?, weight = ?, lname = ?, fname = ?, mi = ?, 
            vaccine = ?, vaccdate = ?, addedby = ? WHERE id_vaccine = ?");
            $stmt->execute([$child, $age, $sex, $bdate, $bplace, $address, $height, $weight,
            $lname, $fname, $mi, $vaccine, $vaccdate, $addedby, $id_vaccine]);
            
            $message2 = "Vaccination Program Data Updated";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");
        }
    }

    public function delete_vaccine(){
        $id_vaccine = $_POST['id_vaccine'];

        if(isset($_POST['delete_vaccine'])) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("DELETE FROM tbl_vaccine where id_vaccine = ?");
            $stmt->execute([$id_vaccine]);

            header("Refresh:0");
        }
    }

    //------------------------------------------ Certificate of Residenct CRUD -----------------------------------------------
    public function get_single_certofres($id_resident){

        $id_resident = $_GET['id_resident'];
        
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * FROM tbl_rescert where id_resident = ?");
        $stmt->execute([$id_resident]);
        $resident = $stmt->fetch();
        $total = $stmt->rowCount();

        if($total > 0 )  {
            return $resident;
        }
        else{
            return false;
        }
    }
    public function create_certofres() {

        if(isset($_POST['create_certofres'])) {
            $id_rescert = $_POST['id_rescert'];
            $id_resident = $_POST['id_resident'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $age = $_POST['age'];
            $status = $_POST['status'];
            $address = $_POST['address'];
            $nationality = $_POST['nationality'];
            $addedby = $_POST['addedby'];


            $connection = $this->openConn();
            $stmt = $connection->prepare("INSERT INTO tbl_rescert (`id_rescert`, `id_resident`, `lname`, `fname`, `mi`,
             `age`, `status`, `address`,`nationality`, `addedby`)
            VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->execute([$id_rescert, $id_resident, $lname, $fname, $mi,  $age, $status,  $address, $nationality,   $addedby]);

            $message2 = "Application Applied, you will receive our text message for further details";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");
        }
        
        
    }

    public function view_certofres(){
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * from tbl_rescert");
        $stmt->execute();
        $view = $stmt->fetchAll();
        return $view;
    }


    public function delete_certofres(){
        $id_rescert = $_POST['id_rescert'];

        if(isset($_POST['delete_clearance'])) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("DELETE FROM tbl_rescert where id_rescert = ?");
            $stmt->execute([$id_rescert]);

            header("Refresh:0");
        }
    }

     //------------------------------------------ BRGY CLEARANCE CRUD -----------------------------------------------

     public function create_certofindigency() {

        if(isset($_POST['create_certofindigency'])) {
            $id_indigency = $_POST['id_indigency'];
            $id_resident = $_POST['id_resident'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $age = $_POST['age'];
            $status = $_POST['status'];
            $address = $_POST['address'];
            $purpose = $_POST['purpose'];
            $addedby = $_POST['addedby'];


            $connection = $this->openConn();
            $stmt = $connection->prepare("INSERT INTO tbl_indigency (`id_indigency`, `id_resident`, `lname`, `fname`, `mi`,
             `age`, `status`, `address`,`purpose`, `addedby`)
            VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->execute([$id_indigency, $id_resident, $lname, $fname, $mi,  $age, $status,  $address, $purpose,   $addedby]);

            $message2 = "Application Applied, you will receive our text message for further details";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");
        }
        
        
    }

    public function view_certofindigency(){
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * from tbl_indigency");
        $stmt->execute();
        $view = $stmt->fetchAll();
        return $view;
    }


    public function delete_certofindigency(){
        $id_indigency = $_POST['id_indigency'];

        if(isset($_POST['delete_certofindegency'])) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("DELETE FROM tbl_indigince where id_indigency = ?");
            $stmt->execute([$id_indigency]);

            header("Refresh:0");
        }
    }


     //------------------------------------------ BRGY CLEARANCE CRUD -----------------------------------------------

     public function create_brgyclearance() {

        if(isset($_POST['create_brgyclearance'])) {
            $id_clearance = $_POST['id_clearance'];
            $id_resident = $_POST['id_resident'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $age = $_POST['age'];
            $status = $_POST['status'];
            $address = $_POST['address'];
            $purpose = $_POST['purpose'];
            $addedby = $_POST['addedby'];


            $connection = $this->openConn();
            $stmt = $connection->prepare("INSERT INTO tbl_clearance (`id_clearance`, `id_resident`, `lname`, `fname`, `mi`,
             `age`, `status`, `address`,`purpose`, `addedby`)
            VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->execute([$id_clearance, $id_resident, $lname, $fname, $mi,  $age, $status,  $address, $purpose,   $addedby]);

            $message2 = "Application Applied, you will receive our text message for further details";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header("refresh: 0");
        }
        
        
    }

    public function view_clearance(){
        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * from tbl_clearance");
        $stmt->execute();
        $view = $stmt->fetchAll();
        return $view;
    }


    public function delete_clearance(){
        $id_clearance = $_POST['id_clearance'];

        if(isset($_POST['delete_clearance'])) {
            $connection = $this->openConn();
            $stmt = $connection->prepare("DELETE FROM tbl_clearance where id_clearance = ?");
            $stmt->execute([$id_clearance]);

            header("Refresh:0");
        }
    }




    
    //------------------------------------------ EXTRA FUNCTIONS ----------------------------------------------
    public function show_announcement() {
        
    }

    public function check_admin($email) {

        $connection = $this->openConn();
        $stmt = $connection->prepare("SELECT * FROM tbl_admin WHERE email = ?");
        $stmt->Execute([$email]);
        $total = $stmt->rowCount(); 

        return $total;
    }

   

}

    

$bmis = new BMISClass(); //variable to call outside of its class

?>
