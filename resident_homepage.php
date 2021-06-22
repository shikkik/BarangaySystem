<?php 
    error_reporting(E_ALL ^ E_WARNING);
    include('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();

    $dt = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $tm = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $cdate = $dt->format('Y/m/d');
    $ctime = $tm->format('H');

?>



<script> 
    function logout() {
    window.location.href = "logout.php";
    }
    function profile() {
    window.location.href = "resident_profile.php";
    }
</script>


<!DOCTYPE html> 
<html>

    <head> 
    <title> Barangay Management System </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- custom css --> 
        <link href="../BarangaySystem/customcss/pagestyle.css" rel="stylesheet" type="text/css">
        <!-- bootstrap css --> 
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <!-- fontawesome icons --> 
        <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>

        

    <style>
    
    .footerlinks{
        color:white;
        }
    .shfooter .collapse {
        display: inherit;
    }
        @media (max-width:767px) {
    .shfooter ul {
            margin-bottom: 0;
    }

    .shfooter .collapse {
            display: none;
    }

    .shfooter .collapse.show {
            display: block;
    }

    .shfooter .title .fa-angle-up,
    .shfooter .title[aria-expanded=true] .fa-angle-down {
            display: none;
    }

    .shfooter .title[aria-expanded=true] .fa-angle-up {
            display: block;
    }

    .shfooter .navbar-toggler {
            display: inline-block;
            padding: 0;
    }

    }

    .resize {
        text-align: center;
    }
    .resize {
        margin-top: 3rem;
        font-size: 1.25rem;
    }
    /*RESIZESCREEN ANIMATION*/
    .fa-angle-double-right {
        animation: rightanime 1s linear infinite;
    }

    .fa-angle-double-left {
        animation: leftanime 1s linear infinite;
    }
    @keyframes rightanime {
        50% {
            transform: translateX(10px);
            opacity: 0.5;
    }
        100% {
            transform: translateX(10px);
            opacity: 0;
    }
    }
    @keyframes leftanime {
        50% {
            transform: translateX(-10px);
            opacity: 0.5;
    }
        100% {
            transform: translateX(-10px);
            opacity: 0;
    }
    }

    </style>
    <body> 
        <!-- eto yung navbar -->
        <nav class="navbar navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="index.php"> <img src="../BarangaySystem/icons/beverlylogo.png" width="40px" height="40px"> 
            <a class="navbar-brand" href="resident_homepage.php">Barangay Beverly Hills</a>

            <div class="dropdown ml-auto">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <a class="btn" href="resident_profile.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-user" style="padding: 0.5em;"></i>Personal Profile  </a>
                    <a class="btn" href="resident_changepass.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-lock" ></i> Change Password  </a>
                    <a class="btn" href="logout.php"> <i class="fas fa-sign-out-alt" style="padding: 0.5em;"></i> Logout  </a>
                </ul>
            </div>
        </nav>

        

        <?php 
            $view = $bmis->view_announcement();

            if($view > 0 ) { ?>
            <table class="table table-dark table-responsive">
                <thead style="display:none"> 
                    <tr>
                        <th> Announcement </th>
                    </tr>
                </thead>
                <tbody style="display:none"> 
                <?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
                        <tr>
                            <td> <?= $view['event'];?> </td>             
                        </tr>
                    <?php }?>
                <?php } ?>
                </tbody>
            </table>

            <div class="alert alert-info alert-dismissible fade show" role="alert" style="margin-top: -20px;">
                <strong><h4>ANNOUNCEMENT!<h4></strong> <br> <p> <?= $view['event'];?> </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php 
            }

            else {
            
            }

        ?>




        <section class="heading-section"> 
            <div class="container text-center"> 
                <div class="row"> 
                    <div class="col"> 
                        
                        <br>
                        <br>

                        <div class="header"> 
                            <h1> Welcome to Barangay Services Management System </h1>
                            <h3> You may select the following services offered below </h3>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="container"> 
                <div class="row title-spacing">
                    <div class="col"> 
                        <h3 class="text-center"> Resident Applications</h3>
                        <hr>
                    </div> 
                </div>

                <div class="row"> 
                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center"> 
                            <a href="services_animal.php?id_resident=<?= $userdetails['id_resident'];?>">
                                <img src="../BarangaySystem/icons/ResidentHomepage/animalreg.png">
                                <h4> Animal Registry & Welfare </h4> 
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center">
                                <img src="../BarangaySystem/icons/ResidentHomepage/tbdots.png"> 
                                <a href="services_tb_dots.php?id_resident=<?= $userdetails['id_resident'];?>"> <h4> TB DOTS Program</h4> 
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center">
                                <img src="../BarangaySystem/icons/ResidentHomepage/vaccine.png"> 
                                <a href="services_vaccination.php?id_resident=<?= $userdetails['id_resident'];?>"> <h4> Vaccination Program </h4> 
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row card-spacing"> 
                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center"> 
                            <a href="services_motherandchild.php?id_resident=<?= $userdetails['id_resident'];?>">
                                <img src="../BarangaySystem/icons/ResidentHomepage/motherchild.png">
                                <h4> Mother & Child Check-Up</h4> 
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="../BarangaySystem/icons/ResidentHomepage/familyplan.png"> 
                                <a href="services_familyplanning.php?id_resident=<?= $userdetails['id_resident'];?>"> <h4> Family Planning </h4> 
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center">
                                <img src="../BarangaySystem/icons/ResidentHomepage/complain.png"> 
                                <a href="services_blotter.php?id_resident=<?= $userdetails['id_resident'];?>"> <h4> Complain/Blotter Report</h4> 
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>

                <div class="row title-spacing">
                    <div class="col"> 
                        <h3 class="text-center"> Documents Processing </h3>
                        <hr>
                    </div> 
                </div>

                <div class="row card-spacing"> 
                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center"> 
                            <img src="../BarangaySystem/icons/ResidentHomepage/residency.png">
                                <a href="services_certofres.php"> <h4> Certificate of Residency </h4> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center">
                            <img src="../BarangaySystem/icons/ResidentHomepage/clearance.png"> 
                                <a href="services_brgyclearance.php"> <h4> Barangay Clearance </h4> </a>
                            </div>
                        </div>
                        
                    </div>


                    <div class="col"> 
                    <div class="card"> 
                            <div class="card-body text-center"> 
                                <img src="../BarangaySystem/icons/ResidentHomepage/indigency.png">
                                <a href="services_certofindigency.php"> <h4> Certificate of Indigency </h4> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <br>
        <br>
        <br>

        <!-- Footer -->

        <footer id="footer" class="bg-primary text-white d-flex-column text-center">
            <hr class="mt-0">

            <div class="text-center">
                <h1 class="text-white">Services</h1>
                <ul class="list-unstyled list-inline">

                &nbsp;

                <li class="list-inline-item">
                    <a class="footerlinks" href="#!" class="sbtn btn-large mx-1" title="HealthCare">
                    <i class="fas fa-first-aid fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a class="footerlinks" href="#!" class="sbtn btn-large mx-1" title="Documents">
                    <i class="fas fa-file fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a class="footerlinks" href="#!" class="sbtn btn-large mx-1" title="Documents">
                    <i class="fas fa-user-friends fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a class="footerlinks" href="#!" class="sbtn btn-large mx-1" title="Blotter">
                    <i class="fas fa-user-shield fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a class="footerlinks" href="#!" class="sbtn btn-large mx-1" title="Inquiries">
                    <i class="fas fa-question fa-2x"></i>
                    </a>
                </li>
                </ul>
            </div>

            <hr class="mb-0">

            <!--Footer Links-->

            <div class="container text-left text-md-center">
                <div class="row">

                    <!--First column-->

                    <div class="col-md-3 mx-auto shfooter">
                        <h5 class="my-2 font-weight-bold d-none d-md-block">Documentation</h5>
                        <div class="d-md-none title" data-target="#Documentation" data-toggle="collapse">
                            <div class="mt-3 font-weight-bold">Documentation
                                <div class="float-right navbar-toggler">
                                    <i class="fas fa-angle-down"></i>
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled collapse" id="Documentation">
                            <li><a class="footerlinks" href="#">Certificate of Residency</a></li>
                            <li><a class="footerlinks" href="#">Barangay Clearance</a></li>
                            <li><a class="footerlinks" href="#">Certificate of Indigency</a></li>
                            <li><a class="footerlinks" href="#">Barangay ID</a></li>
                            <li><a class="footerlinks" href="#">Business Permit</a></li>
                        </ul>
                    </div>

                    <!--/.First column-->

                    <hr class="clearfix w-100 d-md-none mb-0">

                    <!--Third column-->

                    <div class="col-md-3 mx-auto shfooter">
                        <h5 class="my-2 font-weight-bold d-none d-md-block">Other Services</h5>
                        <div class="d-md-none title" data-target="#OtherServices" data-toggle="collapse">
                            <div class="mt-3 font-weight-bold">Other Services
                                <div class="float-right navbar-toggler">
                                    <i class="fas fa-angle-down"></i>
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </div>
                        </div>

                        <ul class="list-unstyled collapse" id="OtherServices">
                            <li><a class="footerlinks" href="#">Blotter</a></li>
                        </ul>
                    </div>

                    <!--/.Third column-->

                    <hr class="clearfix w-100 d-md-none mb-0">
 
                    <!--Fourth column-->

                    <div class="col-md-3 mx-auto shfooter">
                        <h5 class="my-2 font-weight-bold d-none d-md-block">Get Help</h5>
                        <div class="d-md-none title" data-target="#Get-Help" data-toggle="collapse">
                        <div class="mt-3 font-weight-bold">Get Help
                            <div class="float-right navbar-toggler">
                            <i class="fas fa-angle-down"></i>
                            <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                        </div>
                        <ul class="list-unstyled collapse" id="Get-Help">
                        <li><a class="footerlinks" href="#">Contact Us</a></li>
                        <li><a class="footerlinks" href="#">Privacy Policy</a></li>
                        <li><a class="footerlinks" href="#">Terms</a></li>
                        </ul>
                    </div>

                    <!--/.Fourth column-->

                </div>
            </div>

            <!--/.Footer Links-->

            <hr class="mb-0">

            <!--Copyright-->

            <div class="py-3 text-center">
                Copyright 2021 -
                <script>
                document.write(new Date().getFullYear())
                </script> 
                BI & ESMS | For Educational Purposes Only
            </div>

        </footer>

        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
    </body>
</html>
