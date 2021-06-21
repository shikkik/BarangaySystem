<?php
    
   error_reporting(E_ALL ^ E_WARNING);
   ini_set('display_errors',0);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   $bmis->validate_admin();
   $view = $residentbmis->view_resident_voters();
   
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

    <br><br>   

    <div class="row"> 
        <div class="col-md-6"> </div>
        <div class="col-md-6">
            <form method="POST" action="">
            <div class="form-inline" >
                <input type="search" class="form-control" name="keyword" value="" placeholder="Search here..." required=""/>
                <button class="btn btn-success" name="search_totalvoters">Search</button>
                <a href="admn_table_voters.php" class="btn btn-info">Reload</a>
            </div>
            </form>
            <br>

        </div>
    </div>

    <div class="row"> 
        <div class="col-md-1"> </div> 
        <div class="col-md-9"> 
            <?php 
                include('admn_table_voters_search.php');
            ?>
        </div>
        <div class="col-md-1"> </div> 
    </div>
    
    <!-- /.container-fluid -->
    
</div>
<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>
