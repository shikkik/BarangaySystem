<?php 
    //error_reporting(E_ALL ^ E_WARNING);
    require('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();
    //$view = $residentbmis->check_resident($email);
    //$residentbmis->view_household_list();

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
            <a class="navbar-brand" href="resident_homepage.php">Barangay Sorsogon</a>

            <div class="dropdown ml-auto">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <button class="btn" onclick="profile();"> <i class="fas fa-user" style="padding: 0.5em;"></i>Personal Profile  </button>
                    <button class="btn" onclick="logout();"> <i class="fas fa-sign-out-alt" style="padding: 0.5em;"></i> Logout  </button>
                </ul>
            </div>
        </nav>

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
                            <a href="animal.php">
                                <img src="../BarangaySystem/icons/animalreg.png">
                                <h4> Animal Registry & Welfare </h4> 
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center">
                                <img src="../BarangaySystem/icons/tbdots.png"> 
                                <a href="tb_dots.php"> <h4> TB DOTS Consultation</h4> 
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center">
                                <img src="../BarangaySystem/icons/vaccine.png"> 
                                <a href="vaccination.php"> <h4> Vaccination Programs </h4> 
                            </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row card-spacing"> 
                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center"> 
                            <a href="https://github.com/shikkik">
                                <img src="../BarangaySystem/icons/motherchild.png">
                                <h4> Mother & Child Check-Up</h4> 
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center">
                                <img src="../BarangaySystem/icons/familyplan.png"> 
                                <a href=""> <h4> Family Planning </h4> 
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center">
                                <img src="../BarangaySystem/icons/complain.png"> 
                                <a href=""> <h4> Complain/Blotter Report</h4> 
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
                            <img src="../BarangaySystem/icons/residency.png">
                                <a href=""> <h4> Certificate of Residency </h4> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center">
                            <img src="../BarangaySystem/icons/clearance.png"> 
                                <a href=""> <h4> Barangay Clearance </h4> </a>
                            </div>
                        </div>
                        
                    </div>


                    <div class="col"> 
                    <div class="card"> 
                            <div class="card-body text-center"> 
                                <img src="../BarangaySystem/icons/indigency.png">
                                <a href=""> <h4> Certificate of Indigency </h4> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <?php 
            print_r($userdetails);
        ?>

        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
    </body>
</html>
