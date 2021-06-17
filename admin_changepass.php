<?php

    
    require('classes/main.class.php');
    $bmis->admin_changepass();
    $userdetails = $bmis->get_userdata();

    $id_admin = $_GET['id_admin'];
    $admin = $bmis->get_single_admin($id_admin);

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
            <div class="col-md-10"> 
            <form method="post"> 
                <label> Old Password </label>
                <input type="text" name="oldpassword">
                <input type="text" name="oldpasswordverify" value="<?= $userdetails['password']?>">

                <label> New Password </label>
                <input type="text" name="newpassword"> 

                <label> Verify Password </label>
                <input type="text" name="checkpassword">

                <button class="btn btn-dark" type="submit" name="admin_changepass"> Change Password </button>
            </form>
            </div>
        </div> 
    </div>


    
        
    </body>
</html>