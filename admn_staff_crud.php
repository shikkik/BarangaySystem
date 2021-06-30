<?php
    ini_set('display_errors',0);
    error_reporting(E_ALL ^ E_WARNING);
    require('classes/staff.class.php');
    $userdetails = $bmis->get_userdata();
    $bmis->validate_admin();
    $view = $staffbmis->view_staff();
    $staffbmis->create_staff();
    $upstaff = $staffbmis->update_staff();
    $staffbmis->delete_staff();
    $staffcount = $staffbmis->count_staff();
    
?>

<?php 
    include('dashboard_sidebar_start.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-800">Barangay Staff Data</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header bg-primary text-white"> Add new Barangay Staff </div>
                <div class="card-body"> 
                <form method="post">
                    <label class="mtop"> Last Name</label>
                    <input type="text" class="form-control" name="lname"  placeholder="Enter last name">

                    <label class="mtop" >First Name </label>
                    <input type="text" class="form-control" name="fname"  placeholder="Enter first name">

                    <label class="mtop"> Middle Name </label>
                    <input type="text" class="form-control" name="mi" placeholder="Enter middle initial">

                    <label class="mtop">Email </label>
                    <input type="email" class="form-control" name="email"  placeholder="Enter email">

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
                                        
                    <input type="hidden" class="form-control" name="role" value="user">
                    <input type="hidden" class="form-control" name="addedby" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                    <br>
                    <button class="btn btn-primary" type="submit" name="add_staff"> Add </button>
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
                                Number of Staff Registered</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $staffcount?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
    <br>

    <div class="row"> 
        <div class="col-md-12">
           <table class="table table-dark table-responsive" id="dataTable" width="100%" cellspacing="0">
                <form action="" method="post">
                <thead> 
                    <tr>
                        <th> Actions </th>
                        <th> Email </th>
                        <th> Password </th>
                        <th> Surname </th>
                        <th> First name </th>
                        <th> Middle Name </th>
                        <th> Age </th>
                        <th> Sex </th>
                        <th> Address </th>
                        <th> Contact </th>
                        <th> Position </th>
                        <th> Role </th>
                        <th> AddedBy </th>
                    </tr>
                </thead>
                <tbody>
                <?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
                    <tr>
                        <td>    
                            <form action="" method="post">
                                <a href="update_staff_form.php?id_user=<?= $view['id_user'];?>" class="btn btn-primary"> Update </a>
                                <input type="hidden" name="id_user" value="<?= $view['id_user'];?>">
                                <button class="btn btn-danger" type="submit" name="delete_staff"> Delete </button>
                            </form>
                        </td>
                        <td> <?= $view['email'];?> </td>
                        <td> <?= $view['password'];?> </td>
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['sex'];?> </td>
                        <td> <?= $view['address'];?> </td>
                        <td> <?= $view['contact'];?> </td>
                        <td> <?= $view['position'];?> </td>
                        <td> <?= $view['role'];?> </td>
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