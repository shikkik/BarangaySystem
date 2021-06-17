<?php

    
    require('classes/main.class.php');
    $bmis->create_admin();
    $userdetails = $bmis->get_userdata();

    print_r($userdetails);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <div class="container-fluid"> 
        <div class="row"> 
            <div class="col"> 
            <form method="post"> 
                <label> Email </label>
                <input type="email" name="email">

                <label> Password </label>
                <input type="password" name="password"> 

                <label> Firstname </label>
                <input type="text" name="fname">

                <label> Lastname </label>
                <input type="text" name="lname">

                <label> Middle name </label>
                <input type="text" name="mi">

                <input type="hidden" name="role" value="administrator"> 
                <button class="btn btn-dark" type="submit" name="add_admin"> Add </button>

                <a href="admin_changepass.php?id_admin=<?= $userdetails['id_admin']?>" class="btn btn-dark"> Change Password </a>
            </form>
            </div>
        </div> 
    </div>


    
        
    </body>
</html>