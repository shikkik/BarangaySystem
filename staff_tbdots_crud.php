<?php
   error_reporting(E_ALL ^ E_WARNING);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   //$bmis->validate_admin();
   $tbcount = $residentbmis->count_tbdots();
   $view = $bmis->view_familyplan();
   
   if(isset($_POST['create_familyplan'])) {
    $bmis->create_familyplan();
   }

   $bmis->delete_familyplan();

?>

<?php 
    include('dashboard_sidebar_start_staff.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
                
    <div class="row"> 
        <div class="col-md-8"> 
        <div class="card">
        <div class="card-header"> Add New TB DOTS Data</div>
        <div class="card-body">
        <form method="post" class="was-validated">
            <div class="row"> 

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last name:</label>
                                            <input name="lname" type="text" class="form-control" placeholder="Enter your Last Name" value="" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="mname">Middle name:</label>
                                            <input name="mi" type="text" class="form-control" placeholder="Enter your Middle Name" value="" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">            
                                            <label for="cno">Contact Number:</label>
                                            <input name="contact" type="tel" maxlength="11" class="form-control" placeholder="Enter your Contact Number" value="" pattern="[0-9]{11}" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First name:</label>
                                            <input name="fname" type="text" class="form-control" placeholder="Enter your First Name" value="" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input name="address" type="text" class="form-control" placeholder="Enter your Address" value="" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="occupation">Occupation:</label>
                                            <input name="occupation" type="text" class="form-control" placeholder="Enter your Occupation" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col">
                                        <label for="Age" class="mtop">Age </label>
                                        <input name="age" type="number" class="form-control" placeholder="Enter your Age" value="" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col">
                                            <label for="Sex"class="mtop">Sex</label>
                                            <select class="form-control" name="sex" id="sex">
                                            <option value="">---</option>
                                            <option value="Male">Male</opt ion>
                                            <option value="Female">Female</option>
                                            </select>  
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Date"class="mtop">Birthday </label>
                                            <input name="bdate" type="date" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>  
                                </div> 

                                <div class="row">

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="height">Height:</label>
                                            <input name="height" type="text" class="form-control" placeholder="Enter height in cm" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="weight">Weight:</label>
                                            <input name="weight" type="text" class="form-control" placeholder="Enter weight in kg" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>   
                                    </div>
                                </div> 

                                <div class="row"> 
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="phno">Philhealth No:</label>
                                            <input name="philhealth" type="text" class="form-control" placeholder="Enter Philhealth No." required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>  

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="phno">Resident ID:</label>
                                            <input name="id_resident" type="text" class="form-control" placeholder="Enter Resident ID" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>  
                                </div>

                <input name="date_applied" type="hidden" value="<?= $cdate?>">
                <input name="addedby" type="hidden" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                <button name="create_tbdots" type="submit" class="btn btn-primary">Save changes</button>         
            </form>
        </div>
        </div>
        </div>

        <div class="col-md-4"> 
            <div class="card"> 
                <div class="card-body"> 
                    <h5> Total TB Dots Program Registered  </h5> <br> <?= $tbcount ?>
                </div>
            </div> 

           

            

    </div>

    <br>
    <div class="row"> 
        <div class="col-md-12"> 
            <h1 class="h3 mb-4 text-gray-800">TB Dots Data</h1>
            <table class="table table-dark table-responsive">
            <form method="post">
                <thead> 
                    <tr>
                        <th> Actions</th>
                        <th> ID_tbdots </th>
                        <th> ID_Resident </th>
                        <th> Surname </th>
                        <th> First Name </th>
                        <th> Middle Name </th>
                        <th> Age </th>
                        <th> Sex </th>
                        <th> Address </th>
                        <th> Occupation </th>
                        <th> Contact </th>
                        <th> Bdate </th>
                        <th> Height </th>
                        <th> Weight </th>
                        <th> Philhealth </th>
                        <th> Date Applied </th>
                        <th> AddedBy </th>
                    </tr>
                </thead>
                <tbody> 
                <?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
                    <tr>
                        <td>    
                        <form action="" method="post">
                            <a href="update_tbdots_form.php?id_tbdots=<?= $view['id_tbdots'];?>" class="btn btn-primary">  Update </a>
                            <input type="hidden" name="id_tbdots" value="<?= $view['id_tbdots'];?>">
                            <button class="btn btn-danger" type="submit" name="delete_tbdots"> Delete </button>
                        </form>
                        </td>
                        <td> <?= $view['id_tbdots'];?> </td>
                        <td> <?= $view['id_resident'];?> </td> 
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['sex'];?> </td>
                        <td> <?= $view['address'];?> </td>
                        <td> <?= $view['occupation'];?> </td>
                        <td> <?= $view['contact'];?> </td>
                        <td> <?= $view['bdate'];?> </td>
                        <td> <?= $view['height'];?> </td>
                        <td> <?= $view['weight'];?> </td>
                        <td> <?= $view['philhealth'];?> </td>
                        <td> <?= $view['date_applied'];?> </td>
                        <td> <?= $view['addedby'];?> </td>
                        
                    </tr>
                    <?php }?>
                <?php } ?>
                </tbody>
            </form>
            </table>
        </div>
    </div>

    </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>
