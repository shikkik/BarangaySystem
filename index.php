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