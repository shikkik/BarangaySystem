<?php 
    error_reporting(E_ALL ^ E_WARNING);
    require('classes/resident.class.php');
    ini_set('display_errors',0);
    $userdetails = $residentbmis->get_userdata();
    $id_resident = $_GET['id_resident'];
    $resident = $residentbmis->get_single_resident($id_resident);

    $residentbmis->profile_update();
    
?>

<!DOCTYPE html> 
<html>

    <head> 
        <title> Barangay Information & Management System </title>
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
            <a class="navbar-brand" href="resident_homepage.php">Barangay Information & E-Services Management System</a>

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

        <div class="container"> 
            <div class="row">
                <div class="col"> 
                    <div class="card" style="margin-top: 2em;">  
                    <div class="card-header bg-primary text-white"> Personal Information </div>
                    <div class="card-body"> 
                        <form method="post">
                        <div class="row"> 
                            <div class="col-md-2"> 
                             
                                <h5> Name:</h5> <br>
                                <h5> Email: </h5> <br>
                                <h5> Sex: </h5> <h5> <br>
                                <h5>Age:</h5> <br>
                                <h5>Status:</h5> <br>
                                <h5>Address:</h5> <br>
                                <h5>Contact:</h5> <br>
                            </div>

                            <div class="col-md-4"> 
                                
                                <h5><?= $resident['lname'];?>, <?= $resident['fname'];?> <?= $resident['mi'];?></h5> <br>
                                <h5> <?= $resident['email'];?> </h5><br>
                                <h5><?= $resident['sex'];?> </h5><br>
                                <input class="form-control" type="text" name="age" value="<?= $resident['age'];?>"><br>
                                <input class="form-control" type="text" name="status" value="<?= $resident['status'];?>"><br>
                                <input class="form-control" type="text" name="address" value="<?= $resident['address'];?>"><br>
                                <input class="form-control" type="text" name="contact" value="<?= $resident['contact'];?>"><br>
                            </div>

                            <div class="col-md-2"> 
                                <h5> Birth Date: </h5> <br>
                                <h5> Birth Place: </h5> <br>
                                <h5> Nationality: </h5> <br>
                                <h5> Family Role: </h5> <h5> <br>
                            </div>

                            <div class="col-md-4"> 
                                <h5> <?= $resident['bdate'];?> </h5><br>
                                <h5> <?= $resident['bplace'];?> </h5><br>
                                <h5> <?= $resident['nationality'];?> </h5><br>
                                <h5> <?= $resident['family_role'];?> </h5><br>
                            </div>
                        </div>
                    </div>
                </div>
                </div> 
            </div>
            <br>
            <div class="row" style="margin-bottom: 5em;"> 
                <div class="col-xl-12">
                    <div class="form-inline">
                        <input class="form-control" name="lname" type="hidden" value="<?= $resident['lname'];?>"/>
                        <input class="form-control" name="mi" type="hidden" value="<?= $resident['mi'];?>" />
                        <button type="submit" class="btn btn-info"  name="search_household">View Household</button>
                        <button class="btn btn-primary" type="submit" name="profile_update"> Update </button>
                        <a href="resident_profile.php?id_resident=<?= $userdetails['id_resident'];?>"></a>   
                        <div>
                            <br><br>
                            <?php include'testingsearch.php'?>  
                        </div>
                    </form>
                    </div>                                   
                </div>
            </div>
        </div>

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
                        <h5 class="my-2 font-weight-bold d-none d-md-block">HealthCare</h5>
                        <div class="d-md-none title" data-target="#HealthCare" data-toggle="collapse">
                            <div class="mt-3 font-weight-bold">HealthCare
                                <div class="float-right navbar-toggler">
                                    <i class="fas fa-angle-down"></i>
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled collapse" id="HealthCare">
                            <li><a class="footerlinks" href="#">Animal Registry & Welfare</a></li>
                            <li><a class="footerlinks" href="#">TB Dots Consultation</a></li>
                            <li><a class="footerlinks" href="#">Vaccination Programs</a></li>
                            <li><a class="footerlinks" href="#">Mother & Child Check-Up</a></li>
                        </ul>
                    </div>

                    <!--/.First column-->

                    <hr class="clearfix w-100 d-md-none mb-0">

                    <!--Second column-->

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
                        </ul>
                    </div>

                    <!--/.Second column-->

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
                            <li><a class="footerlinks" href="#">Family Planning</a></li>
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
                Copyright 2020 -
                <script>
                document.write(new Date().getFullYear())
                </script> 
                SAD/DBA | For Educational Purposes Only
            </div>

        </footer>

 
        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>

    </body>
</html>
