<?php 
    require('classes/main.class.php');
    $userdetails = $bms->get_userdata();
    $bms->validate_admin();

    print_r($userdetails);
?>

<!DOCTYPE html> 
<html>

    <head> 
        <title> Testing Lang </title>
    </head>

    <body> 
        <h1> This is the admin page </h1>
    </body>
</html>