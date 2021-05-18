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


            /* Slideshow */

            .carousel-inner img 
            {
                width: 100%;
                height: 100%;
                border-radius: 10px;
            }

            .container2{
                margin-top: 30px;
            }

            /* Modal */

            .applybutton
            {
                width: 100% !important;
                height: 50px !important;
                position: relative;
                bottom: -30px;
                border-radius: 20px;
                margin-top: 30px;
            }

            /* Under Navbar */

            .container1{
                background-color: #AED6F1;
                height: 400px;
            }
            
            .picture1{
                height: 400px;
                width: 100%;
            }

            .picture2{
                height: 400px;
                width: 100%;
            }

            .text1{
                margin-top: 60px;
            }


        </style>
    </head>

    <body>

        <!-- Eto yung navbar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="#">Barangay Sorsogon</a>

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
            <div class="row text-center row1">
                <div class="col">
                    <img class="picture1" src="../BarangaySystem/icons/MotherandChild/motherandchild1.png">
                </div>

                <div class="col text1">
                    <h2>Mother and Child Check-Up</h2>
                    <hr style="background-color:black;">
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Iste possimus veniam deleniti, aut nesciunt inventore 
                        doloremque, itaque eaque, id culpa nemo quis doloribus 
                        blanditiis excepturi laudantium porro quod aspernatur 
                        pariatur.
                    </h6>
                </div>

                <div class="col">
                    <img class="picture2" src="../BarangaySystem/icons/MotherandChild/motherandchild2.png">
                </div>
            </div>
        </div>

      <!-- Picture Slideshow-->

            <br>
            <bR>

        <div class="container container2 text-center">
            <h2>Barangay Medical Mission</h2>

            <h6> &nbsp; <i class="fas fa-user-md"></i> &nbsp; Free Check-Up &nbsp; | 
                 &nbsp; <i class="fas fa-comment-medical"></i> &nbsp; Free Health Seminar &nbsp; | 
                 &nbsp; <i class="fas fa-first-aid"></i> &nbsp; Free Consultation &nbsp; | 
                 &nbsp; <i class="fas fa-prescription-bottle"></i> &nbsp; Free Product Orientation </h6>
            
            <hr style="background-color:black;">

            <br>
            <br>

            <div class="row">
                <div class="col">
                    <div id="demo1" class="carousel slide" data-ride="carousel" style="width: 500px; height: 400px;">
                        <ul class="carousel-indicators">
                            <li data-target="#demo1" data-slide-to="0" class="active"></li>
                            <li data-target="#demo1" data-slide-to="1"></li>
                            <li data-target="#demo1" data-slide-to="2"></li>
                        </ul>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="../BarangaySystem/icons/MotherandChild/mandc1.jpg">
                            </div>
                            <div class="carousel-item">
                            <img src="../BarangaySystem/icons/MotherandChild/mandc2.jpg">
                            </div>
                            <div class="carousel-item">
                            <img src="../BarangaySystem/icons/MotherandChild/mandc3.jpg">
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo1" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div> 
                </div>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <div class="col">
                    <div id="demo2" class="carousel slide" data-ride="carousel" style="width: 500px; height: 400px;">
                        <ul class="carousel-indicators">
                            <li data-target="#demo2" data-slide-to="0" class="active"></li>
                            <li data-target="#demo2" data-slide-to="1"></li>
                            <li data-target="#demo2" data-slide-to="2"></li>
                        </ul>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="../BarangaySystem/icons/MotherandChild/mandc4.jpg">
                            </div>
                            <div class="carousel-item">
                            <img src="../BarangaySystem/icons/MotherandChild/mandc5.jpg">
                            </div>
                            <div class="carousel-item">
                            <img src="../BarangaySystem/icons/MotherandChild/mandc6.jpg">
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo2" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div> 
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
                                <div class="row modalrow"> 

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Lastname:</label>
                                            <input type="text" class="form-control" placeholder="Enter your Lastname" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="mname">Middlename:</label>
                                            <input type="text" class="form-control" placeholder="Enter your Middlename" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">            
                                            <label for="cno">Contact Number:</label>
                                            <input type="text" maxlength="11" class="form-control" placeholder="Enter your Contact Numebr" pattern="[0-9]{11}" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">

                                        <div class="form-group">
                                            <label for="fname">Firstname:</label>
                                            <input type="text" class="form-control" placeholder="Enter your Firstname" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input type="text" class="form-control" placeholder="Enter your Address" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="age" class="mtop">Age </label>
                                            <input type="number" class="form-control" placeholder="Enter your Age" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            
                            <!-- Modal Footer -->
                            
                            <div class="modal-footer paa">
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