<?php
    include('classes/staff.class.php');
    include('classes/resident.class.php');

    $userdetails = $bmis->get_userdata();
    $bmis->validate_admin();

?>


<?php 
    include('dashboard_sidebar_start.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


<div class="row"> 
    <div class="col-md-6"> 
    <h1 class="h3 mb-4 text-gray-800">Resident Data</h1>
        <div class="card"> 
            <div class="card-body"> 

            </div>
        </div>
    </div>

    <div class="col-md-6"> 
    <h1 class="h3 mb-4 text-gray-800">Barangay Staff Data</h1>
        <div class="card"> 
            <div class="card-body"> 
                
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

                
<?php 
    include('dashboard_sidebar_end.php');
?>