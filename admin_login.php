<?php 
    if(!isset($_SESSION)) {
        session_start();
    }

    //include('autoloader.php');
    require('classes/main.class.php');
    $bms->login();

?>

<!DOCTYPE html> 
<html> 
    <head> 
        <title> Barangay Management System </title>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- custom css --> 
        <link href="../BarangaySystem/customcss/homestyle.css" rel="stylesheet" type="text/css"> 
        <!-- bootstrap css --> 
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
    </head>

    <body>
        <div class="container-fluid"> 
            <form method="post"> 
                <label> Username </label>
                <br>
                <input type="text" class="form-control" name="username" placeholder="Username">
                <br> 
                <label> Password </label>
                <br> 
                <input type="password" class="form-control" name="password" placeholder="Password">
                <br>
                <br>
                <button class="btn btn-primary" type="submit" name="adminlogin"> Submit </button>
            </form>
        </div>
    </body> 
</html>