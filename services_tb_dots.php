<?php 
    require('classes/main.class.php');
    require('classes/resident.class.php');
    
    $userdetails = $bmis->get_userdata();
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
            body{
                background-color: #FBFCFC;
            }

            .picture1{
                height: 550px;
                width: 900px;
                margin-top: 10px;
                margin-left: 40px;
            }

            .container1{
                margin-top: 30px;
            }

            .container2{
                margin-top: 5%;
            }

            .text1{
                margin-top: 8%;
                font-family: Arial, Helvetica, sans-serif;
                text-align: left;
            }

            h1{
                font-size: 65px;
                color: #3498DB;
            }

            p{
                color: #3498DB;
                line-height: 25px;
                letter-spacing: .5px;
                margin-left: 15px;
            }

            .applybutton
            {
                width: 100% !important;
                height: 50px !important;
                position: relative;
                bottom: -30px;
                border-radius: 20px;
                margin-top: 30px;
            }

        </style>
    </head>

    <body>

        <!-- eto yung navbar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="resident_homepage.php">Barangay Sorsogon</a>

            <div class="dropdown ml-auto">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <form method="post">
                    <input type="hidden" value="<?= $userdetails['surname'];?>">  
                    <input type="hidden" value="<?= $userdetails['mname'];?>">
                    <li><button class="btn" href="resident_profile.php"> <i class="fas fa-user"></i> Personal Profile </button></li>
                </form>
                    <button class="btn" onclick="logout();"> <i class="fas fa-sign-out-alt"> </i> Logout </button>
                
                </ul>
            </div>

        </nav>

        <div class="container-fluid container1">
            <div class="row">
                <div class="col-sm-4 text1">
                    <h1>TUBERCULOSIS</h1>

                    <br>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sunt quam consequuntur qui debitis nesciunt a odio. Debitis mollitia quia labore eius ut. A, nihil officiis doloremque id assumenda amet! 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, earum nemo, error excepturi praesentium vel ipsa neque suscipit, minima saepe voluptas libero. Deserunt eos doloremque, vitae illo quae in voluptatem.</p>
                </div>
                <div class="col-sm-8">
                    <img class="picture1" src="../BarangaySystem/icons/TB Dots/tbdots1.jpg">
                </div>
            </div>
        </div>


        <div class="container container2">

            <div class="row title-spacing">
                <div class="col"> 
                    <h2 class="text-center"> Mga 
                        <span style="color: red;"> sintomas </span> sakit na 
                        <span style="color: red;"> Tuberculosis </span>
                    </h2>
                </div> 
            </div>

            <br>

            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center text-center">

                        <div class="col-sm-3"> 
                                <img style="width: 250px; height: 250px;" src="../BarangaySystem/icons/TB Dots/tbdots2.png">
                                <h3>Ubo</h3>
                        </div>

                        <div class="col-sm-3"> 
                                <img style="width: 250px; height: 250px;" src="../BarangaySystem/icons/TB Dots/tbdots3.png">
                                <h3>Pagbaba ng Timbang</h3>
                        </div>

                        <div class="col-sm-3"> 
                                <img style="width: 250px; height: 250px;" src="../BarangaySystem/icons/TB Dots/tbdots4.png">
                                <h3>Lagnat</h3>
                        </div>

                        <div class="col-sm-3"> 
                                <img style="width: 250px; height: 250px;" src="../BarangaySystem/icons/TB Dots/tbdots5.png">
                                <h3>Labis na Pagpapawis</h3>
                        </div>  
                        
                    </div>
                </div>
            </div>

            <br>

            <div class="row text-center">
                <div class="col">
                    <h4> <span style="color: red;"> Alinman </span> sa mga sintomas na tumagal ng 
                         <span style="color: red;"> 2 linggo o higit pa </span> 
                    </h4>
                    <h4>Makipag ugnayan na at kumonsulta!</h4>
                </div>
            </div>

        </div>

            <!-- Button trigger modal -->

        <div class="container">
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
                            <form action="/action_page.php" class="was-validated">
                                <div class="row"> 

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="uname">Animal:</label>
                                            <input type="text" class="form-control" placeholder="Enter Animal" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="origin">Origin:</label>
                                            <input type="text" class="form-control" placeholder="Enter Origin" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">            
                                            <label for="disease">Disease:</label>
                                            <input type="text" class="form-control" placeholder="Enter Disease" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="breed">Breed:</label>
                                            <input type="text" class="form-control" placeholder="Enter Breed" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="purpose">Purpose:</label>
                                            <input type="text" class="form-control" placeholder="Enter Purpose" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="vaccination">Vaccination:</label>
                                            <input type="text" class="form-control" placeholder="Enter Vaccination" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col">
                                        <label for="Age" class="mtop">Age </label>
                                        <input type="number" class="form-control" placeholder="Enter Age" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="col">
                                            <label for="Sex"class="mtop">Sex</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Female
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Date"class="mtop">Date </label>
                                            <input type="date" class="form-control" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>  
                                </div> 
                            </form>
                            
                            <!-- Modal Footer -->
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>  
        </div>

        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
  
        
    </body>
</html>