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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- custom css --> 
        <link href="../Capstone/customcss/homestyle.css" rel="stylesheet" type="text/css"> 
        <!-- bootstrap css --> 
        <link href="../Capstone/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
    </head>

    <body>
        <!-- eto yung navbar -->
        <nav class="navbar sticky-top navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php"> Barangay E-Services </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"> <a href=""> </a> </li>
              </ul>
            </div>
        </nav>


    
        <div class="container-fluid"> 
            <form method="post"> 
                <label> Email </label>
                <br>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
                <br> 
                <label> Password </label>
                <br> 
                <input type="password" class="form-control" name="password" placeholder="Username">
                <br>
                <br>
                <button class="btn btn-primary" type="submit" name="userlogin"> Submit </button>
            </form>
        </div>
    </body>
</html>