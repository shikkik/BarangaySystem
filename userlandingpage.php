<?php 
    require('classes/mainclass.class.php');
    require('classes/userclass.class.php');
    
    $userdetails = $bms->get_userdata();
    //print_r($userdetails);
?>

<!DOCTYPE html> 
<html>

    <head> 
    <title> Barangay Management System </title>
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="#">Barangay E-Services</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $userdetails['fullname'];?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
                </div>
            </div>
        </nav>


        <section class="heading-section"> 

            <div class="container-fluid"> 

                <div class=""> 

                    <h5> Resident Applications</h5>
                </div>
                <div class="row"> 
                    <div class="col"> 
                        <div class="header"> 
                            <h1> Welcome to Barangay Services Management System </h1>
                            <h3> You may select the following services offered below </h3>
                        </div>
                    </div>
                </div>
                
            </div>


            <div class="container"> 
                <div class="row"> 
                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center"> 
                            <a href="https://github.com/shikkik">
                                <img src="../BarangaySystem/icons/resident.png">
                                <h4> Residential ID Application</h4> 
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                    <div class="card"> 
                            <div class="card-body text-center">
                            <img src="../BarangaySystem/icons/resident.png"> 
                                <a href=""> <h4> Certificate of Residency</h4> </a>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col"> 
                    <div class="card"> 
                            <div class="card-body text-center"> 
                                <img src="../BarangaySystem/icons/resident.png">
                                <a href=""> <h4> Certificate of Indigency </h4> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row card-spacing"> 
                    <div class="col"> 
                        <div class="card"> 
                            <div class="card-body text-center"> 
                            <img src="../BarangaySystem/icons/resident.png">
                                <a href=""> <h4> Residential ID Application</h4> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col"> 
                    <div class="card"> 
                            <div class="card-body text-center">
                            <img src="../BarangaySystem/icons/resident.png"> 
                                <a href=""> <h4> Certificate of Residency</h4> </a>
                            </div>
                        </div>
                        
                    </div>


                    <div class="col"> 
                    <div class="card"> 
                            <div class="card-body text-center"> 
                                <img src="../BarangaySystem/icons/resident.png">
                                <a href=""> <h4> Certificate of Indigency </h4> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"> </script>
    </body>
</html>
