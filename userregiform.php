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
            <a class="navbar-brand" href="index.php"> <img src="../BarangaySystem/icons/logo.png" width="70px" height="70px">&nbsp; 
            <span style="font-size: 1em;"> Barangay Sorsogon </span> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"> <a href=""> </a> </li>
              </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <h1 class="text-center topm">Registration Form</h1>

                <div class="row margin"> 
                    <div class="col-sm-3">
                    </div>
                    <div class="col-6">   
                    <div class="card">
                            <div class="card-body">
                                <div class="row">
                                        <div class="col">
                                            <label for="Email">Email </label>
                                            <input type="email" class="form-control" id="email"  placeholder="Enter email">
                                            <label for="FirstName " class="mtop">First Name </label>
                                            <input type="text" class="form-control" id="fname"  placeholder="Enter First Name">
                                            <label for="Birthday"class="mtop">Birth Day </label>
                                            <input type="date" class="form-control" id="birthday"  placeholder="Enter Birth Day">
                                            <label for="phone"class="mtop">Contact Number</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Contact Number">
                                        </div>



                                        <div class="col">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="pass" placeholder="Password">
                                            <label for="lastname"class="mtop"> Last Name</label>
                                            <input type="email" class="form-control" id="lname"  placeholder="Enter Last Name">
                                            <label for="birthplace"class="mtop">Birth Place </label>
                                            <input type="text" class="form-control" id="birthplace"  placeholder="Enter Birth Place">
                                            <label for="nationality"class="mtop">Nationality </label>
                                            <input type="text" class="form-control" id="nationality"  placeholder="Enter Nationality">
                                        </div>

                                </div>

                                <div class="row">
                                    <div class="col">
                                    <label for="Address"class="mtop">Address </label>
                                    <input type="text" class="form-control" id="address"  placeholder="Enter Address">
                                    </div>
                                </div>

                                <div class="row">
                                        <div class="col">
                                            <label for="Age" class="mtop">Age </label>
                                            <input type="number" class="form-control" id="age" placeholder="Age">
                                            
         
                                        </div>
                                        <div class="col">
                                        <label for="exampleFormControlSelect1"class="mtop">Gender</label>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" >
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"  checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                            </div>
                                            
                                        </div>
                                        <div class="col">
                                            <label for="status"class="mtop">Status </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Status">
                                            
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                                </div>
                            <div class="col-sm-3">   
                         </div>
                    </div>    
                </div>
            </div> 
        </div>
    </body>