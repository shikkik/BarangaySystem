<?php
    
   error_reporting(E_ALL ^ E_WARNING);
   ini_set('display_errors',0);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   $bmis->validate_admin();
   $view = $residentbmis->view_resident();
   $residentbmis->create_resident();
   $residentbmis->update_resident();
   $residentbmis->delete_resident();
   

   $rescount = $residentbmis->count_resident();
   $rescountm = $residentbmis->count_male_resident();
   $rescountf = $residentbmis->count_female_resident();
   $rescountfh = $residentbmis->count_head_resident();
   $rescountfm = $residentbmis->count_member_resident();
   
?>

<?php 
    include('dashboard_sidebar_start.php');
?>
<style>
    .input-icons i {
        position: absolute;
    }
        
    .input-icons {
        width: 30%;
        margin-bottom: 20px;
        margin-left: 34%;
    }
        
    .icon {
        padding: 10px;
        min-width: 40px;
    }

    .search{
        text-align: center;
    }
</style>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1 class="mb-4 text-center">Barangay Residents Data</h1>

        <hr>
        <br>

        <!-- Page Heading -->
                    
        <div class="row"> 
            <div class="col-md-9"> 
                <div class="card">
                    <div class="card-header bg-primary text-white"> Add New Barangay Resident</div>
                    <div class="card-body">
                        <form method="post" class="was-validated"> 
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label> Last Name: </label>
                                        <input type="text" class="form-control" name="lname"  placeholder="Enter Last Name" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mtop" >First Name: </label>
                                        <input type="text" class="form-control" name="fname"  placeholder="Enter First Name" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="col"> 
                                    <div class="form-group">
                                        <label class="mtop"> Middle Initial: </label>
                                        <input type="text" class="form-control" name="mi" placeholder="Enter Middle Initial" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mtop">Contact Number:</label>
                                        <input type="tel" class="form-control" name="contact" maxlength="11" pattern="[0-9]{11}" placeholder="Enter Contact Number" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label>Email: </label>
                                        <input type="email" class="form-control" name="email"  placeholder="Enter Email" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input type="password" class="form-control" id="password-field" name="password" placeholder="Enter Password" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label> House No: </label>
                                        <input type="text" class="form-control" name="houseno"  placeholder="Enter House No." required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label> Street: </label>
                                        <input type="text" class="form-control" name="street"  placeholder="Enter Street" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label> Barangay: </label>
                                        <input type="text" class="form-control" name="brgy"  placeholder="Enter Barangay" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label> Municipality: </label>
                                        <input type="text" class="form-control" name="municipal" placeholder="Enter Municipality" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mtop">Birth Date: </label>
                                        <input type="date" class="form-control" name="bdate" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="mtop">Birth Place </label>
                                        <input type="text" class="form-control" name="bplace"  placeholder="Enter Birth Place" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="mtop">Nationality: </label>
                                        <input type="text" class="form-control" name="nationality"  placeholder="Enter Nationality" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col"> 
                                    <div class="form-group">
                                        <label>Status: </label>
                                        <select class="form-control" name="status" id="status" required>
                                            <option value="">Choose your Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="number" class="form-control" name="age" placeholder="Enter Age" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="col rb">
                                    <div class="form-group">
                                        <label class="mtop">Sex</label>
                                        <select class="form-control" name="sex" id="sex" required>
                                            <option value="">Choose your Sex</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>         
                            </div>

                            <div class="row">
                                
                                <div class="col"> 
                                    <div class="form-group">
                                        <label>Are you a registered voter? </label>
                                        <select class="form-control" name="voter" id="regvote" required>
                                            <option value="">...</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>                                    
                                <div class="col"> 
                                    <div class="form-group">
                                        <label>Are you head of the family? </label>
                                        <select class="form-control" name="family_role" id="famhead" required>
                                            <option value="">...</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                            </div>

                            <br>
                                
                            <input type="hidden" class="form-control" name="role" value="resident">
                            <button class="btn btn-primary" type="submit" name="add_resident" style="width: 140px; font-size: 15px; border-radius:30px; margin-left:40%;"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-3"> 
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Number of Residents</div>
                                    <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-friends fa-2x text-dark"></i>
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
                                Total Household Head</div>
                                    <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescountfh ?></div>
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
                                Total Male Residents</div>
                                    <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescountm ?></div>
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
                                Total Female Residents</div>
                                    <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescountf ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-female fa-2x text-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <br>
        <br>
        <br>

        <div class="col-md-12">
			<form method="POST" action="">
				<div class="input-icons" >
                    <i class="fa fa-search icon"></i>
					<input type="search" class="form-control search" name="keyword" style="border-radius: 30px;" value="" required=""/>
                </div>
                    <button class="btn btn-success" name="search_resident" style="width: 90px; font-size: 17px; border-radius:30px; margin-left:41.5%;">Search</button>
					<a href="admn_resident_crud.php" class="btn btn-info" style="width: 90px; font-size: 17px; border-radius:30px;">Reload</a>
				
			</form>
			<br />
            <br>
		<?php 
            include('search_resident.php');
        ?>
	</div>


    
    <!-- /.container-fluid -->
    
</div>
<!-- End of Main Content -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
<!-- responsive tags for screen compatibility -->
<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
<!-- custom css --> 
<link href="../BarangaySystem/customcss/regiformstyle.css" rel="stylesheet" type="text/css">
<!-- bootstrap css --> 
<link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
<!-- fontawesome icons -->
<script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
<script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>

<?php 
    include('dashboard_sidebar_end.php');
?>
