<?php 
    if(!isset($_SESSION)) {
        session_start();
    }

    //include('autoloader.php');
    require('classes/userclass.class.php');
    $userbms->userlogin();

?>

<!DOCTYPE html> 
<html> 
    <head> 
        <title> Barangay Management System </title>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <!-- custom css --> 
        <link href="../BarangaySystem/customcss/style.css" rel="stylesheet" type="text/css">
        <!-- bootstrap css -->
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
        <!-- fontawesome icons --> 
        <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
        <!-- fontawesome icons --> 
        <script src="../BarangaySystem/customjs/main.js" type="text/javascript"></script>
    </head>

    <body>
        <!-- eto yung navbar -->
        <nav class="navbar sticky-top navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php"> <img src="../BarangaySystem/icons/logo.png" width="40px" height="40px">&nbsp; 
            <span style="font-size: 1em;"> Barangay Sorsogon </span> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"> <a href=""> </a> </li>
              </ul>
            </div>
        </nav>

        <!-- This is the heading and card section --> 
        <section class="main-section"> 
        <div class="container-fluid"> 
            <div class="row"> 
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="col-sm-6 main-heading text-center"> 
=======

<div class="container">
                <div class="col-sm-6 main-heading text-center" > 
>>>>>>> fe8ae08adcd9e0fd976611768775a79d2af29b5a
=======
                <div class="col-sm-6  text-center icon-spacing"> 
>>>>>>> f6304910bfab8edb1e784f662244322c8f767568
                    <h1> Barangay Services Management System</h1>
                    <p1> Designed for accessibility, now available in your barangay. </p1>
                
                    <div class="row justify-content-center icon-spacing hide-icons wrapper"> 
                        <div class="col-sm-4"> 
                            <img src="../BarangaySystem/icons/residents.png">
                                Resident Application
                        </div>

                        <div class="col-sm-4"> 
                            <img src="../BarangaySystem/icons/blotter.png">
                                Blotter Request
                        </div>

                        <div class="col-sm-4"> 
                            <img src="../BarangaySystem/icons/clearance.png">
                                Barangay Clearance
                        </div>
                    </div>
                </div>

                <div class="col-md-5"> 
                    <div class="card main-card wrapper"> 
                        <div class="card-body"> 
                            <form method="post"> 
                                <label> Email </label>
                                <br>
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required> 
                                <br> 
                                <label> Password </label>
                                <br> 
                                <input type="password" class="form-control" name="password" placeholder="Username" required>
                                <br>
                                <br>
                                <button class="btn btn-primary" type="submit" name="userlogin"> Log-in </button>
                            </form>
                            <hr>
                            <div class="registration-section"> 
                            <p1> <strong> Haven't registered yet? </strong> </p1> 
                            <br>
                            <p1> Hindi ka pa rehistrado? </p1> 
                            <br>
                            <button class="btn btn-success create-button" onclick="redirectuserregi();"> Create Account </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        </section>
    </body>
</html>