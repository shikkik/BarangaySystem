<?php 
    require('classes/staff.class.php');

    $staffbms->validate_user();
    $staffbms->create_staff();
    $userdetails = $staffbms->get_userdata();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
    </head>
    <body>
        <div class="container fluid" style="margin-top: 5em;"> 
            <div class="row"> 
                <div class="col"> </div>
                <div class="col"> 
                <form method="post"> 
                    <label> Email </label>
                    <br>
                    <input type="email" placeholder="email" name="email">
                    <br> 
                    <label> Password </label>
                    <br>
                    <input type="password" placeholder="password" name="password">
                    <br> 
                    <label> Last Name </label>
                    <br>
                    <input type="text" placeholder="surname" name="lname"> 
                    <br> 
                    <label> First Name </label>
                    <br>
                    <input type="text" placeholder="firstname" name="fname"> 
                    <br> 
                    <label> middle initial </label>
                    <br>
                    <input type="text" placeholder="mi" name="mi"> 
                    <br> 
                    <label> age </label>
                    <br>
                    <input type="text" placeholder="age" name="age"> 
                    <br> 
                    <label> sex </label>
                    <br>
                    <input type="text" placeholder="sex" name="sex"> 
                    <br> 
                    <label> address </label>
                    <br>
                    <input type="text" placeholder="address" name="address"> 
                    <br> 
                    <label> contact </label>
                    <br>
                    <input type="text" placeholder="contact" name="contact"> 
                    <br> 
                    <label> position </label>
                    <br>
                    <input type="text" placeholder="position" name="position">
                    <br> 
                    <label> role </label>
                    <br>
                    <input type="text" placeholder="" name="role" value="<?= $userdetails['role'];?>"> 
                    <br> 
                    <label> role </label>
                    <br>
                    <input type="text" placeholder="" name="addedby" value="<?= $userdetails['fullname'];?>"> 
                    <br>
                    <br>
                    <button class="btn btn-primary" type="submit" name="add_user"> Submit </button>
                </form>
                </div>

                <div class="col"> </div>
            </div>
        </div>
    </body>
</html>
