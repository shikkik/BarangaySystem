<?php
    error_reporting(E_ALL ^ E_WARNING);
    require('classes/staff.class.php');
    $userdetails = $bmis->get_userdata();
    //$bmis->validate_admin();
    $view = $staffbmis->view_staff();
    $staffbmis->create_staff();
    $upstaff = $staffbmis->update_staff();
    $staffbmis->delete_staff();
    $staffcount = $staffbmis->count_staff();
    $id_user = $_GET['id_user'];
    $staff = $staffbmis->get_single_staff($id_user);
?>

<?php 
    include('dashboard_sidebar_start_staff.php');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <h1 class="h3 mb-4 text-gray-800">Barangay Staff Data</h1>

                    <div class="row">
                        <div class="col-md-2"> </div>
                        <div class="col-md-8">
                            <div class="card"> 
                                <div class="card-header bg-success text-white"> Update Barangay Staff Data </div>
                                <div class="card-body"> 
                                <form method="post">
                                    <label class="mtop"> Last Name</label>
                                    <input type="text" class="form-control" name="lname" value="<?= $staff['lname'];?>"  placeholder="Enter last name">

                                    <label class="mtop" >First Name </label>
                                    <input type="text" class="form-control" name="fname" value="<?= $staff['fname'];?>" placeholder="Enter first name">

                                    <label class="mtop"> Middle Initial </label>
                                    <input type="text" class="form-control" name="mi" value="<?= $staff['mi'];?>" placeholder="Enter middle initial">

                                    <label class="mtop">Email </label>
                                    <input type="email" class="form-control" name="email" value="<?= $staff['email'];?>" placeholder="Enter email">

                                    <label class="mtop">Contact Number</label>
                                    <input type="tel" class="form-control" name="contact" placeholder="Enter contact number">

                                    <label class="mtop">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">

                                    <label class="mtop">Position </label>
                                    <input type="text" class="form-control" name="position"  placeholder="Enter position">

                                    <label class="mtop"> Address </label>
                                    <input type="text" class="form-control" name="address"  placeholder="Enter Address">

                                    <label class="mtop">Age </label>
                                    <input type="number" class="form-control" name="age" placeholder="Age">

                                    <label class="mtop">Gender</label>
                                    <select class="form-control" name="sex" id="sex">
                                    <option value="Male">Male</opt ion>
                                    <option value="Female">Female</option>
                                    </select>

                                    <br>
                                    
                                    <input type="hidden" class="form-control" name="role" value="user">
                                    <input type="hidden" class="form-control" name="addedby" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                                    <button class="btn btn-success" type="submit" name="update_staff"> Update </button>
                                </form>         
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"> </div>
                    </div>
                    
                    <br>
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