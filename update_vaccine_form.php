<?php
    error_reporting(E_ALL ^ E_WARNING);
    include('classes/staff.class.php');
    include('classes/resident.class.php');

    $dt = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $tm = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $cdate = $dt->format('Y/m/d');
    $ctime = $tm->format('H');

    $userdetails = $bmis->get_userdata();
    $bmis->validate_admin();

    $bmis->create_vaccine();
    $view = $bmis->view_vaccine();
    $bmis->update_vaccine();
    $bmis->delete_vaccine();

?>


<?php 
    include('dashboard_sidebar_start.php');
?>

<!-- Begin Page Content -->

<!-- /.container-fluid -->
<div class="container-fluid">

<!-- Page Heading -->
            
<div class="row"> 
    <div class="col-md-2">  </div>
    <div class="col-md-8"> 
    <div class="card">
    <div class="card-header"> Add New Vaccine Data</div>
    <div class="card-body">
    <form method="post"> 
    <div class="row"> 
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="cname">Child's Name:</label>
                                            <input name="child" type="text" class="form-control" placeholder="Enter Child's Name" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input name="address" type="text" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="Age" class="mtop">Age </label>
                                        <input name="age" type="number" class="form-control" placeholder="Enter Age" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col">
                                            <label for="Sex"class="mtop">Sex</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input name="sex" value="Male" type="radio" class="form-check-input" name="optradio">Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input name="sex" type="radio" value="Female" class="form-check-input" name="optradio">Female
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="date"class="mtop">Birthday: </label>
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
                                            <input name="height" type="text" class="form-control" placeholder="Enter Height" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="weight">Weight:</label>
                                            <input name="weight" type="text" class="form-control" placeholder="Enter Weight" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>   
                                    </div> 
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="bplace">Birthplace:</label>
                                            <input name="bplace" type="text" class="form-control" placeholder="Enter Birthplace" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>  
                                </div>

                                <br>

                                <h6>Parent's Info</h6>

                                <hr>

                                <div class="row"> 
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last name:</label>
                                            <input name="lname" value="<?= $resident['lname']?>" type="text" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First name:</label>
                                            <input name="fname" type="text" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mname">Middle name:</label>
                                            <input name="mi" type="text" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row"> 
                                    <div class="col">
                                        <label for="vaccine">Vaccine:</label>
                                        <select class="form-control" name="vaccine" id="vaccine" placeholder="Enter your Vaccine" required>
                                        <option value="">Choose your Vaccine</option>
                                        <option value="BCG">BCG</option>
                                        <option value="Hepatitis B">Hepatitis B</option>
                                        <option value="Pentavalent Vaccine">Pentavalent Vaccine</option>
                                        <option value="Oral Polio Vaccine">Oral Polio Vaccine</option>
                                        <option value="Inactivated Polio Vaccine">Inactivated Polio Vaccine</option>
                                        <option value="Pneumococcal Conjugate Vaccine">Pneumococcal Conjugate Vaccine</option>
                                        <option value="Measles, Mumps, Rubella">Measles, Mumps, Rubella</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="date"class="mtop">Date of Vaccine: </label>
                                            <input name="vaccdate" value="<?= $cdate?>" type="date" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>
        <input name="addedby" type="hidden" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
        <button class="btn btn-primary" type="submit" name="update_vaccine"> Submit </button>
    </form>
    </div>
    </div>
    </div>
    <div class="col-md-2">  </div>
</div>
</div>

</div>
<!-- End of Main Content -->

                
<?php 
    include('dashboard_sidebar_end.php');
?>