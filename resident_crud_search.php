<?php 
    require('classes/resident.class.php');

    $view = $residentbmis->view_household_list();
    $residentbmis->create_resident();
    $residentbmis->update_resident();
    $residentbmis->delete_resident();

    //$lname = $_GET['lname'];

    $connection = $residentbmis->openConn();

    //$stmt = $connection->prepare("SELECT * from tbl_resident 
    //WHERE lname LIKE '%$lname%'");
    //$stmt->execute();
    //$view = $stmt->fetch();
   
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
                <div class="col">
                <form action="resident_crud_search.php" method="get"> 
                        <input type="text" name="lname">
                        <input type="text" name="mi">
                        
                        <button class="btn btn-primary"> View Household List </button>
                        <hr>
                    </form>
                </div>
            </div>
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
                                <th> Family Role </th>
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
                                <th> <?= $view['family_role'];?> </th>
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
                                <label class="mtop">Status</label>
                                    <select class="form-control" name="status" id="status">
                                    <option value="">---</option>
                                    <option value="Male">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Divorced">Divorced</option>
                                    </select>  
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
                                <div class="col">
                                <label class="mtop">Family Role</label>
                                    <select class="form-control" name="family_role" id="family_role">
                                    <option value="">---</option>
                                    <option value="Family Head">Family Head</opt ion>
                                    <option value="Family Member">Family Member</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label class="mtop">Age </label>
                                    <input type="number" class="form-control" name="age" placeholder="Age">
                                </div>

                                <div class="col rb">
                                <div class="col rb">
                                    <label class="mtop">Gender</label>
                                    <select class="form-control" name="sex" id="sex">
                                    <option value="">---</option>
                                    <option value="Male">Male</opt ion>
                                    <option value="Female">Female</option>
                                    </select>
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
                                <label class="mtop">Status</label>
                                    <select class="form-control" name="status" id="status">
                                    <option value="">---</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Divorced">Divorced</option>
                                    </select>  
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
                                <div class="col">
                                <label class="mtop">Family Role</label>
                                    <select class="form-control" name="family_role" id="family_role">
                                    <option value="">---</option>
                                    <option value="Family Head">Family Head</opt ion>
                                    <option value="Family Member">Family Member</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label class="mtop">Age </label>
                                    <input type="number" class="form-control" name="age" placeholder="Age">
                                </div>

                                <div class="col rb">
                                    <label class="mtop">Gender</label>
                                    <select class="form-control" name="sex" id="sex">
                                    <option value="">---</option>
                                    <option value="Male">Male</opt ion>
                                    <option value="Female">Female</option>
                                    </select>
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