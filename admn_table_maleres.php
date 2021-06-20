<?php
    
   error_reporting(E_ALL ^ E_WARNING);
   ini_set('display_errors',0);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   $bmis->validate_admin();
   $view = $residentbmis->view_resident_male();

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
            <h3> Male Residents Table </h3>
        </div>
    </div>

    <div class="row justify-content-center"> 
        <div class="col-md-11">
           <table class="table table-dark table-responsive text-center" id="dataTable" width="100%" cellspacing="0">
                <form action="" method="post">
                <thead> 
                    <tr>
                        <th> Actions</th>
                        <th> Email </th>
                        <th> Surname </th>
                        <th> First name </th>
                        <th> Middle name </th>
                        <th> Age </th>
                        <th> Sex </th>
                        <th> Status </th>
                        <th> House No.</th>
                        <th> Street </th>
                        <th> Barangay </th>
                        <th> Contact </th>
                        <th> Birth date </th>
                        <th> Birth place </th>
                        <th> Nationality </th>
                        <th> Family Head </th>
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
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['sex'];?> </td>
                        <td> <?= $view['status'];?> </td>
                        <td> <?= $view['houseno'];?> </td>
                        <td> <?= $view['street'];?> </td>
                        <td> <?= $view['brgy'];?> </td>
                        <td> <?= $view['contact'];?> </td>
                        <td> <?= $view['bdate'];?> </td>
                        <td> <?= $view['bplace'];?> </td>
                        <td> <?= $view['nationality'];?> </td>
                        <td> <?= $view['family_role'];?> </td>
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
