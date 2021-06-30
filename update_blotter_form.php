<?php
   error_reporting(E_ALL ^ E_WARNING);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   //$bmis->validate_admin();
   $id_resident = $_GET['id_resident'];
   $view = $residentbmis->get_single_blotter($id_resident);
   $residentbmis->update_resident();

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
        <div class="card-header bg-success text-white"> Update Barangay Blotter Data</div>
        <div class="card-body">
        <form method="post" class="was-validated" enctype="multipart/form-data"> 
<div class="row"> 
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last name:</label>
                                            <input name="lname" type="text" class="form-control" value="<?= $view['lname']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First name:</label>
                                            <input name="fname" type="text" class="form-control" value="<?= $view['fname']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mname">Middle name:</label>
                                            <input name="mi" type="text" class="form-control" value="<?= $view['mi']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="age" class="mtop">Age </label>
                                            <input name="age" type="number" class="form-control" value="<?= $view['age']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>            

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> House No: </label>
                                            <input type="text" class="form-control" name="houseno"  
                                            placeholder="Enter House No." value="<?= $view['houseno']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Street: </label>
                                            <input type="text" class="form-control" name="street"  
                                            placeholder="Enter Street" value="<?= $view['street']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Barangay: </label>
                                            <input type="text" class="form-control" name="brgy"  
                                            placeholder="Enter Barangay" value="<?= $view['brgy']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Municipality: </label>
                                            <input type="text" class="form-control" name="municipal" 
                                            placeholder="Enter Municipality" value="<?= $view['municipal']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Upload Photo:</label>
                                        <div class="custom-file mb-3 form-group">
                                            <input type="file" class="custom-file-input" id="customFile" name="blot_photo">
                                            <label class="custom-file-label" for="customFile">Choose File</label>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">            
                                            <label for="cno">Contact Number:</label>
                                            <input name="contact" type="text" maxlength="11" class="form-control" value="<?= $view  ['contact']?>" pattern="[0-9]{11}" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="report">Narrative Report:</label>
                                            <textarea class="form-control" rows="5" id="report" name="narrative" required></textarea>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                <div class="paa">
                                    <input name="id_resident" type="hidden" value="<?= $resident['id_resident']?>">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                    <button type="submit" name="create_blotter" class="btn btn-primary">Save changes</button>
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
