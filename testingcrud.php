<?php 
    require('classes/staff.class.php');

    $staffbms->validate_user();
    $staffbms->create_staff();
    $staffbms->update_staff();
    $staffbms->delete_staff();
    $view = $staffbms->view_staff();
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
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-xl-12"> 
                    <table class="table table-dark">
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
                                <td> <?= $userdetails['role'];?> </td>
                                <td> <?= $userdetails['fullname'];?> </td>
                            </tr>
                        
                            <?php }?>
                        <?php } ?>
                        </tbody>
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
                    <input type="text" placeholder="" name="role" value="<?= $userdetails['role'];?>"> 
                    <br> 
                    <label> role </label>
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
                    <button class="btn btn-primary" type="submit" name="update_user"> Update </button>
                    </form>
                    </div>
                </div>
                </div>

                <div class="col"> 
                <div class="card bg-dark text-white"> 
                    <div class="card-header"> Delete User </div>
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
                    <input type="text" placeholder="" name="role" value="<?= $userdetails['role'];?>"> 
                    <br> 
                    <label> role </label>
                    <br>
                    <input type="text" placeholder="" name="addedby" value="<?= $userdetails['fullname'];?>"> 
                    <br>
                    <br>
                    <button class="btn btn-danger" type="submit" name="delete_user"> Delete </button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
