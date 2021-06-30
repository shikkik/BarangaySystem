<?php
    
    error_reporting(E_ALL ^ E_WARNING);
    ini_set('display_errors',0);
    require('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();
    $bmis->validate_admin();
    $bmis->delete_brgyid();
    $view = $bmis->view_brgyid();
    $id_resident = $_GET['id_resident'];
    $resident = $residentbmis->get_single_certofres($id_resident);
   
?>

<?php 
    include('dashboard_sidebar_start.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">
        <div class="col-md-12 text-center">
            <h3> Barangay ID Card Requests</h3>
        </div>
    </div>

    <br><br>

    <div class="row"> 
        <div class="col-md-7"> </div>
        <div class="col-md-5">
            <form method="POST">
            <div class="form-inline" >
                <input type="search" class="form-control" name="keyword" value="" placeholder="Search here..." required=""/>
                <button class="btn btn-success" name="search_bspermit">Search</button>
                <a href="admn_bspermit.php" class="btn btn-info">Reload</a>
            </div>
            </form>
            <br>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-1"> </div>
        <div class="col-md-10"> 
            <?php 
                include('admn_brgyid_search.php');
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
