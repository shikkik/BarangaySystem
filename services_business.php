<?php 
    require('classes/main.class.php');
    require('classes/resident.class.php');
    
    $userdetails = $bmis->get_userdata();
    $bmis->create_bspermit();

?>

<!DOCTYPE html>

<html>
  <head> 
    <title> Barangay Management System </title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
      <!-- responsive tags for screen compatibility -->
      <meta name="viewport" content="width=device-width, initial-scale=1"><!-- bootstrap css --> 
      <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
      <!-- fontawesome icons --> 
      <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
  
        <style>

            .container1
            {
                background-color: #3498DB;
                height: 342px;
                color: black;
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
            }

            .applybutton
            {
                width: 100% !important;
                height: 50px !important;
                border-radius: 20px;
                margin-top: 5%;
                margin-bottom: 8%;
                font-size: 25px;
                letter-spacing: 3px;
            }

            .paa
            {
                margin-top: 10px;
                position: relative;
                left: -28%;
            }

            .text1{
                margin-top: 30px;
                font-size: 50px;
            }

            .picture{
                height: 120px;
                width: 120px;
            }

            /* width */
            ::-webkit-scrollbar {
            width: 5px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
            background: #f1f1f1; 
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: #888; 
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
            background: #555; 
            }

            .card5 {
                width: 195px;
                height: 210px;
                overflow: auto;
                margin: auto;
                color: white;
            }

            .card4 {
                width: 195px;
                height: 210px;
                overflow: hidden;
                margin: auto;
                color: white;
            }

            .card3 {
                width: 195px;
                height: 210px;
                overflow: hidden;
                margin: auto;
                color: white;
            }

            .card2 {
                width: 195px;
                height: 210px;
                overflow: auto;
                margin: auto;
                color: white;
            }

            .card1 {
                width: 195px;
                height: 210px;
                overflow: auto;
                margin: auto;
                color: white;
            }

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

            /* Contact Chip */

            .chip {
            display: inline-block;
            padding: 0 25px;
            height: 50px;
            line-height: 50px;
            border-radius: 25px;
            background-color: #2C54C1;
            margin-top: 5px;
            }

            .chip img {
            float: left;
            margin: 0 10px 0 -25px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
            }

        </style>
  </head>

    <body>

        <!-- eto yung navbar -->

        <nav class="navbar navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="resident_homepage.php">Barangay Information & E-Services Management System</a>

            <div class="dropdown ml-auto">
                <button class="btn btn-primary dropdown-toggle" style="margin-right: 2px;" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
                    <span class="caret" style="margin-left: 2px;"></span>
                </button>
                <ul class="dropdown-menu" style="width: 175px;" >
                    <a class="btn" href="resident_profile.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-user"> &nbsp; </i>Personal Profile  </a>
                    <a class="btn" href="resident_changepass.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-lock" >&nbsp;</i> Change Password  </a>
                    <a class="btn" href="logout.php"> <i class="fas fa-sign-out-alt">&nbsp;</i> Logout  </a>
                </ul>
            </div>
        </nav>

        <div class="container-fluid container1"> 
            <div class="row"> 
                <div class="col"> 
                    <div class="header">
                        <h1 class="text1">Business Permit (Mayor's Permit) </h1>
                        <h5> Before you can start operating your business in the Philippines, you need to secure 
                        <br> a Mayor’s Permit or Business Permit from the Local Government Unit (LGU) where your 
                        <br> company office is located. </h5>
                    </div>

                    <br>

                    <img class="picture" src="../BarangaySystem/icons/Documents/docu1.png">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img class="picture" src="../BarangaySystem/icons/Documents/docu3.png">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img class="picture" src="../BarangaySystem/icons/Documents/docu2.png">
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1>Procedure</h1>
                    <hr style="background-color: black;">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col">
                    <i class="fas fa-id-card fa-7x"></i>

                    <br>
                    <br>

                    <h3>Step 1: Prepare</h3>
                    <p>First step is to prepare all of the information that will be needed
                    in acquiring a certificate of residency.</p>
                </div>

                <div class="col">
                    <i class="fas fa-laptop fa-7x"></i>

                    <br>
                    <br>

                    <h3>Step 2: Fill-Up</h3>
                    <p>Second step is to Fill-Up the entire form in our system.</p>
                </div>

                <div class="col">
                    <i class="fas fa-user-check fa-7x"></i>

                    <br>
                    <br>

                    <h3>Step 3: Assessment</h3>
                    <p>Third step is to verify all of the information you've been given
                    in our system that we can use to make the information of your document
                    accurately.</p>
                </div>

                <div class="col">
                    <i class="fas fa-file fa-7x"></i>

                    <br>
                    <br>

                    <h3>Step 3: Release</h3>
                    <p>Fourth step is for releasing of your Business/Mayor's Permit.</p>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col">
                    <h1>Other Details</h1>
                    <hr style="background-color: black;">
                </div>
            </div>

            <br> 

            <div class="row text2">
                <div class="col">
                    <div class="card bg-primary card1">
                        <div class="card-header">
                            <h5> Eligibility <br><br> <i class="fas fa-user-check fa-2x"></i>  </h5>
                        </div>
                        <div class="card-body">
                            <ul style="text-align: left; font-size: 16px;">
                                <p class="card-text">
                                    <li> A Philippines Resident. </li>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-primary card2">
                        <div class="card-header">
                            <h5> Validity <br><br> <i class="fas fa-clipboard-check fa-2x"></i>  </h5>
                        </div>
                        <div class="card-body">
                            <ul style="text-align: left; font-size: 16px;">
                                <p class="card-text">
                                    <li> Your permit is valid for 1 year. </li>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-primary card3">
                        <div class="card-header">
                            <h5> Fees <br><br> <i class="fas fa-coins fa-2x"></i>  </h5>
                        </div>
                        <div class="card-body">
                            <ul style="text-align: justify;">
                                <p class="card-text">
                                    <li> 100% Free </li>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-primary card4">
                        <div class="card-header">
                            <h5 style="font-size: 19.4px;"> Processing Time <br><br> <i class="fas fa-clock fa-2x"></i>  </h5>
                        </div>
                        <div class="card-body">
                            <ul style="text-align: justify;">
                                <p class="card-text">
                                    <li> Within Working Hours (8:00am - 5:00pm) </li>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-primary card5">
                        <div class="card-header">
                            <h6> What you need <br><br> <i class="fas fa-file fa-2x"></i>  </h6>
                        </div>
                        <div class="card-body">
                            <ul style="text-align: left; font-size: 16px;">
                                <p class="card-text">
                                    <li> DTI Business Name Certificate or SEC Registration Certificate </li>
                                    <li> Latest Community Tax Certificate (Cedula) </li>
                                    <li> Barangay Clearance </li>
                                    <li> Location Clearance </li>
                                    <li> Certificate of Occupancy </li>
                                    <li> Building Permit </li>
                                    <li> Contract of Lease or Land Title Tax Declaration (whichever is applicable) </li>
                                    <li> Picture or Sketch of the Site </li>
                                    <li>Fire Safety or Inspection Permit</li>
                                    <li> Electrical Inspection Certificate </li>
                                    <li>Sanitary Permit</li>
                                    <li> Picture or Sketch of the Site </li>
                                    <li>Public Liability Insurance</li>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <!-- Button trigger modal -->

        <div class="container">

            <h1 class="text-center">Registration</h1>
            <hr style="background-color:black;">

            <div class="col">   
                <button type="button" class="btn btn-primary applybutton" data-toggle="modal" data-target="#exampleModalCenter">
                    Request Form
                </button>
            </div>


            <!-- Modal -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Business Permit Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- Modal Body -->

                        <div class="modal-body">
                            <form method="post" class="was-validated">

                                <div class="row"> 

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last Name:</label>
                                            <input name="lname" type="text" class="form-control" value="<?= $userdetails['surname'];?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First Name:</label>
                                            <input name="fname" type="text" class="form-control" value="<?= $userdetails['firstname'];?>" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mi" class="mtop">Middle Name </label>
                                            <input name="mi" type="text" class="form-control" value="<?= $userdetails['mname'];?>"  required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="bsname">Business Name:</label>
                                            <input name="bsname" type="text" class="form-control" placeholder="Enter Business Name" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <br>

                                <h6>Business Address:</h6>

                                <hr>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> House No: </label>
                                            <input type="text" class="form-control" name="houseno"  placeholder="Enter House No." value="<?= $userdetails['houseno'];?>"  required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Street: </label>
                                            <input type="text" class="form-control" name="street"  placeholder="Enter Street" value="<?= $userdetails['street'];?>"  required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Barangay: </label>
                                            <input type="text" class="form-control" name="brgy"  placeholder="Enter Barangay" value="<?= $userdetails['brgy'];?>"  required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Municipality: </label>
                                            <input type="text" class="form-control" name="municipal" placeholder="Enter Municipality" value="<?= $userdetails['municipal'];?>"  required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="status">Business Industry:</label>
                                            <select class="form-control" name="bsindustry" id="status" placeholder="Enter Status" required>
                                            <option value="">Choose your Business Industry</option>
                                                <option value="Computer">Computer</option>
                                                <option value="Telecommunication">Telecommunication</option>
                                                <option value="Agriculture">Agriculture</option>
                                                <option value="Construction">Construction</option>
                                                <option value="Education">Education</option>
                                                <option value="Pharmaceutical">Pharmaceutical</option>
                                                <option value="Food">Food</option>
                                                <option value="HealthCare">HealthCare</option>
                                                <option value="Hospitality">Hospitality</option>
                                                <option value="Entertainment">Entertainment</option>
                                                <option value="News Media">News Media</option>
                                                <option value="Energy">Energy</option>
                                                <option value="Manufacturing">Manufacturing</option>
                                                <option value="Music">Music</option>
                                                <option value="Mining">Mining</option>
                                                <option value="WorldWide Web">WorldWide Web</option>
                                                <option value="Electronics">Electronics</option>
                                                <option value="Transport">Pharmaceutical</option>
                                                <option value="Transport">Aerospace</option>
                                            </select>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="aoe" class="mtop">Area of Establishment (SqM): </label>
                                            <input type="number" name="aoe" class="form-control" placeholder="Enter your AOE" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>

                        <!-- Modal Footer -->
            
                        <div class="modal-footer">
                            <div class="paa">
                                <input name="id_resident" type="hidden" class="form-control" value="<?= $userdetails['id_resident']?>">
                                
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                <button name ="create_bspermit" type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        </form>

        <br>
        <br>
        <br>

        <!-- Footer -->

        <footer id="footer" class="bg-primary text-white d-flex-column text-center">
            <hr class="mt-0">

            <div class="text-center">
                <h1>Services</h1>
                <ul class="list-unstyled list-inline">

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Documents">
                    <i class="fas fa-file fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Friend">
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
                            <li><a href="#">Business Permit</a></li>
                            <li><a href="#">Barangay ID</a></li>
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
                            <li><a href="#">Peace and Order</a></li>
                        </ul>
                    </div>

                    <!--/.Third column-->

                    <hr class="clearfix w-100 d-md-none mb-0">
 
                    <!--Fourth column-->

                    <div class="col-md-3 mx-auto shfooter">
                        <h5 class="my-2 font-weight-bold d-none d-md-block">Contact Us:</h5>
                        <div class="d-md-none title" data-target="#Contact-Us" data-toggle="collapse">
                        <div class="mt-3 font-weight-bold">Contact Us:
                            <div class="float-right navbar-toggler">
                            <i class="fas fa-angle-down"></i>
                            <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                        </div>
                        <ul class="list-unstyled collapse" id="Contact-Us">
                            <li>
                                <div class="chip" style="font-size:10px;">
                                    <img src="../BarangaySystem/icons/Contact/mikhos.png" alt="Person" width="96" height="96">
                                    Mikhos Dungca | 09514053044
                                </div>
                            </li>
                            <li>
                                <div class="chip" style="font-size:10px;">
                                    <img src="../BarangaySystem/icons/Contact/pj.png" alt="Person" width="96" height="96">
                                    PJ Mendros | 09179450661
                                </div>
                            </li>
                            <li>
                                <div class="chip" style="font-size:10px;">
                                    <img src="../BarangaySystem/icons/Contact/vincent.png" alt="Person" width="96" height="96">
                                    Vincent Vilfamat | 09512873394
                                </div>
                            </li>
                            <li>
                                <div class="chip" style="font-size:10px;">
                                    <img src="../BarangaySystem/icons/Contact/eugene.png" alt="Person" width="96" height="96">
                                    Joel Evangelista | 09301112368
                                </div>
                            </li>
                            <li>
                                <div class="chip" style="font-size:10px;">
                                    <img src="../BarangaySystem/icons/Contact/kyle.png" alt="Person" width="96" height="96">
                                   Kyle Pilapil | 09618853017
                                </div>
                            </li>
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
