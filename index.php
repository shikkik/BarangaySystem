<?php 
    if(!isset($_SESSION)) {
        session_start();
    }

    //include('autoloader.php');
    require('classes/resident.class.php');
    $residentbms->residentlogin();

?>

<!DOCTYPE html> 
<html> 
    <head> 
        <title> Barangay Management System </title>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <!-- custom css --> 
        <link href="../BarangaySystem/customcss/indexstyle.css" rel="stylesheet" type="text/css">
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
                <div class="col-sm"></div>
                    <div class="col-sm main-heading text-center" > 
                        <h1> Barangay Information Management System</h1>
                        <p1> Designed for accessibility, now available in your barangay. </p1>
                    </div>
                <div class="col-sm"></div>
            </div>
                <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm"> 
                    <div class="card main-card wrapper mtop"> 
                        <div class="card-body"> 
                            <form method="post"> 
                                <label> Email </label>
                                <br>
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required> 
                                <br> 
                                <label> Password </label>
                                <br> 
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <br>
                                <br>
                                <button class="btn btn-primary" type="submit" name="residentlogin"> Log-in </button>
                            </form>
                            <hr>
                            <div class="registration-section"> 
                            <p1> <strong> Haven't registered yet? </strong> </p1> 
                            <br>
                            <p1> Hindi ka pa rehistrado? </p1> 
                            <br>
                            <button class="btn btn-success create-button" onclick="trying();"> Create Account </button> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm"></div>
                </div>
                          
        </div>

        
        </section>
    </body>
</html>