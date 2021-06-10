<?php
    
   error_reporting(E_ALL ^ E_WARNING);
   //ini_set('display_errors',0);
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
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
                
    <div class="row"> 
        <div class="col-md-8"> 
        <div class="card">
        <div class="card-header"> Add New Barangay Resident</div>
        <div class="card-body">
        <form method="post"> 
            <div class="row">
                <div class="col">
                    <label> Last Name</label>
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
                    <label>Status</label>
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
                    <label>Email </label>
                    <input type="email" class="form-control" name="email"  placeholder="Enter email">
                    <label class="mtop">Birth Date </label>
                    <input type="date" class="form-control" name="bdate">
                    <label class="mtop">Contact Number</label>
                    <input type="tel" class="form-control" name="contact" placeholder="Enter contact number">
                </div>

                <div class="col">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    <label class="mtop">Birth Place </label>
                    <input type="text" class="form-control" name="bplace"  placeholder="Enter birth place">
                    <label class="mtop">Nationality </label>
                    <input type="text" class="form-control" name="nationality"  placeholder="Enter nationality">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label> Address </label>
                    <input type="text" class="form-control" name="address"  placeholder="Enter Address">
                </div>

                <div class="col">
                    <label>Family Role</label>
                    <select class="form-control" name="family_role" id="family_role">
                    <option value="">---</option>
                    <option value="Family Head">Family Head</opt ion>
                    <option value="Family Member">Family Member</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Age</label>
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

            <br>
                   
            <input type="hidden" class="form-control" name="role" value="resident">
            <button class="btn btn-primary" type="submit" name="add_resident"> Submit </button>
        </form>
        </div>
        </div>
        </div>

        <div class="col-md-4"> 
            <div class="card"> 
                <div class="card-body"> 
                    <h5> Number of Residents </h5> <br> <?= $rescount ?>
                </div>
            </div> 

            <br> 

            <div class="card"> 
                <div class="card-body"> 
                    <h5> Total Household Head </h5> <br> <?= $rescountfh ?>
                </div>
            </div>
            
            <br>

            <div class="card"> 
                <div class="card-body"> 
                    <h5> Male Residents </h5> <br> <?= $rescountm ?>
                </div>
            </div>

            <br> 

            <div class="card"> 
                <div class="card-body"> 
                    <h5> Female Residents </h5> <br> <?= $rescountf ?>
                </div>
            </div>
        </div> 

    </div>

    <br> 
    <div class="col-md-12">
			<form method="POST" action="">
				<div class="form-inline" >
					<input type="search" class="form-control" name="keyword" value="" placeholder="Search here..." required=""/>
					<button class="btn btn-success" name="search_resident">Search</button>
					<a href="admn_resident_crud.php" class="btn btn-info">Reload</a>
				</div>
			</form>
			<br /><br />
			<?php 
                include('search_resident.php');
            ?>
		</div>


    
    <!-- /.container-fluid -->
    
</div>
<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>
