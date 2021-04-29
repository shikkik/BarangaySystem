<?php 
    require('classes/mainclass.class.php');
    require('classes/userclass.class.php');
    
    $userdetails = $bms->get_userdata();
    //print_r($userdetails);
?>

<!DOCTYPE html> 
<html>

    <head> 
    <title> Barangay Management System </title>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- custom css --> 
        <link href="../BarangaySystem/customcss/userpagestyle.css" rel="stylesheet" type="text/css"> 
        <!-- bootstrap css --> 
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <!-- fontawesome icons --> 
        <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>

    <body> 
        <!-- eto yung navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Barangay E-Services</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="nav-dropdown"> 
                <li>  </li>
            </ul>
            <div class="dropdown">
                <button class="dropbtn">Dropdown
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="#">Logout</a>
                </div>
            </div>


            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $userdetails['fullname'];?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
                </div>
            </div>
        </nav>


        <h1> This is the user page </h1>

        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"> </script>
    </body>
</html>
