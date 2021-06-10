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

    <body> 
        <!-- eto yung navbar -->
        <nav class="navbar navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="index.php"> <img src="../BarangaySystem/icons/beverlylogo.png" width="40px" height="40px">&nbsp; 
            <a class="navbar-brand" href="resident_homepage.php">Barangay Beverly Hills</a>

            <div class="dropdown ml-auto">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <a class="btn" href="resident_profile.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-user" style="padding: 0.5em;"></i>Personal Profile  </a>
                    <a class="btn" href="resident_changepass.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-lock" style="padding: 0.5em;"></i>Change Password  </a>
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
                                <a href="services_compblot.php"> <h4> Complain/Blotter Report</h4> 
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


        

        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
    </body>
</html>
