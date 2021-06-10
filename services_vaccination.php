<?php 
    require('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();
    $id_resident = $_GET['id_resident'];
    $resident = $residentbmis->get_single_resident($id_resident);
    
    $dt = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $tm = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $cdate = $dt->format('Y/m/d');
    $ctime = $tm->format('H');

    $bmis->create_vaccine();
?>

<!DOCTYPE html>

<html>
    <head> 
        <title> Barangay Management System </title>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- bootstrap css --> 
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <!-- fontawesome icons --> 
        <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
    
        <style>

            body{
                background-color: #EBF5FB;
            }

            .text1{
                margin-top: 60px;
            }

            .applybutton{
                width: 100% !important;
                height: 50px !important;
                border-radius: 20px;
                margin-top: 5%;
                margin-bottom: 8%;
                font-size: 25px;
                letter-spacing: 3px;
            }

            .besidetable{
                background-color: lightblue;
                margin-top: 5px;

            }

            .righttable{
                border: 1px solid black;
            }

            .paa{
                margin-top: 10px;
                position: relative;
                left: -28%;
            }

            .container1{
                background-color: #AED6F1;
                height: 400px;
            }
            
            .picture1{
                height: 400px;
                width: 100%;
            }

            .picture2{
                height: 380px;
                width: 100%;
                margin-top: 5px;
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

        </style>
    </head>

    <body>

        <!-- eto yung navbar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <a class="navbar-brand" href="index.php"> <img src="../BarangaySystem/icons/beverlylogo.png" width="40px" height="40px">&nbsp; 
        <a class="navbar-brand" href="resident_homepage.php">Barangay Beverly Hills</a>

            <div class="dropdown ml-auto">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <a class="btn" href="resident_profile.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-user" style="padding: 0.5em;"></i>Personal Profile  </a>
                    <a class="btn" href="logout.php"> <i class="fas fa-sign-out-alt" style="padding: 0.5em;"></i> Logout  </a>
                </ul>
            </div>
        </nav>

        <!-- Under Navbar -->

        <div class="container-fluid container1">
            <div class="row text-center">
                <div class="col">
                    <img class="picture1" src="../BarangaySystem/icons/Vaccination/vaccination3.png">
                </div>

                <div class="col text1">
                    <h1>Vaccination</h1>
                    <hr style="background-color:black;">
                    <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque vitae doloribus 
                        natus ex laborum eligendi ut pariatur, odio rem corrupti asperiores delectus optio.
                    </h6>
                </div>

                <div class="col">
                    <img class="picture2" src="../BarangaySystem/icons/Vaccination/vaccination2.png">
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="container">
            <div class="row title-spacing">
                <div class="col"> 
                    <h2 class="text-center"> 
                        Schedule ng Pagbibigay ng Bakuna
                    </h2>
                    <h2 class="text-center"> 
                        para sa mga Batang Isang Taon Pababa
                    </h2>
                </div> 
            </div>

            <hr style="background-color: black;">

            <br>
            <br>

            <div class="row">
                <div class="col-sm-10 righttable">
                    <table class="table table-hover maintable" style="width: 100%; height: 100%;">

                        <thead class="text-center" style="color: black">
                            <tr style="margin-bottom: 10px;">
                                <th rowspan="3">
                                    BAKUNA
                                </th>
                                <th rowspan="3">
                                    SAKIT NA MAIIWASAN
                                </th>
                            </tr>
                                <tr>
                                    <th colspan="6">
                                        NIREREKOMENDANG EDAD NG BATA
                                    </th>
                                    <tr>
                                        <th>
                                            PAGKA-PANGANAK
                                        </th>
                                        <th> 1 &half; <br>
                                            BUWAN
                                        </th>
                                        <th> 2 &half; <br>
                                            BUWAN
                                        </th>
                                        <th>3 &half; <br>
                                            BUWAN
                                        </th>
                                        <th> 9 <br>
                                            BUWAN
                                        </th>
                                        <th>1 <br>
                                            TAON
                                        </th>
                                    </tr>
                                </tr>
                        </thead>

                        <tbody class="text-center">
                        <tr>
                            <td>BCG</td>
                            <td>Tuberkulosis</td>
                            <td><i class="fas fa-check"></i></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>HEPATITIS B</td>
                            <td>Hepatitis B</td>
                            <td><i class="fas fa-check"></i></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>PENTAVALENT VACCINE</td>
                            <td style="font-size: 12px;">Dipterya, Tetano, Hepa B, Pertussis, Pulmonya, Meningitis</td>
                            <td></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>ORAL POLIO VACCINE</td>
                            <td>Polio</td>
                            <td></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>INACTIVATED POLIO VACCINE</td>
                            <td>Polio</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><i class="fas fa-check"></i></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>PNEUMOCOCCAL CONJUGATE VACCINE</td>
                            <td>Pulmonya, Meningitis</td>
                            <td></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>MEASLES, MUMPS, RUBELLA</td>
                            <td>Tigdas, Beke, German Measles</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        </tbody>
                    </table>
                </div>


                <div class="col text-center besidetable hover" style="height:100%; width:100%; margin-left: 10px;">
                    <h2>MGA PAALALA</h2>

                    <hr style="background-color: red;">

                    <p style="font-size: 15px;">Nagsisimula ang pagbabakuna ng bata sa kapanganakan.</p>

                    <hr style="background-color: red;">

                    <p style="font-size: 15px;">Sundin ang schedule ng bakuna at siguruhing makumpleto 
                       ang mga ito hanggang sumapit ang kanyang unang kaarawan.</p>

                    <hr style="background-color: red;">

                    <p style="font-size: 15px;">Ang mga bakunang hindi nakalista ay maaring makuha 
                       sa pribadong ospital o doktor.</p>
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
                                            <label for="cname">Child's Name:</label>
                                            <input name="child" type="text" class="form-control" placeholder="Enter Child's Name" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input name="address" value="<?= $resident['address']?>" type="text" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="Age" class="mtop">Age </label>
                                        <input name="age" type="number" class="form-control" placeholder="Enter Age" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col">
                                            <label for="Sex"class="mtop">Sex</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input name="sex" value="Male" type="radio" class="form-check-input" name="optradio">Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input name="sex" type="radio" value="Female" class="form-check-input" name="optradio">Female
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="date"class="mtop">Birthday: </label>
                                            <input name="bdate" type="date" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="height">Height:</label>
                                            <input name="height" type="text" class="form-control" placeholder="Enter Height" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="weight">Weight:</label>
                                            <input name="weight" type="text" class="form-control" placeholder="Enter Weight" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>   
                                    </div> 
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="bplace">Birthplace:</label>
                                            <input name="bplace" type="text" class="form-control" placeholder="Enter Birthplace" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>  
                                </div>

                                <br>

                                <h6>Parent's Info</h6>

                                <hr>

                                <div class="row"> 
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Lastname:</label>
                                            <input name="lname" value="<?= $resident['lname']?>" type="text" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">Firstname:</label>
                                            <input name="fname" value="<?= $resident['fname']?>" type="text" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mname">Middlename:</label>
                                            <input name="mi" value="<?= $resident['mi']?>" type="text" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row"> 
                                    <div class="col">
                                        <label for="vaccine">Vaccine:</label>
                                        <select class="form-control" name="vaccine" id="vaccine" placeholder="Enter your Vaccine" required>
                                        <option value="">Choose your Vaccine</option>
                                        <option value="BCG">BCG</option>
                                        <option value="Hepatitis B">Hepatitis B</option>
                                        <option value="Pentavalent Vaccine">Pentavalent Vaccine</option>
                                        <option value="Oral Polio Vaccine">Oral Polio Vaccine</option>
                                        <option value="Inactivated Polio Vaccine">Inactivated Polio Vaccine</option>
                                        <option value="Pneumococcal Conjugate Vaccine">Pneumococcal Conjugate Vaccine</option>
                                        <option value="Measles, Mumps, Rubella">Measles, Mumps, Rubella</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="date"class="mtop">Date of Vaccine: </label>
                                            <input name="vaccdate" value="<?= $cdate?>" type="date" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>
                                
                            
                            
                            <!-- Modal Footer -->
                            
                            <div class="modal-footer">
                                <div class="paa">
                                    <input name="addedby" type="hidden" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                                    <input name="id_resident" type="hidden" value="<?= $resident['id_resident']?>">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                    <button name="create_vaccine" type="submit" class="btn btn-primary">Save changes</button>
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