<?php 
    require('classes/userclass.class.php');
    $userdetails = $bms->get_userdata();

    print_r($userdetails);
?>

<!DOCTYPE html> 
<html>

    <head> 
        <title> Testing </title>
    </head>

    <body> 
        <h1> This is the user page </h1>
    </body>
</html>
