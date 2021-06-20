<?php
    
   error_reporting(E_ALL ^ E_WARNING);
   ini_set('display_errors',0);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   $bmis->validate_admin();
   $view = $residentbmis->view_resident_voters();


   $residentbmis->update_resident();
   $residentbmis->delete_resident();
   
?>

<?php 
    include('dashboard_sidebar_start.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->

    <div class="row"> 
        <div class="col-md-12 text-center"> 
            <h3> Registered Voters in the Barangay </h3>
        </div>
    </div>

    <div class="row justify-content-center"> 
        <div class="col-md-11">
           <table class="table table-dark table-responsive text-center" id="dataTable" width="100%" cellspacing="0">
                <form action="" method="post">
                <thead> 
                    <tr>
                        <th> Actions</th>
                        <th> Surname </th>
                        <th> Middle name </th>
                        <th> House No.</th>
                        <th> Street </th>
                        <th> Barangay </th>
                        <th> Nationality </th>
                        <th> Contact # </th>
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
                            <td> <?= $view['lname'];?> </td>
                            <td> <?= $view['mi'];?> </td>
                            <td> <?= $view['houseno'];?> </td>
                            <td> <?= $view['street'];?> </td>
                            <td> <?= $view['brgy'];?> </td>
                            <td> <?= $view['nationality'];?> </td>
                            <td> <?= $view['contact'];?> </td>
                    </tr>
                    <?php }?>
                <?php } ?>
                </tbody>
                </form>
            </table>
        </div>
    </div>
    
    <!-- /.container-fluid -->
    
</div>
<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>
