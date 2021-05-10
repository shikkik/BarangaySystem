<?php 
    require('classes/resident.class.php');

    $view = $residentbms->view_resident();
    $residentbms->create_resident();
    $residentbms->update_resident();
    $residentbms->delete_resident();
   
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
    </head>

    <body>
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-sm-12"> 
                    <table class="table table-dark">
                    <form action="" method="post">
                        <thead> 
                            <tr>
                                <th> Email </th>
                                <th> Password </th>
                                <th> Surname </th>
                                <th> First name </th>
                                <th> MI </th>
                                <th> Age </th>
                                <th> Sex </th>
                                <th> Status </th>
                                <th> Address </th>
                                <th> Contact </th>
                                <th> Bdate </th>
                                <th> Bplace </th>
                                <th> Nationality </th>
                                <th> Role </th>
                                <th> AddedBy </th>
                            </tr>
                        </thead>
                        <tbody> 
                        <?php if(is_array($view)) {?>
                            <?php foreach($view as $view) {?>
                            <tr>
                                <th> <?= $view['email'];?> </th>
                                <th> <?= $view['password'];?> </th>
                                <th> <?= $view['lname'];?> </th>
                                <th> <?= $view['fname'];?> </th>
                                <th> <?= $view['mi'];?> </th>
                                <th> <?= $view['age'];?> </th>
                                <th> <?= $view['sex'];?> </th>
                                <th> <?= $view['status'];?> </th>
                                <th> <?= $view['address'];?> </th>
                                <th> <?= $view['contact'];?> </th>
                                <th> <?= $view['bdate'];?> </th>
                                <th> <?= $view['bplace'];?> </th>
                                <th> <?= $view['nationality'];?> </th>
                                <th> <?= $view['role'];?> </th>
                                <th> <?= $view['addedby'];?> </th>
                                <td>    
                                <form action="" method="post">
                                    <a href="resident_crud.php?email=<?= $view['email'];?>" class="btn btn-primary">  Update </a>
                                    <input type="hidden" name="email" value="<?= $view['email'];?>">
                                    <button class="btn btn-danger" type="submit" name="delete_resident"> Remove </button>
                                    </form>
                                </td>
                            </tr>
                            <?php }?>
                        <?php } ?>
                        </tbody>
                    </form>
                    </table>
                </div>
            </div>

            <div class="row"> 
                <div class="col"> 
                    <form method="post"> 
                    <div class="row">
                                <div class="col">
                                    <label class="mtop"> Last Name</label>
                                    <input type="text" class="form-control" name="lname"  placeholder="Enter last name">
                                </div>

                                <div class="col">
                                    <label class="mtop" >First Name </label>
                                    <input type="text" class="form-control" name="fname"  placeholder="Enter first name">
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="col"> 
                                    <label class="mtop"> Middle Initial </label>
                                    <input type="text" class="form-control" name="mi" placeholder="Enter middle initial">
                                </div>

                                <div class="col"> 
                                    <label class="mtop"> Status </label>
                                    <input type="text" class="form-control" name="status"  placeholder="Enter status">  
                                </div>
                            </div>
                         
                            <div class="row">
                                <div class="col">
                                    <label class="mtop">Email </label>
                                    <input type="email" class="form-control" name="email"  placeholder="Enter email">
                                    <label class="mtop">Birth Date </label>
                                    <input type="date" class="form-control" name="bdate">
                                    <label class="mtop">Contact Number</label>
                                    <input type="tel" class="form-control" name="contact" placeholder="Enter contact number">
                                </div>

                                <div class="col">
                                    <label class="mtop">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                    <label class="mtop">Birth Place </label>
                                    <input type="text" class="form-control" name="bplace"  placeholder="Enter birth place">
                                    <label class="mtop">Nationality </label>
                                    <input type="text" class="form-control" name="nationality"  placeholder="Enter nationality">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label class="mtop"> Address </label>
                                    <input type="text" class="form-control" name="address"  placeholder="Enter Address">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label class="mtop">Age </label>
                                    <input type="number" class="form-control" name="age" placeholder="Age">
                                </div>

                                <div class="col rb">
                                    <label class="mtop">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex">
                                        <label class="form-check-label">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex">
                                        <label class="form-check-label" for="flexRadioDefault2">Female</label>
                                    </div>
                                </div>       
                            </div>

                            <div class="row mtop"> 
                                <div class="col"> 
                                   
                                    <input type="hidden" class="form-control" name="role" value="resident">
                                
                                </div>
                            </div>
                        <button class="btn btn-primary" type="submit" name="add_resident"> Add </button>
                    </form>
                </div>






                <div class="col">
                    <form method="post"> 
                            <div class="row">
                                <div class="col">
                                    <label class="mtop"> Last Name</label>
                                    <input type="text" class="form-control" name="lname"  placeholder="Enter last name">
                                </div>

                                <div class="col">
                                    <label class="mtop" >First Name </label>
                                    <input type="text" class="form-control" name="fname"  placeholder="Enter first name">
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="col"> 
                                    <label class="mtop"> Middle Initial </label>
                                    <input type="text" class="form-control" name="mi" placeholder="Enter middle initial">
                                </div>

                                <div class="col"> 
                                    <label class="mtop"> Status </label>
                                    <input type="text" class="form-control" name="status"  placeholder="Enter status">  
                                </div>
                            </div>
                         
                            <div class="row">
                                <div class="col">
                                    <label class="mtop">Email </label>
                                    <input type="email" class="form-control" name="email"  placeholder="Enter email">
                                    <label class="mtop">Birth Date </label>
                                    <input type="date" class="form-control" name="bdate">
                                    <label class="mtop">Contact Number</label>
                                    <input type="tel" class="form-control" name="contact" placeholder="Enter contact number">
                                </div>

                                <div class="col">
                                    <label class="mtop">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                    <label class="mtop">Birth Place </label>
                                    <input type="text" class="form-control" name="bplace"  placeholder="Enter birth place">
                                    <label class="mtop">Nationality </label>
                                    <input type="text" class="form-control" name="nationality"  placeholder="Enter nationality">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label class="mtop"> Address </label>
                                    <input type="text" class="form-control" name="address"  placeholder="Enter Address">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label class="mtop">Age </label>
                                    <input type="number" class="form-control" name="age" placeholder="Age">
                                </div>

                                <div class="col rb">
                                    <label class="mtop">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex">
                                        <label class="form-check-label">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex">
                                        <label class="form-check-label" for="flexRadioDefault2">Female</label>
                                    </div>
                                </div>       
                            </div>
                            <div class="row mtop"> 
                                <div class="col"> 
                                   <label> Role </label>
                                   <br>
                                    <input type="text" class="form-control" name="role">
                                </div>
                            </div>
                        <button class="btn btn-primary" type="submit" name="update_resident"> Update </button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>