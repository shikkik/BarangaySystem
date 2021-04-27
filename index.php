<?php 
    if(!isset($_SESSION)) {
        session_start();
    }

    //include('autoloader.php');
    require('classes/mainclass.class.php');
    $bms->login();

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
        <div> 
            <form method="post"> 
                <input type="text" class="form-control" name="username" placeholder="Username">
                <br>  
                <input type="password" class="form-control" name="password" placeholder="Username">
                <br>
                <br>
                <button class="btn btn-primary" type="submit" name="adminlogin"> Submit </button>
            </form>
        </div>
    </body> 
</html>