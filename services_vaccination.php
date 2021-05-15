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
                background-color: #EBF5FB;
            }

            .picture1{
                height: 550px;
                width: 880px;
                margin-top: 10px;
                margin-left: 50px;
                border-radius: 20px;
            }

            .container1{
                margin-top: 30px;
            }

            .text1{
                margin-top: 8%;
                font-family: Arial, Helvetica, sans-serif;
                text-align: left;
            }

            h1{
                font-size: 65px;
                color: black;
                margin-top: 8%;
                font-family: Arial, Helvetica, sans-serif;
                text-align: left;
                line-height: 23px;
                margin-left: 10px;
            }

            p{
                color: black;
                line-height: 22px;
                margin-left: 10px;
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

        <!-- Under Navbar -->

        <div class="container-fluid container1">
            <div class="row">
                <div class="col-sm-4 text1">
                    <h1>VACCINATION</h1>
                    <h1>PROGRAM</h1>

                    <br>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sunt quam consequuntur qui debitis nesciunt a odio. Debitis mollitia quia labore eius ut. A, nihil officiis doloremque id assumenda amet! 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, earum nemo, error excepturi praesentium vel ipsa neque suscipit, minima saepe voluptas libero. Deserunt eos doloremque, vitae illo quae in voluptatem.</p>
                </div>
                <div class="col-sm-8">
                    <img class="picture1" src="../BarangaySystem/icons/Vaccination/vaccination1.jpg">
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

            <br>
            <br>
            <div class="row">
                <div class="col-sm-10">
                    <table class="table table-hover" style="width: 100%; height: 100%;">

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

                <div class="col-sm-2 text-center" style="height:100%; width:100%;">
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