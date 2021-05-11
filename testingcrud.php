<?php 
    require('classes/staff.class.php');
    $userdetails = $staffbms->get_userdata();

    $view = $staffbms->view_staff();
    //$staffbms->validate_user();
    $staffbms->create_staff();
    $staffbms->update_staff();
    $staffbms->delete_staff(); 
    
   
    
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
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-xl-12"> 
                    <table class="table table-dark">
                    <form action="" method="post">
                        <thead> 
                            <tr>
                                <th> Email </th>
                                <th> Password </th>
                                <th> Lastname </th>
                                <th> Firstname </th>
                                <th> Middle Initial </th>
                                <th> Age </th>
                                <th> Sex </th>
                                <th> Address </th>
                                <th> Contact </th>
                                <th> Position </th>
                                <th> Role </th>
                                <th> Added By </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody> 
                        <?php if(is_array($view)) {?>
                            <?php foreach($view as $view) {?>
                            <tr>
                                <td> <?= $view['email'];?> </td>
                                <td> <?= $view['password'];?> </td>
                                <td> <?= $view['lname'];?> </td>
                                <td> <?= $view['fname'];?> </td>
                                <td> <?= $view['mi'];?> </td>
                                <td> <?= $view['age'];?> </td>
                                <td> <?= $view['sex'];?> </td>
                                <td> <?= $view['address'];?> </td>
                                <td> <?= $view['contact'];?> </td>
                                <td> <?= $view['position'];?> </td>
                                <td> <?= $view['role'];?> </td>
                                <td> <?= $userdetails['fullname'];?> </td>
                                <td>   
                                    <a href="testingcrud.php?email=<?= $view['email']?>" class="btn btn-primary">  Update </a>
                                    <a href="testingcrud.php?email=<?= $view['email']?>" class="btn btn-danger" name="delete_user">  Remove </a>
                                </td>
                            </tr>
                            <?php }?>
                        <?php } ?>
                        </tbody>
                    </form>
                    </table>
                </div>
            </div>
        </div>



        <div class="container fluid" style="margin-top: 5em;"> 
            <div class="row"> 
                <div class="col"> 
                <div class="card bg-dark text-white"> 
                    <div class="card-header"> Insert User </div>
                    <div class="card-body"> 
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
                    <input type="text" placeholder="" name="role" value="<?= $view['role'];?>"> 
                    <br> 
                    <label> added by </label>
                    <br>
                    <input type="text" placeholder="" name="addedby" value="<?= $userdetails['fullname'];?>"> 
                    <br>
                    <br>
                    <button class="btn btn-success" type="submit" name="add_user"> Submit </button>
                    </form>
                    </div>
                </div>
                </div>

                <div class="col"> 
                <div class="card bg-dark text-white"> 
                    <div class="card-header"> Update User </div>
                    <div class="card-body"> 
                    <form method="post"> 
                        <label> Email </label>
                        <input type="email" name="email" value="<?= $view['email']?>">
                        <br>
                        <label> Password </label>
                        <input type="password" name="password">
                        <br> 
                        <label> Last Name </label>
                        <input type="text" name="lname" > 
                        <br>
                        <label> First Name </label>
                        <input type="text" name="fname"> 
                        <br> 
                        <label> middle initial </label>
                        <input type="text" name="mi"> 
                        <br> 
                        <label> age </label>
                        <input type="text"  name="age"> 
                        <br> 
                        <label> sex </label>
                        <input type="text" name="sex" > 
                        <br> 
                        <label> address </label>
                        <input type="text" name="address" > 
                        <br> 
                        <label> contact </label>
                        <input type="text" name="contact" > 
                        <br> 
                        <label> position </label>
                        <input type="text" name="position" >
                        <br> 
                        <label> role </label>
                        <input type="text" name="role" > 
                        <br> 
                        <label> added by </label>
                        <input type="text" name="addedby" > 
                        <br>
                        <br>
                        <button class="btn btn-primary" type="submit" name="update_staff"> Update </button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
