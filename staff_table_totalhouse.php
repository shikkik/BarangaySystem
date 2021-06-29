<?php
    
   error_reporting(E_ALL ^ E_WARNING);
   ini_set('display_errors',0);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   $bmis->validate_staff();
   $view = $residentbmis->view_resident_household();
   
?>

<?php 
    include('dashboard_sidebar_start_staff.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->

    <div class="row"> 
        <div class="col-md-12 text-center"> 
            <h3> Barangay Household Table </h3>
        </div>
    </div>

    <br><br> 
    
    <div class="row"> 
        <div class="col-md-6"> </div> 
        <div class="col-md-5">
            <form method="POST" action="">
                <div class="form-inline" >
                    <input type="search" class="form-control" name="keyword" value="" placeholder="Search here..." required=""/>
                    <button class="btn btn-success" name="search_household">Search</button>
                    <a href="admn_table_totalhouse.php" class="btn btn-info">Reload</a>
                </div>
            </form>
            <br>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-2"> </div>
        <div class="col-md-8"> 
            <?php
                include('admn_table_totalhouse_search.php');
            ?>
        </div>
        <div class="col-md-2"> </div>
    </div>
    
    <!-- /.container-fluid -->
    
</div>
<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>