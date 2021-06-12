<?php
    error_reporting(E_ALL ^ E_WARNING);
    ini_set('display_errors',0);
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
    $vacccount = $bmis->count_vacc();
    $vacccountmale = $bmis->count_male_vacc();
    $vacccountfemale = $bmis->count_female_vacc();

?>  


<?php 
    include('dashboard_sidebar_start.php');
?>

<!-- Begin Page Content -->

<!-- /.container-fluid -->
<div class="container-fluid">

<!-- Page Heading -->
            
<div class="row"> 
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
                                            <select class="form-control" name="sex" id="sex">
                                            <option value="">---</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            </select>  
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
                                            <label for="lname">Lastname:</label>
                                            <input name="lname" value="<?= $resident['lname']?>" type="text" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">Firstname:</label>
                                            <input name="fname" type="text" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mname">Middlename:</label>
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
        <button class="btn btn-primary" type="submit" name="create_vaccine"> Submit </button>
    </form>
    </div>
    </div>
    </div>

    <div class="col-md-4">
            <div class="card border-left-primary shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Vaccination Program Applicants</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $vacccount?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="card border-left-primary shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Male Vaccination Program Applicants</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $vacccountmale?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-male fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="card border-left-primary shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Female Vaccination Program Applicants</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $vacccountfemale?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-female fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<br>
<div class="row"> 
    <div class="col-md-12"> 
        <h1 class="h3 mb-4 text-gray-800">Vaccination Program Data</h1>
        <table class="table table-dark table-responsive">
        <form method="post">
            <thead> 
                <tr>
                    <th> Actions</th>
                    <th> ID_Vaccine </th>
                    <th> ID_Resident </th>
                    <th> Child Name </th>
                    <th> Age </th>
                    <th> Sex </th>
                    <th> Bdate </th>
                    <th> Bplace </th>
                    <th> Address </th>
                    <th> Height </th>
                    <th> Weight </th>
                    <th> Surname </th>
                    <th> Firstname </th>
                    <th> Middlename </th>
                    <th> Vaccine </th>
                    <th> Vaccination Date </th>
                    <th> AddedBy </th>
                </tr>
            </thead>
            <tbody> 
            <?php if(is_array($view)) {?>
                <?php foreach($view as $view) {?>
                <tr>
                    <td>    
                    <form action="" method="post">
                        <a href="update_vaccine_form.php?id_vaccine=<?= $view['id_vaccine'];?>" class="btn btn-primary">  Update </a>
                        <input type="hidden" name="id_vaccine" value="<?= $view['id_vaccine'];?>">
                        <button class="btn btn-danger" type="submit" name="delete_vaccine"> Delete </button>
                    </form>
                    </td>
                    <td> <?= $view['id_vaccine'];?> </td>
                    <td> <?= $view['id_resident'];?> </td>
                    <td> <?= $view['child'];?> </td>
                    <td> <?= $view['age'];?> </td>
                    <td> <?= $view['sex'];?> </td>
                    <td> <?= $view['bdate'];?> </td>
                    <td> <?= $view['bplace'];?> </td>
                    <td> <?= $view['address'];?> </td>
                    <td> <?= $view['height'];?> </td>
                    <td> <?= $view['weight'];?> </td>
                    <td> <?= $view['lname'];?> </td>
                    <td> <?= $view['fname'];?> </td>
                    <td> <?= $view['mi'];?> </td>
                    <td> <?= $view['vaccine'];?> </td>
                    <td> <?= $view['vaccdate'];?> </td>
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
<!-- End of Main Content -->

                
<?php 
    include('dashboard_sidebar_end.php');
?>