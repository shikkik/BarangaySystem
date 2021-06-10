<?php
   error_reporting(E_ALL ^ E_WARNING);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   //$bmis->validate_admin();
   $view = $residentbmis->view_resident();
   $bmis->update_animal();
   $id_animal = $_GET['id_animal'];
   $animal = $residentbmis->get_single_animal($id_animal);

?>

<?php 
    include('dashboard_sidebar_start.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
                
    <div class="row"> 
        <div class="col-md-2"> </div> 
        <div class="col-md-8"> 
        <div class="card">
        <div class="card-header"> Update Animal Welfare & Registry Data</div>
        <div class="card-body">
        <form method="post" class="was-validated">
                  <div class="row"> 

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="uname">Animal:</label>
                          <input name="pettype" type="text" class="form-control" value="<?= $animal['pettype'];?>" placeholder="Enter Animal" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">
                        <label for="Age" class="mtop">Age </label>
                      <input name="age" type="number" class="form-control" value="<?= $animal['age'];?>" placeholder="Enter Pets Age" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group"> 
                            <label>Resident ID:</label>
                            <input name="id_resident" type="text" class="form-control" value="<?= $animal['id_resident'];?>" placeholder="Enter Resident ID" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="breed">Breed:</label>
                        <input name="breed" type="text" class="form-control" value="<?= $animal['breed'];?>" placeholder="Enter Breed" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="form-group">
                        <label for="purpose">Purpose:</label>
                        <input name="purpose" type="text" class="form-control" value="<?= $animal['purpose'];?>" placeholder="Enter Purpose" required>
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
                    <button name ="update_animal" type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div> 
              </form>
        </div>
        </div>
        </div>
        <div class="col-md-2"> </div>
    </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>
