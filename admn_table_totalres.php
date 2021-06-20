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
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->

    <div class="row"> 
        <div class="col-md-12 text-center"> 
            <h3> Barangay Resident Table</h3>
        </div>
    </div>

    <div class="row"> 
        <br> 
        <div class="col-md-12">
            <form method="POST" action="">
            <div class="form-inline" >
                <input type="search" class="form-control" name="keyword" value="" placeholder="Search here..." required=""/>
                <button class="btn btn-success" name="search_resident">Search</button>
                <a href="admn_resident_crud.php" class="btn btn-info">Reload</a>
            </div>
            </form>
            <br><br>
            <?php 
                include('search_resident.php');
            ?>
        </div>
    </div>
    
    <!-- /.container-fluid -->
    
</div>
<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>
