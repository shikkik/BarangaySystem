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

        <div class="container">
            <div class="row">
                <div class="col-12">
                <h1 class="text-center topm">Registration Form</h1>

                <div class="row margin"> 
                    <div class="col-sm-3">
                    </div>
                    <div class="col-6">   
                    <div class="card">
                            <div class="card-body">
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> 6666ab97e4cc8f678cfa28f9b13dd61fc337b524
                                <form method="post">
                                    <!-- eto email tsaka password -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="FormControlEmail">Email</label>
                                                <input type="email" class="form-control" id="FormControlEmail" placeholder="name@example.com">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="FormControlPassword">Password</label>
                                                <input type="password" class="form-control" id="FormControlPassword" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- eto first name last name -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="FormControlName">First Name</label>
                                                <input type="text" class="form-control" id="FormControlName" placeholder="Enter your name">
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="FormControlName">Last Name</label>
                                                <input type="text" class="form-control" id="FormControlName" placeholder="Enter your name">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- eto age sex status -->
                                    <div class="row"> 
                                        <div class="col"> 
                                            <div class="form-group">
                                                <label for="FormControlSelectAge">Age</label>
                                                <select class="form-control" id="FormControlSelectAge">
                                                <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="FormControlSex">Sex</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" value="male" checked>
                                                    <label class="form-check-label" for="exampleRadios1">Male</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" value="female" checked>
                                                    <label class="form-check-label" for="exampleRadios1">Female</label>
                                                </div>
                                            </div>
                                        </div>  
                                        
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="FormControlSelectStatus">Status</label>
                                                <select class="form-control" id="FormControlSelectStatus">
                                                <option>Single</option><option>In a relationship</option><option>Engaged</option><option>Married</option><option>Windowed</option><option>Divorced</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- eto address -->
                                    <div class="row"> 
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="FormControlAddress">Address</label>
                                                <input type="text" class="form-control" id="FormControlAddress" placeholder="Enter your address">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- eto yung tatlong column -->
                                    <div class="row">       
                                        <div class="col">
                                            
                                            <div class="form-group">
                                                <label for="FormControlContactNo">Contact No.</label>
                                                <input type="text" class="form-control" id="FormControlContactNo">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="FormControlBirthDate">BirthDate</label>
                                                <input type="date" class="form-control" id="FormControlBirthDate">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="FormControlBirthPlace">BirthPlace</label>
                                                <select class="form-control" id="FormControlSelectStatus">
                                                    <option>Manila</option><option>Quezon City</option>
                                                    <option>Makati</option><option>Caloocan</option>
                                                    <option>Novaliches</option><option>Mandaluyong</option>
                                                </select>
>>>>>>> f6304910bfab8edb1e784f662244322c8f767568
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"  checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                            </div>
                                            
                                        </div>
<<<<<<< HEAD
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
=======
                                    </div>
                                    <button class="btn btn-primary" type="submit" name="Submit"> Submit </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </body>
</html>
>>>>>>> f6304910bfab8edb1e784f662244322c8f767568
