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
    include('dashboard_sidebar_start.php');
?>

<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="mb-4 text-center">Barangay Staff Data</h1>

    <hr>
    <br>

    <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header bg-primary text-white"> Update Barangay Staff Data </div>
                <div class="card-body"> 
                    <form method="post">
                        <div class="row">
                            <div class="col">
                                <label class="form-group"> Last Name:</label>
                                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" value="<?= $staff['lname'];?>">
                            </div>
                            <div class="col">
                                <label class="form-group" >First Name: </label>
                                <input type="text" class="form-control" name="fname" placeholder="Enter First Name" value="<?= $staff['fname'];?>">
                            </div>
                            <div class="col">
                                <label class="form-group"> Middle Name: </label>
                                <input type="text" class="form-control" name="mi" placeholder="Enter Middle Name" value="<?= $staff['mi'];?>">
                            </div>
                        </div>
                        
                        <div class="row" style="margin-top: 1.1em;">
                            <div class="col">
                                <label class="form-group">Email: </label>
                                <input type="email" class="form-control" name="email"  placeholder="Enter Email" value="<?= $staff['email'];?>">
                            </div>
                            <div class="col">
                                <label class="form-group">Contact Number:</label>
                                <input type="tel" class="form-control" name="contact" placeholder="Enter Contact Number" value="<?= $staff['contact'];?>">
                            </div>
                            <div class="col">
                                <label class="form-group">Position: </label>
                                <input type="text" class="form-control" name="position"  placeholder="Enter Position" value="<?= $staff['position'];?>">
                            </div>
                        </div>

                        <div class="row" style="margin-top: 1.1em;">
                            <div class="col">
                                <div class="form-group">
                                    <label>House No:</label>
                                    <input class="form-control" type="text" name="houseno" placeholder="Enter House No." value="<?= $staff['houseno'];?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Street:</label>
                                    <input class="form-control" type="text" name="street" placeholder="Enter Street" value="<?= $staff['street'];?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Barangay:</label>
                                    <input class="form-control" type="text" name="brgy" placeholder="Enter Barangay" value="<?= $staff['brgy'];?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label> Municipality: </label>
                                    <input type="text" class="form-control" name="municipal" placeholder="Enter Municipality" value="<?= $staff['municipal']?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top: .5em;">
                            <div class="col">
                                <div class="form-group">
                                    <label>Age: </label>
                                    <input type="number" class="form-control" name="age" placeholder="Enter Age" value="<?= $staff['age'];?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label> Gender: </label>
                                    <input type="text" class="form-control" name="gender" placeholder="Enter Gender" value="<?= $staff['sex'];?>" required>
                                </div>
                            </div>
                        </div>
                        
                        <input type="hidden" class="form-control" name="role" value="user">
                        <input type="hidden" class="form-control" name="addedby" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                        <br>
                        <hr>
                        <a href="admn_staff_crud.php" class="btn btn-danger" style="width: 120px; font-size: 18px; border-radius:30px; margin-left:35%;"> Back </a>
                        <button class="btn btn-primary" type="submit" name="update_staff" style="width: 120px; font-size: 18px; border-radius:30px;"> 
                            Update 
                        </button>
                    </form>         
                </div>
            </div>
        </div>
        <div class="col-md-2"> </div>
    </div>
    
    <br>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>