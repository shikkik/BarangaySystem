<?php 
    require('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();
    $id_resident = $_GET['id_resident'];
    $resident = $residentbmis->get_single_resident($id_resident);

    $dt = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $tm = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $cdate = $dt->format('Y/m/d');
    $ctime = $tm->format('H');

    if(isset($_POST['create_familyplan'])) {
        if(($ctime >= 10) && ($ctime <= 20)) {
            $bmis->create_familyplan();
        }
    
        else {
            $message2 = "Sorry, Barangay consultations are available from 10:00 AM to 8:00 PM only";
            echo "<script type='text/javascript'>alert('$message2');</script>";
            header('refresh:0');
        }
    }
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

            /* Modal */

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

            /* Under Navbar */

            .container1{
                background-color: #AED6F1;
                height: 400px;
            }

            .picture0{
                height: 80px;
                width: 80px;
            }
            
            .picture1{
                height: 400px;
                width: 100%;
            }

            .picture2{
                height: 400px;
                width: 100%;
            }

            /* 1st Content */

            .container2{
                margin-top: 10px;
            }

            .picture3{
                height: 900px;
                width: 100%;
                border-radius: 20px;
            }

            .picture4{
                height: 440px;
                width: 100%;
                border-radius: 20px;
            }

            .picture5{
                height: 440px;
                width: 100%;
                border-radius: 20px;
                margin-top: 20px;
            }

            .text1{
                margin-top: 30px;
            }

            /* 2nd Content */

            .container3{
                margin-top: 50px;
            }

            .picture6{
                width: 100%;
                height: 400px;
                border-radius: 20px;
            }

            .picture7{
                width: 100%;
                height: 400px;
                border-radius: 20px;
                border: solid black;
            }

            * {box-sizing: border-box;}

            .overlay {
            position: absolute; 
            bottom: 160px; 
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); /* Black see-through */
            color: #f1f1f1; 
            width: 94%;
            transition: .5s ease;
            opacity:0;
            color: white;
            font-size: 20px;
            padding: 20px;
            text-align: center;
            }

            .col7:hover .overlay {
            opacity: 1;
            }

            .col6:hover .overlay {
            opacity: 1;
            }

            .overlay1 {
            position: absolute; 
            bottom: 160px; 
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); /* Black see-through */
            color: #f1f1f1; 
            width: 95%;
            transition: .5s ease;
            opacity:0;
            color: white;
            font-size: 20px;
            padding: 20px;
            text-align: center;
            }

            .col5:hover .overlay {
            opacity: 1;
            }

            .col5:hover .overlay1 {
            opacity: 1;
            bottom: 640px;
            }

            .col3:hover .overlay1 {
            opacity: 1;
            bottom: 400px;
            }

            /* Modal Footer */

            .paa{
                margin-top: 10px;
                position: relative;
                left: -28%;
            }

            /* Footer Style */

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
    </head>

    <body>

        <!-- Eto yung navbar -->

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

        <!-- Under Navbar -->

        <div class="container-fluid container1">
            <div class="row text-center">
                <div class="col">
                    <img class="picture1" src="../BarangaySystem/icons/FamilyPlanning/family4.png">
                </div>

                <div class="col text1">
                    <img class="picture0" src="../BarangaySystem/icons/FamilyPlanning/family0.png">
                    <h2>Family Planning</h2>
                    <hr style="background-color:black;">
                    <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus ut molestiae 
                        officiis atque distinctio incidunt doloremque!
                    </h6>
                </div>

                <div class="col">
                    <img class="picture2" src="../BarangaySystem/icons/FamilyPlanning/family5.png">
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <!-- 1st Info -->

        <div class="container container2">

            <h1 class="text-center">Things you need to know</h1>
            
            <hr style="background-color:black;">

            <br>

            <div class="row">
                <div class="col col3">
                    <img class="picture3" src="../BarangaySystem/icons/FamilyPlanning/family1.jpg">
                    <div class="overlay1">Family PLanning Tips</div>
                </div>
                <div class="col col5">
                        <img class="picture4" src="../BarangaySystem/icons/FamilyPlanning/family2.jpg">
                        <div class="overlay1">Family Planning and Counseling</div>
                        <img class="picture5" src="../BarangaySystem/icons/FamilyPlanning/family3.jpg">
                        <div class="overlay">Safe and Effective</div>
                </div>
            </div>
        </div>

        <!-- 2nd Info -->

        <div class="container container3">

            <br>

            <div class="row">
                <div class="col col6">

                    <h1 class="text-center">Contraceptives</h1>
                    <hr style="background-color:black;">

                    <img class="picture6" src="../BarangaySystem/icons/FamilyPlanning/family6.png">
                    <div class="overlay">Contraceptives Methods</div>
                </div>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <div class="col col7">

                    <h1 class="text-center">Fertility Calendar Guide</h1>
                    <hr style="background-color:black;">

                    <img class="picture7" src="../BarangaySystem/icons/FamilyPlanning/family7.jpg">
                    <div class="overlay">Calendar Guide</div>
                </div>
            </div>
        </div>


        <!-- Button trigger modal -->

        <br>
        <br>
        <br>

        <div class="container">

            <h1 class="text-center">Registration</h1>
            
            <hr style="background-color:black;">

            <div class="col">   
                <button type="button" class="btn btn-primary applybutton button" data-toggle="modal" data-target="#exampleModalCenter">
                    Apply
                </button>
            </div>


            <!-- Modal -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Registration Form</h5>
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
                                            <input name="lname" type="text" class="form-control" value="<?= $resident['lname']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="mname">Middle Name:</label>
                                            <input name="mi" type="text" class="form-control" value="<?= $resident['mi']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">            
                                            <label for="cno">Contact Number:</label>
                                            <input name="contact" type="text" maxlength="11" class="form-control" value="<?= $resident['contact']?>" pattern="[0-9]{11}" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First Name:</label>
                                            <input name="fname" type="text" class="form-control" value="<?= $resident['fname']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input name="address" type="text" class="form-control" value="<?= $resident['address']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="occupation">Occupation:</label>
                                            <input name="occupation" type="text" class="form-control" placeholder="Enter your Occupation" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-4">
                                        <label for="Age" class="mtop">Age: </label>
                                        <input name="age" type="number" placeholder="Enter your Age" class="form-control" value="<?= $resident['age']?>" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="status">Status:</label>
                                        <select class="form-control select" name="status" id="status" placeholder="Enter your Status" required="required">
                                            <option value="">Choose your Status</option>
                                            <option value="Single">Single</option>
                                            <option value="In a relationship">In a relationship</option>
                                            <option value="Engaged">Engaged</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="Date"class="mtop">Birthday: </label>
                                            <input name="bdate" type="date" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>  

                                </div> 

                                <br>

                                <h6>Spouse Info</h6>

                                <hr>

                                <div class="row"> 

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last Name:</label>
                                            <input name="sp_lname" type="text" class="form-control" placeholder="Enter your Last Name" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="mname">Middle Name:</label>
                                            <input name="sp_mi" type="text" class="form-control" placeholder="Enter your Middle Name" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First Name:</label>
                                            <input name="sp_fname" type="text" class="form-control" placeholder="Enter your First Name" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">
                                            <label for="occupation">Occupation:</label>
                                            <input name="sp_occupation" type="text" class="form-control" placeholder="Enter your Occupation" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row"> 

                                    <div class="col">
                                        <label for="children">Children:</label>
                                            <select class="form-control select" name="children" id="children" required="required">
                                                <option value="">How many children </option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">Custom</option>
                                            </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col">
                                        <label for="income">Total Income:</label>
                                            <select class="form-control select" name="income" id="income" required="required">
                                                <option value="">Enter your Income </option>
                                                <option value="5000">5,000</option>
                                                <option value="10000">10,000</option>
                                                <option value="20000">20,000</option>
                                                <option value="30000">30,000</option>
                                                <option value="40000">40,000</option>
                                                <option value="50000">50,000</option>
                                                <option value="60000">Custom</option>
                                            </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                </div>

                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label for="Age" class="mtop">Age </label>
                                        <input name="sp_age" type="number" class="form-control" placeholder="Enter your Age" value="<?= $resident['age']?>" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Date"class="mtop">Birthday </label>
                                            <input name="sp_bdate" type="date" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>  
                                </div> 
                            
                            <!-- Modal Footer -->
                            
                            <div class="modal-footer">
                                <div class="paa">
                                        <input type="hidden" name="dateapply" value="<?= $cdate?>">
                                        <input name="addedby" type="hidden" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                                        <input name="id_resident" type="hidden" value="<?= $resident['id_resident']?>">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button name="create_familyplan" type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </form>  
                        </div>
                    </div>
                </div>
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