<?php
    error_reporting(E_ALL ^ E_WARNING);
    require('classes/staff.class.php');
    $userdetails = $bmis->get_userdata();
    //$bmis->validate_admin();
    $id_user = $_GET['id_user'];
    $view = $staffbmis->get_single_staff($id_user);
    $staffbmis->create_staff();
    $upstaff = $staffbmis->update_staff();
    $staffbmis->delete_staff();
    $staffcount = $staffbmis->count_staff();
?>

<?php 
    include('dashboard_sidebar_start_staff.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-800 text-center">Barangay Staff Profile</h1>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card"> 
                <div class="card-header bg-primary text-white"> Barangay Staff Credentials</div>
                <div class="card-body"> 
                <form method="post">
                    <label class="mtop"> Last Name</label>
                    <input type="text" class="form-control" name="lname"  Value="<?= $view['lname'];?>" readonly>

                    <label class="mtop" >First Name </label>
                    <input type="text" class="form-control" name="fname"  Value="<?= $view['fname'];?>" readonly>

                    <label class="mtop"> Middle Initial </label>
                    <input type="text" class="form-control" name="mi" Value="<?= $view['mi'];?>" readonly>

                    <label class="mtop">Email </label>
                    <input type="email" class="form-control" name="email"  Value="<?= $view['email'];?>">

                    <label class="mtop">Contact Number</label>
                    <input type="tel" class="form-control" name="contact" Value="<?= $view['contact'];?>">

                    <label class="mtop">Position </label>
                    <input type="text" class="form-control" name="position"  Value="<?= $view['position'];?>">

                    <label class="mtop"> Address </label>
                    <input type="text" class="form-control" name="address" Value="<?= $view['address'];?>">

                    <label class="mtop">Age </label>
                    <input type="number" class="form-control" name="age" Value="<?= $view['age'];?>">
                                        
                    <input type="hidden" class="form-control" name="role" value="user">
                    <input type="hidden" class="form-control" name="addedby" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">

                    <button class="btn btn-primary" type="submit" name="update_staff"> Update </button>
                </form>         
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>

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