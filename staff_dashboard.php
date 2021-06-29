<?php
    require('classes/staff.class.php');
    include('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();

    $rescount = $residentbmis->count_resident();
    $rescountm = $residentbmis->count_male_resident();
    $rescountf = $residentbmis->count_female_resident();
    $rescountfh = $residentbmis->count_head_resident();
    $rescountfm = $residentbmis->count_member_resident();
    $rescountvoter = $residentbmis->count_voters();

    $staffcount = $staffbmis->count_staff();
    $staffcountm = $staffbmis->count_mstaff();
    $staffcountf = $staffbmis->count_fstaff();

?>


<?php 
    include('dashboard_sidebar_start_staff.php');
?>
<style> 
.card-upper-space {
    margin-top: 35px;
}

.card-row-gap {
    margin-top: 3em;
}
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<div class="row"> 
        <div class="col-md-4">
        <h4> Barangay Resident Data </h4>
            <div class="card border-left-primary shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Barangay Residents</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="staff_table_totalres.php"> View Records </a>
                        </div>
                        <div class="col-auto">
                            <span style="color: #4e73df;"> 
                                <i class="fas fa-user-friends fa-2x text-dark "></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">  
            <div class="card border-left-primary shadow card-upper-space">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Household Count</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescountfh?></div>
                                <br>
                                <a href="staff_table_totalhouse.php"> View Records </a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4"> 
            <div class="card border-left-primary shadow card-upper-space">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Registered Voters </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescountvoter?></div>
                                <br>
                                <a href="staff_table_voters.php"> View Records </a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="row"> 
        <div class="col-md-4">  
            <div class="card border-left-primary shadow card-upper-space">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Male Residents</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescountm?></div>
                                <br>
                                <a href="staff_table_maleres.php"> View Records </a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-male fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">  
            <div class="card border-left-primary shadow card-upper-space">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Female Residents</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescountf?></div>
                                <br>
                                <a href="staff_table_femaleres.php"> View Records </a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-female fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br>
    <div class="row"> 
    <div class="col-md-4">
        <h4> Barangay Staff Data </h4> 
        <div class="card border-left-info shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Barangay Staff List</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $staffcount?></div>
                                <br>
                                <a href="staff_table_totalstaff.php"> View List </a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-dark"></i>
                        </div>
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