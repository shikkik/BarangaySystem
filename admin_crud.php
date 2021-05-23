<?php

    require('classes/main.class.php');
    $bmis->create_admin();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    
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
                <button class="btn" type="submit" name="add_admin"> Add </button>
            </form>
            </div>
        </div> 
    </div>


    
        
    </body>
</html>