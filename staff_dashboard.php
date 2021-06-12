<?php
    require('classes/staff.class.php');
    include('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();

    $rescount = $residentbmis->count_resident();
    $rescountm = $residentbmis->count_male_resident();
    $rescountf = $residentbmis->count_female_resident();
    $rescountfh = $residentbmis->count_head_resident();
    $rescountfm = $residentbmis->count_member_resident();

    $staffcount = $staffbmis->count_staff();
    $staffcountm = $staffbmis->count_mstaff();
    $staffcountf = $staffbmis->count_fstaff();
    $animalcount = $bmis->count_animal();

    $animalcountd = $bmis->count_animal_dogs();
    $animalcountc = $bmis->count_animal_cats();

    $tbcount = $residentbmis->count_tbdots();

    $vacccount = $residentbmis->count_vacc();

    $fpcount = $residentbmis->count_familyplan();

    $mccount = $residentbmis->count_motherchild();

    $medcount = $residentbmis->count_medicine();
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
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-dark"></i>
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
                                Total Household Heads</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescountfh?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4"> 
            <div class="card"> 
                <div class="card-header"> Activity Logs </div>
                <div class="card-body"> 
                    <h5 class="text-center"> Empty... </h5>
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
                                Total Barngay Staffs</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $staffcount?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">  
        <div class="card border-left-info shadow card-upper-space">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Barngay Male Staffs</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $staffcountm?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-male fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-md-4">  
        <div class="card border-left-info shadow card-upper-space">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Barngay Female Staffs</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $staffcountf?></div>
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
        <h4> Animal Welfare & Registry </h4> 
        <div class="card border-left-success shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Animals Registered</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $animalcount?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-paw fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-left-success shadow card-upper-space">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Dogs Registered</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $animalcountd?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dog fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card border-left-success shadow card-upper-space">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Cats Registered</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $animalcountc?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cat fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row"> 
    <div class="col-md-4">
        <h4> TB DOTS Data </h4> 
        <div class="card border-left-danger shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Total TB Dots Registered</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $tbcount?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-md fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <br>
    <div class="row"> 
    <div class="col-md-4">
        <h4> Vaccination Program Data </h4> 
        <div class="card border-left-secondary shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secodary text-uppercase mb-1">
                                Total Vaccination Program Registered</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $vacccount?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-crutch fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <br>
    <div class="row"> 
    <div class="col-md-4">
        <h4> Family Planning Data </h4> 
        <div class="card border-left-dark shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Total Family Planning Registered</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $fpcount?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <br>
    <div class="row"> 
    <div class="col-md-4">
        <h4> Mother & Child Data </h4> 
        <div class="card border-left-primary shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Mother & Child Check Registered</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $mccount?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-stethoscope fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <br>
    <div class="row"> 
    <div class="col-md-4">
        <h4> Medicine Data </h4> 
        <div class="card border-left-success shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Medicine Registered</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $medcount?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-capsules fa-2x text-dark"></i>
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