<?php
   error_reporting(E_ALL ^ E_WARNING);
   ini_set('display_errors',0);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   $bmis->validate_admin();
   $view = $bmis->view_animal();
   $anmcount = $residentbmis->count_animals();
   $anmcountm = $residentbmis->count_male_animals();
   $anmcountf = $residentbmis->count_female_animals();
   
   $dt = new DateTime("now", new DateTimeZone('Asia/Manila'));
   $tm = new DateTime("now", new DateTimeZone('Asia/Manila'));
   $cdate = $dt->format('Y/m/d');
   $ctime = $tm->format('H');
   
   if(isset($_POST['create_animal'])) {
    $bmis->create_animal();
   }

   $bmis->delete_animal();

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
        <div class="card-header bg-primary text-white"> Add New Animal Registry & Welfare Data</div>
        <div class="card-body">
        <form method="post" class="was-validated">
                  <div class="row"> 

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="uname">Animal:</label>
                          <input name="pettype" type="text" class="form-control" placeholder="Enter Animal" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">
                        <label for="Age" class="mtop">Age </label>
                      <input name="age" type="number" class="form-control" placeholder="Enter Pets Age" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">            
                        <label for="Sex"class="mtop">Sex</label>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="sex" value="Male" type="radio" class="form-check-input" name="optradio">Male
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="sex" value="Female" type="radio" class="form-check-input" name="optradio">Female
                        </label>
                      </div>    
                        </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="breed">Breed:</label>
                        <input name="breed" type="text" class="form-control" placeholder="Enter Breed" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="form-group">
                        <label for="purpose">Purpose:</label>
                        <input name="purpose" type="text" class="form-control" placeholder="Enter Purpose" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                        <label for="vaccine">Vaccine:</label>
                        <select class="form-control" name="vaccination" id="vaccine" placeholder="Enter your Vaccine" required>
                          <option value="">Choose your Vaccine</option>
                          <option value="Parvovirus">Parvovirus (Dogs)</option>
                          <option value="Distemper">Distemper (Dogs)</option>
                          <option value="Parainfluenza">Parainfluenza (Dogs)</option>
                          <option value="Hepatitis">Hepatitis (Dogs)</option>
                          <option value="Leptospirosis">Leptospirosis (Dogs)</option>
                          <option value="Anti-Rabies">Anti-Rabies (Dogs)</option>
                          <option value="FVRCP">FVRCP (Cats)</option>
                          <option value="FeLV">FeLV (Cats)</option>
                          <option value="Anti-Rabies">Anti-Rabies (Cats)</option>
                          <option value="Bordetella">Bordetella (Cats)</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  </div>

                  <div class="row"> 
                    <div class="col-sm-6"> 
                        <div class="form-group"> 
                            <label>Resident ID:</label>
                            <input name="id_resident" type="text" class="form-control" placeholder="Enter Resident ID" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group"> 
                            <label >Contact #:</label>
                            <input name="contact" type="text" class="form-control"  placeholder="Enter Contact #" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>

                    <div class="col-sm-6"> 
                        <div class="form-group"> 
                            <label >Address:</label>
                            <input name="address" type="text" class="form-control" placeholder="Enter Address" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group"> 
                            <label >Owner:</label>
                            <input name="owner" type="text" class="form-control" placeholder="Enter Owner Name" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                  
                  </div>
                
                  
                  
                <!-- Modal Footer -->
                  
                <div class="modal-footer">
                  <div class="paa">
                    <input name="dateapply" type="hidden" class="form-control" value="<?= $cdate?>">
                    <input name="addedby" type="hidden" class="form-control" value="<?= $userdetails['surname']?> <?= $userdetails['firstname']?> <?= $userdetails['mname']?>">
                    <button name ="create_animal" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div> 
              </form>
        </div>
        </div>
        </div>

        <div class="col-md-4"> 
            <div class="card"> 
                <div class="card-body border-left-primary"> 
                    <h5> Number of Animals </h5> <br> <?= $anmcount ?>
                </div>
            </div> 

            <br> 

            <br>

            <div class="card"> 
                <div class="card-body border-left-primary"> 
                    <h5> Male Animals </h5> <br> <?= $anmcountm ?>
                </div>
            </div>

            <br> 

            <div class="card"> 
                <div class="card-body border-left-primary"> 
                    <h5> Female Animals </h5> <br> <?= $anmcountf ?>
                </div>
            </div>
        </div> 

    </div>

    <br>
    <div class="row"> 
        <div class="col-md-12"> 
            <h1 class="h3 mb-4 text-gray-800">Animal Registry & Welfare Data</h1>
            <table class="table table-dark table-responsive">
            <form method="post">
                <thead> 
                    <tr>
                        <th> Actions</th>
                        <th> ID </th>
                        <th> ID_Resident </th>
                        <th> Type of Pet </th>
                        <th> Breed </th>
                        <th> Sex </th>
                        <th> Age </th>
                        <th> Purpose </th>
                        <th> Vaccination </th>
                        <th> Owner </th>
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
                            <a href="update_animal_form.php?id_animal=<?= $view['id_animal'];?>" class="btn btn-primary">  Update </a>
                            <input type="hidden" name="id_animal" value="<?= $view['id_animal'];?>">
                            <button class="btn btn-danger" type="submit" name="delete_animal"> Delete </button>
                        </form>
                        </td>
                        <td> <?= $view['id_animal'];?> </td>
                        <td> <?= $view['id_resident'];?> </td> 
                        <td> <?= $view['pettype'];?> </td>
                        <td> <?= $view['breed'];?> </td>
                        <td> <?= $view['sex'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['purpose'];?> </td>
                        <td> <?= $view['vaccination'];?> </td>
                        <td> <?= $view['owner'];?> </td>
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
