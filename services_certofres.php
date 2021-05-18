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
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            }

            .card4 {
                width: 195px;
                height: 210px;
                overflow: hidden;
                margin: auto;
            }

            .card3 {
                width: 195px;
                height: 210px;
                overflow: hidden;
                margin: auto;
            }

            .card2 {
                width: 195px;
                height: 210px;
                overflow: auto;
                margin: auto;
            }

            .card1 {
                width: 195px;
                height: 210px;
                overflow: auto;
                margin: auto;
            }

        </style>
  </head>

    <body>

        <!-- eto yung navbar -->

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

        <div class="container-fluid container1"> 
            <div class="row"> 
                <div class="col"> 
                    <div class="header">
                        <h1 class="text1">Certificate Of Residency </h1>
                        <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus animi  
                        <br> voluptatum hic, mollitia, dignissimos itaque placeat illum vero id officia adipisci 
                        <br> modi ut, laboriosam optio omnis eligendi totam reiciendis labore! </h5>
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
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    <br> Inventore tenetur fugiat repudiandae sit minus</p>
                </div>
                <div class="col">
                    <i class="fas fa-laptop fa-7x"></i>

                    <br>
                    <br>

                    <h3>Step 2: Apply</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    <br> Inventore tenetur fugiat repudiandae sit minus</p>
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
                    <div class="card bg-info card1">
                        <div class="card-header">
                            <h5> Eligibility <br><br> <i class="fas fa-user-check fa-2x"></i>  </h5>
                        </div>
                        <div class="card-body">
                            <ul style="text-align: left; font-size: 16px;">
                                <p class="card-text">
                                    <li> A Philippines Resident. </li>
                                    <li> Have been living for six months or more in a barangay. </li>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-info card2">
                        <div class="card-header">
                            <h5> Validity <br><br> <i class="fas fa-clipboard-check fa-2x"></i>  </h5>
                        </div>
                        <div class="card-body">
                            <ul style="text-align: left; font-size: 16px;">
                                <p class="card-text">
                                    <li> Valid for Six (6) Months. Not valid without Barangay dry seal </li>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-info card3">
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
                    <div class="card bg-info card4">
                        <div class="card-header">
                            <h5 style="font-size: 19.4px;"> Processing Time <br><br> <i class="fas fa-clock fa-2x"></i>  </h5>
                        </div>
                        <div class="card-body">
                            <ul style="text-align: justify;">
                                <p class="card-text">
                                    <li> 3-4 Days </li>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-info card5">
                        <div class="card-header">
                            <h6> Need for the Document<br><br> <i class="fas fa-file fa-2x"></i>  </h6>
                        </div>
                        <div class="card-body">
                            <ul style="text-align: left; font-size: 16px;">
                                <p class="card-text">
                                    <li> Job/Employment </li>
                                    <li> Open a Bank Account </li>
                                    <li> Business Establishment </li>
                                    <li> Financial Transaction such as lending, loan or financing. </li>
                                    <li> Certify that you are living or residing in a certain barangay </li>
                                    <li> Other important transactions. </li>
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

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Registration Form</h1>
                    <hr style="background-color: black;">
                </div>
            </div>

            <br>

            <div class="row margin mtop"> 
                <div class="col-sm"> </div>

                <div class="col-sm-8"> 
                    <div class="card mbottom">
                        <div class="card-body">
                            <form method="post" action="/action_page.php" class="was-validated">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="mtop"> Last Name:</label>
                                            <input type="text" class="form-control" name="lname"  placeholder="Enter your Lastname" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label class="mtop" >First Name: </label>
                                            <input type="text" class="form-control" name="fname"  placeholder="Enter your Firstname" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"> 
                                            <label class="mtop"> Middle Name: </label>
                                            <input type="text" class="form-control" name="mname" placeholder="Enter your Middlename" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row"> 
                                    <div class="col"> 
                                        <div class="form-group">
                                            <label class="mtop"> Address: </label>
                                            <input type="text" class="form-control" name="address" placeholder="Enter your Address" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>
                            
                                <br>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Age" class="mtop">Age: </label>
                                            <input type="number" class="form-control" placeholder="Enter your Age" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="status">Status:</label>
                                        <select class="form-control select" name="status" id="status" placeholder="Enter your Status" required="required">
                                            <option value="">Choose your Status</option>
                                            <option value="status1">Single</option>
                                            <option value="status2">In a relationship</option>
                                            <option value="status3">Engaged</option>
                                            <option value="status4">Married</option>
                                            <option value="status5">Widowed</option>
                                            <option value="status6">Divorced</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nationality" class="mtop">Nationality: </label>
                                            <input type="text" class="form-control" placeholder="Enter your Nationality" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                <div class="row mtop"> 
                                    <div class="col">   
                                        <button class="btn btn-primary" 
                                                style="width: 40%; 
                                                       border-radius: 5px;
                                                       margin-left: 30%;
                                                       margin-top: 50px;
                                                       font-size: 25px;" 
                                                type="button"
                                                data-toggle="modal" 
                                                data-target="#exampleModalCenter"> 
                                            Submit 
                                        </button>
                                    </div>
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Registration Form</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
