<?php
   error_reporting(E_ALL ^ E_WARNING);
   ini_set('display_errors',0);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   //$bmis->validate_admin();
   $bmis->delete_certofres();
   $view = $bmis->view_certofres();
   $id_resident = $_GET['id_resident'];
   $resident = $residentbmis->get_single_certofres($id_resident);

?>

<?php 
    include('dashboard_sidebar_start_staff.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
                
    <div class="row"> 
        <div class="col-md-8"> 
        <div class="card">    
        </div>
        </div>
    </div>

    <br>
    <div class="row"> 
        <div class="col-md-12"> 
            <h1 class="h3 mb-4 text-gray-800">Certificate of Residency Request</h1>
            <table class="table table-dark table-responsive">
            <form method="post">
                <thead> 
                    <tr>
                        <th> Actions</th>
                        <th> ID_ResCert </th>
                        <th> ID_Resident </th>
                        <th> Surname </th>
                        <th> First Name </th>
                        <th> Middle Name </th>
                        <th> Age </th>
                        <th> Status </th>
                        <th> Nationality </th>
                        <th> Address </th>
                        <th> AddedBy </th>
                    </tr>
                </thead>
                <tbody> 
                <?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
                    <tr>
                        <td>    
                        <form action="" method="post">
                            <a class="btn btn-primary" href="rescert_form.php?id_resident=<?= $view['id_resident'];?>">Generate </a> 
                            <input type="hidden" name="id_rescert" value="<?= $view['id_rescert'];?>">
                            <button class="btn btn-danger" type="submit" name="delete_certofres"> Delete </button>
                        </form>
                        </td>
                        <td> <?= $view['id_rescert'];?> </td>
                        <td> <?= $view['id_resident'];?> </td> 
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['status'];?> </td>
                        <td> <?= $view['nationality'];?> </td>
                        <td> <?= $view['address'];?> </td>
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
