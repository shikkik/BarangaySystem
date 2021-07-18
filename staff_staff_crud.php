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
<div class="container">

    <!-- Page Heading -->

    <h1 class="mb-4 text-center">Barangay Staff Profile</h1>
    <hr>
    <br>
    <div class="card" >
        <div class="card-header bg-primary text-white"> 
            <h5>
                Barangay Staff Credentials
            </h5>
        </div>                 
        <div class="card-body"> 
            <form method="post">
                <div class="row">
                    <div class="col">
                        <label class="form-group"> Last Name</label>
                        <input type="text" class="form-control" name="lname"  Value="<?= $view['lname'];?>" readonly>
                    </div>
                    <div class="col">
                        <label class="form-group" >First Name </label>
                        <input type="text" class="form-control" name="fname"  Value="<?= $view['fname'];?>" readonly>
                    </div>
                    <div class="col">
                        <label class="form-group"> Middle Initial </label>
                        <input type="text" class="form-control" name="mi" Value="<?= $view['mi'];?>" readonly>
                    </div>
                </div>

                <div class="row" style="margin-top: 2em;">
                    <div class="col">
                        <div class="form-group">
                            <label>House No:</label>
                            <input class="form-control" type="text" name="houseno" Value="<?= $view['houseno'];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Street:</label>
                            <input class="form-control" type="text" name="street" Value="<?= $view['street'];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Barangay:</label>
                            <input class="form-control" type="text" name="brgy" Value="<?= $view['brgy'];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label> Municipality: </label>
                            <input type="text" class="form-control" name="municipal" value="<?= $view['municipal']?>">
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 1.1em;">
                    <div class="col">
                        <label class="form-group">Email </label>
                        <input type="email" class="form-control" name="email"  Value="<?= $view['email'];?>">
                    </div>
                    <div class="col">
                        <label class="form-group">Contact Number</label>
                        <input type="tel" class="form-control" name="contact" Value="<?= $view['contact'];?>">
                    </div>
                    <div class="col">
                        <label class="form-group">Position </label>
                        <input type="text" class="form-control" name="position"  Value="<?= $view['position'];?>">
                    </div>
                    <div class="col">
                        <label class="form-group">Age </label>
                        <input type="number" class="form-control" name="age" Value="<?= $view['age'];?>">
                    </div>
                </div>
                
                <input type="hidden" class="form-control" name="role" value="user">
                <input type="hidden" class="form-control" name="addedby" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                <br>
                <hr>
                <button class="btn btn-primary" type="submit" name="update_staff" 
                        style="margin-left: 42%;
                               width: 150px;
                               border-radius: 30px;
                               font-size: 18px;"> 
                    Update 
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

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