<?php 
    error_reporting(E_ALL ^ E_WARNING);
    
    if(!isset($_SESSION)) {
        $showdate = date("Y-m-d");
        date_default_timezone_set('Asia/Manila');
        $showtime = date("h:i:a");
        $_SESSION['storedate'] = $showdate;
        $_SESSION['storetime'] = $showdate;
        session_start();
    }

    //include('autoloader.php');
    require('classes/main.class.php');
    $bmis->login();

   
    

    
    

?>

<!DOCTYPE html> 
<html> 
    <head> 
        <title> Barangay Management System </title>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <!-- custom css --> 
        <link href="../BarangaySystem/css/index.css" rel="stylesheet" type="text/css">
        <!-- bootstrap css -->
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
        <!-- fontawesome icons --> 
        <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
        <!-- fontawesome icons --> 
        <script src="../BarangaySystem/customjs/main.js" type="text/javascript"></script>

        <style> 
            body {
                background-color: #00405B !important;
            }
        </style>
    </head>



    <body>


        <!-- This is the heading and card section --> 
        <section class="main-section"> 
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm"></div>
                    <div class="col-sm main-heading text-center text-white" > 
                        <h3> Barangay Beverly Hills Services Management System</h3>
                        <p1> Designed for accessibility, now available in your barangay. </p1>
                    </div>
                <div class="col-sm"></div>
            </div>
                <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm"> 
                    <div class="card main-card mtop"> 
                        <div class="card-body"> 
                            <form method="post"> 
                                <label> Email </label>
                                
                                <br>

                                <input type="email" class="form-control" name="email" placeholder="E-mail" required> 
                                
                                <br>

                                <label> Password </label>
                                
                                <br>

                                <input type="password" class="form-control" id="myInput" name="password" placeholder="Password" required>
                                
                                <br>

                                <div class="custom-control custom-switch">
                                    <input type="checkbox" onclick="myFunction()" class="custom-control-input" id="switch1">
                                    <label class="custom-control-label" for="switch1">Show Password</label>
                                </div>

                                <br>
                                
                                <button class="btn btn-primary login-button" type="submit" name="login"> Log-in </button>
                            </form>
                            <hr>
                            <div class="registration-section"> 
                            <p1> <strong> Haven't registered yet? </strong> </p1> 
                            <br>
                            <p1> Hindi ka pa rehistrado? </p1> 
                            <br>
                            <button class="btn btn-success create-button" onclick="trying();"> Create Account </button> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm"></div>
                </div>
                          
        </div>

        </section>

        <script>
            function myFunction() {
                var x = document.getElementById("myInput");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                }
            }

            function trying() {
                window.location.href = "resident_registration.php";
            }
        </script>

    </body>
</html>