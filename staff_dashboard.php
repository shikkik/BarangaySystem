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

    $animalcount = $bmis->count_animal();
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
            <div class="card">
                <div class="card-body"> 
                    <h5>Total Barangay Residents</h5> <br>
                    <h2> <?= $rescount;?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">  
            <div class="card card-upper-space">
                <div class="card-body"> 
                    <h5>Total Household Heads</h5> <br>
                    <h2> <?= $rescountfh;?></h2>
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
            <div class="card card-upper-space">
                <div class="card-body"> 
                    <h5>Total Male Residents</h5> <br>
                    <h2> <?= $rescountm;?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">  
            <div class="card card-upper-space">
                <div class="card-body"> 
                    <h5>Total Female Residents</h5> <br>
                    <h2> <?= $rescountf;?></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row card-row-gap"> 
        <div class="col-md-4">
            <h4> Barangay Staff Data </h4> 
            <div class="card">
                <div class="card-body"> 
                    <h5>Total Barangay Staffs</h5> <br>
                    <h2> <?= $staffcount;?></h2>
                </div>
            </div>
        </div>

    </div>

    <div class="row card-row-gap"> 
        <div class="col-md-4">
        <h4> Animal Welfare & Registry Data </h4> 
            <div class="card">
                <div class="card-body"> 
                    <h5>Animals Registered</h5> <br>
                    <h2> <?= $animalcount;?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">  
            <div class="card card-upper-space">
                <div class="card-body"> 
                    <h5>Most Common Animal Registered </h5> <br>
                    <h2> <?= $rescountfh;?></h2>
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