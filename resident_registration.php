<?php 
     require('classes/resident.class.php');
    $residentbmis->create_resident();
     //$data = $bms->get_userdata();

     
?>

<!DOCTYPE html> 
<html> 
    <head> 
        <title> Barangay Management System </title>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <!-- custom css --> 
        <link href="../BarangaySystem/customcss/regiformstyle.css" rel="stylesheet" type="text/css">
        <!-- bootstrap css --> 
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
        <!-- fontawesome icons -->
        <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
    </head>

    <body >
        <!-- eto yung navbar -->
        <nav class="navbar sticky-top navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php"> <img src="../BarangaySystem/icons/logo.png" width="40px" height="40px">&nbsp; 
            <span style="font-size: 1em;"> Barangay Sorsogon </span> </a>
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
                    <div class="card mbottom">
                        <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col">
                                    <label class="mtop"> Last Name</label>
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
                                    <label class="mtop"> Status </label>
                                    <input type="text" class="form-control" name="status"  placeholder="Enter status">  
                                </div>
                            </div>
                         
                            <div class="row">
                                <div class="col">
                                    <label class="mtop">Email </label>
                                    <input type="email" class="form-control" name="email"  placeholder="Enter email">
                                    <label class="mtop">Birth Date </label>
                                    <input type="date" class="form-control" name="bdate">
                                    <label class="mtop">Contact Number</label>
                                    <input type="tel" class="form-control" name="contact" placeholder="Enter contact number">
                                </div>

                                <div class="col">
                                    <label class="mtop">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                    <label class="mtop">Birth Place </label>
                                    <input type="text" class="form-control" name="bplace"  placeholder="Enter birth place">
                                    <label class="mtop">Nationality </label>
                                    <input type="text" class="form-control" name="nationality"  placeholder="Enter nationality">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label class="mtop"> Address </label>
                                    <input type="text" class="form-control" name="address"  placeholder="Enter Address">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label class="mtop">Age </label>
                                    <input type="number" class="form-control" name="age" placeholder="Age">
                                </div>

                                <div class="col rb">
                                    <label class="mtop">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex">
                                        <label class="form-check-label">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex">
                                        <label class="form-check-label" for="flexRadioDefault2">Female</label>
                                    </div>
                                </div>       
                            </div>

                            <div class="row mtop"> 
                                <div class="col">   
                                    <button class="btn btn-primary" type="submit" name="add_resident"> Submit </button>
                                </div>

                                <div class="col"> 
                                   
                                    <input type="hidden" class="form-control" name="role" value="resident">
                                
                                </div>
                            </div>
                        </form>
                        </div>
                    </div> 
                </div>
                <div class="col-sm"> </div>
            </div>
        </div>
    </body>
</html>

