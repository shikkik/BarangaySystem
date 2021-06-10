<?php
   error_reporting(E_ALL ^ E_WARNING);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   $bmis->validate_admin();
   $mccount = $residentbmis->count_motherchild();
   $view = $bmis->view_motherchild();
   
   if(isset($_POST['create_motherchild'])) {
    $bmis->create_motherchild();
   }

   $bmis->delete_motherchild();

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
        <div class="card-header"> Add New Mother and Child Check-up Data</div>
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
                                            <input name="mi" type="text" class="form-control" placeholder="Enter your Middle Name" value="" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">            
                                            <label for="cno">Contact Number:</label>
                                            <input name="contact" type="text" maxlength="11" placeholder="Enter your Contact Number" class="form-control" value="" pattern="[0-9]{11}" required>
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
                                            <label for="age" class="mtop">Age </label>
                                            <input name="age" type="number" class="form-control" placeholder="Enter your Age" value="" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="age" class="mtop">Resident ID </label>
                                            <input name="id_resident" class="form-control" placeholder="Enter your Resident ID" type="text" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        

                                        <input type="hidden" name="remarks">
                                        <input type="hidden" name="dateapply" value="<?= $cdate?>">
                                        <input name="addedby" type="hidden" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                                    </div>
                                </div>
                            
                            
                            <div class="">
                                <div class="">
                                    <button name="create_motherchild" type="submit" class="btn btn-primary">Submit </button>
                                </div>
                            </div>  
                        </form>
        </div>
        </div>
        </div>

        <div class="col-md-4"> 
            <div class="card"> 
                <div class="card-body"> 
                    <h5> Total </h5> <br> <?= $mccount ?>
                </div>
            </div> 

            <br> 
 

    </div>

    <br>
    <div class="row"> 
        <div class="col-md-12"> 
            <h1 class="h3 mb-4 text-gray-800">Mother and Child Check-up Data</h1>
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
                        <th> Remarks </th>
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
                            <a href="update_motherchild_form.php?id_motherchild=<?= $view['id_motherchild'];?>" class="btn btn-primary">  Update </a>
                            <input type="hidden" name="id_motherchild" value="<?= $view['id_motherchild'];?>">
                            <button class="btn btn-danger" type="submit" name="delete_motherchild"> Delete </button>
                        </form>
                        </td>
                        <td> <?= $view['id_motherchild'];?> </td>
                        <td> <?= $view['id_resident'];?> </td> 
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['address'];?> </td>
                        <td> <?= $view['contact'];?> </td>
                        <td> <?= $view['remarks'];?> </td>
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
