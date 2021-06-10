<?php 
     require('classes/resident.class.php');
    $residentbmis->create_resident();
     //$data = $bms->get_userdata();

     
?>

<!DOCTYPE html> 
<html> 
    <head> 
        <title> Barangay Management System </title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <!-- custom css --> 
        <link href="../BarangaySystem/customcss/regiformstyle.css" rel="stylesheet" type="text/css">
        <!-- bootstrap css --> 
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
        <!-- fontawesome icons -->
        <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
    </head>

    <style>
        a{
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
    
    <body >
        <!-- eto yung navbar -->
        <nav class="navbar sticky-top navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php"> <img src="../BarangaySystem/icons/beverlylogo.png" width="40px" height="40px">&nbsp; 
            <span style="font-size: 1em;"> Barangay Beverly Hills </span> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"> <a href=""> </a> </li>
              </ul>
            </div>
        </nav>

        <div class="container-fluid"  style="margin-top: 4em;">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Registration Form</h1>
                </div>
            </div>

            <div class="row margin mtop"> 
                <div class="col-sm"> </div>

                <div class="col-sm-10">   
                    <div class="card mbottom" style="margin-bottom: 3em;">
                        <div class="card-body" >
                        <form method="post"> 
                            <div class="row">
                                <div class="col">
                                    <label> Last Name</label>
                                        <input type="text" class="form-control" name="lname"  placeholder="Enter last name">
                                    </div>
                                
                                <div class="col">
                                    <label class="mtop" >First Name </label>
                                    <input type="text" class="form-control" name="fname"  placeholder="Enter first name">
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="col"> 
                                    <label class="mtop"> Middle Initial </label>
                                    <input type="text" class="form-control" name="mi" placeholder="Enter middle initial">
                                </div>

                                <div class="col"> 
                                    <label>Status</label>
                                        <select class="form-control" name="status" id="status">
                                        <option value="">---</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Divorced">Divorced</option>
                                        </select>  
                                </div>
                            </div>
                                        
                            <div class="row">
                                <div class="col">
                                    <label>Email </label>
                                    <input type="email" class="form-control" name="email"  placeholder="Enter email">
                                    <label class="mtop">Birth Date </label>
                                    <input type="date" class="form-control" name="bdate">
                                    <label class="mtop">Contact Number</label>
                                    <input type="tel" class="form-control" name="contact" placeholder="Enter contact number">
                                </div>

                                <div class="col">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                    <label class="mtop">Birth Place </label>
                                    <input type="text" class="form-control" name="bplace"  placeholder="Enter birth place">
                                    <label class="mtop">Nationality </label>
                                    <input type="text" class="form-control" name="nationality"  placeholder="Enter nationality">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label> Address </label>
                                    <input type="text" class="form-control" name="address"  placeholder="Enter Address">
                                </div>

                                <div class="col">
                                    <label>Family Role</label>
                                    <select class="form-control" name="family_role" id="family_role">
                                    <option value="">---</option>
                                    <option value="Family Head">Family Head</opt ion>
                                    <option value="Family Member">Family Member</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Age</label>
                                    <input type="number" class="form-control" name="age" placeholder="Age">
                                </div>

                                <div class="col rb">
                                    <label class="mtop">Gender</label>
                                    <select class="form-control" name="sex" id="sex">
                                    <option value="">---</option>
                                    <option value="Male">Male</opt ion>
                                    <option value="Female">Female</option>
                                    </select>
                                </div>           
                            </div>

                            <br>
                                
                            <input type="hidden" class="form-control" name="role" value="resident">
                            <button class="btn btn-primary" type="submit" name="add_resident"> Submit </button>
                            <a class="btn btn-danger" href="index.php"> Back to Login</a>
                        </form>
                        </div>
                    </div> 
                </div>
                <div class="col-sm"> </div>
            </div>
        </div>

        <!-- Footer -->

        <footer id="footer" class="bg-primary text-white d-flex-column text-center">
            <hr class="mt-0">

            <div class="text-center">
                <h1>Services</h1>
                <ul class="list-unstyled list-inline">

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="HealthCare">
                    <i class="fas fa-first-aid fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Documents">
                    <i class="fas fa-file fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Documents">
                    <i class="fas fa-user-friends fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Blotter">
                    <i class="fas fa-user-shield fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Inquiries">
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
                            <li><a href="#">Animal Registry & Welfare</a></li>
                            <li><a href="#">TB Dots Consultation</a></li>
                            <li><a href="#">Vaccination Programs</a></li>
                            <li><a href="#">Mother & Child Check-Up</a></li>
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
                            <li><a href="#">Certificate of Residency</a></li>
                            <li><a href="#">Barangay Clearance</a></li>
                            <li><a href="#">Certificate of Indigency</a></li>
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
                            <li><a href="#">Family Planning</a></li>
                            <li><a href="#">Blotter</a></li>
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
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms</a></li>
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

