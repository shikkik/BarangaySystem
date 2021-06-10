<?php
   error_reporting(E_ALL ^ E_WARNING);
   //ini_set('display_errors',0);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   $bmis->validate_admin();
   $fpcount = $residentbmis->count_familyplan();
   $view = $bmis->view_familyplan();
   
   if(isset($_POST['create_familyplan'])) {
    $bmis->create_familyplan();
   }

   $bmis->delete_familyplan();

?>

<?php 
    include('dashboard_sidebar_start.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
                
    <div class="row"> 
        <div class="col-md-8"> 
        <div class="card">
        <div class="card-header"> Add New Family Planning Data</div>
        <div class="card-body">
        <form method="post" class="was-validated">
                                <div class="row"> 

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last Name:</label>
                                            <input name="lname" type="text" class="form-control" placeholder="Enter your Last Name" value="" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="mname">Middle Name:</label>
                                            <input name="mi" type="text" class="form-control" placeholder="Enter your Middle Name"value="" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">            
                                            <label for="cno">Contact Number:</label>
                                            <input name="contact" type="text" maxlength="11" class="form-control" placeholder="Enter your Contact Number" value="" pattern="[0-9]{11}" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First Name:</label>
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
                                    <div class="col-sm-4">
                                        <label for="Age" class="mtop">Age </label>
                                        <input name="age" type="number" placeholder="Enter your Age" class="form-control" value="" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="status">Status:</label>
                                        <select class="form-control select" name="status" id="status" placeholder="Enter your Status" required="required">
                                            <option value="">Choose your Status</option>
                                            <option value="Single">Single</option>
                                            <option value="In a relationship">In a relationship</option>
                                            <option value="Engaged">Engaged</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="Date"class="mtop">Birthday </label>
                                            <input name="bdate" type="date" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>  

                                </div> 

                                <br>

                                <h6>Spouse Info</h6>

                                <hr>

                                <div class="row"> 

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Lastname:</label>
                                            <input name="sp_lname" type="text" class="form-control" placeholder="Enter your Lastname" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="mname">Middlename:</label>
                                            <input name="sp_mi" type="text" class="form-control" placeholder="Enter your Middlename" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">Firstname:</label>
                                            <input name="sp_fname" type="text" class="form-control" placeholder="Enter your Firstname" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">
                                            <label for="occupation">Occupation:</label>
                                            <input name="sp_occupation" type="text" class="form-control" placeholder="Enter your Occupation" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row"> 

                                    <div class="col">
                                        <label for="children">Children:</label>
                                            <select class="form-control select" name="children" id="children" required="required">
                                                <option value="">How many children </option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6 or more</option>
                                            </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col">
                                        <label for="income">Total Income:</label>
                                            <select class="form-control select" name="income" id="income" required="required">
                                                <option value="">Enter your Income </option>
                                                <option value="5000">Below 5,000</option>
                                                <option value="5000">5,000+</option>
                                                <option value="10000">10,000 +</option>
                                                <option value="20000">20,000 +</option>
                                                <option value="30000">30,000 +</option>
                                                <option value="40000">40,000 +</option>
                                                <option value="50000">50,000 +</option>
                                                <option value="60000">60,000 or more </option>
                                            </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                </div>

                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label for="Age" class="mtop">Age </label>
                                        <input name="sp_age" type="number" class="form-control" placeholder="Enter your Age" value="<?= $resident['age']?>" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>

                                        <label for="Resident ID" class="mtop">Resident ID </label>
                                        <input name="id_resident" type="text" class="form-control" placeholder="Enter Resident ID" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Date"class="mtop">Birthday </label>
                                            <input name="sp_bdate" type="date" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>  
                                </div> 
                            
                            <!-- Modal Footer -->
                            
                            <div class="modal-footer">
                                <div class="paa">
                                        <input type="hidden" name="dateapply" value="<?= $cdate?>">
                                        <input name="addedby" type="hidden" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                                    <button name="create_familyplan" type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </form>
        </div>
        </div>
        </div>

        <div class="col-md-4"> 
            <div class="card"> 
                <div class="card-body"> 
                    <h5> Total </h5> <br> <?= $fpcount ?>
                </div>
            </div> 

            <br> 


    </div>

    <br>
    <div class="row"> 
        <div class="col-md-12"> 
            <h1 class="h3 mb-4 text-gray-800">Family Planning Data</h1>
            <table class="table table-dark table-responsive">
            <form method="post">
                <thead> 
                    <tr>
                        <th> Actions</th>
                        <th> ID </th>
                        <th> ID_Resident </th>
                        <th> Surname </th>
                        <th> First name </th>
                        <th> Middlename </th>
                        <th> Age </th>
                        <th> Address </th>
                        <th> Contact </th>
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
                            <a href="update_familyplan_form.php?id_familyplan=<?= $view['id_familyplan'];?>" class="btn btn-primary">  Update </a>
                            <input type="hidden" name="id_familyplan" value="<?= $view['id_familyplan'];?>">
                            <button class="btn btn-danger" type="submit" name="delete_familyplan"> Delete </button>
                        </form>
                        </td>
                        <td> <?= $view['id_familyplan'];?> </td>
                        <td> <?= $view['id_resident'];?> </td> 
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['address'];?> </td>
                        <td> <?= $view['contact'];?> </td>
                        <td> <?= $view['dateapply'];?> </td>
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
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>
