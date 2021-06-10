<?php 
    require('classes/resident.class.php');
    $userdetails = $residentbmis->get_userdata();
    $id_resident = $_GET['id_resident'];
    $resident = $residentbmis->get_single_resident($id_resident);

    $residentbmis->profile_update();
    
?>

<!DOCTYPE html> 
<html>

    <head> 
    <title> Barangay Management System </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- responsive tags for screen compatibility -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- custom css --> 
        <link href="../BarangaySystem/customcss/pagestyle.css" rel="stylesheet" type="text/css">
        <!-- bootstrap css --> 
        <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <!-- fontawesome icons --> 
        <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>

    <body> 
        <!-- eto yung navbar -->
        <nav class="navbar navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="resident_homepage.php">Barangay Sorsogon</a>

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
        <div class="container"  style="margin-top: 4em;">
            <div class="row">
                <div class="col-12">
                    <h1 class="" style="text-align:left;">Resident Profile</h1>
                    
            <div class="row margin mtop"> 
                <div class="col-sm"> </div>
                <div class="col-12">   
                    <div class="card mbottom">
                        <div class="card-body" style="border-style: inset;">
                        <form method="post">
                            <div class="row" >
                                <div class="col-md-3"> 
                                    <h5> Name:</h5> 
                                    <h5> Email: </h5>
                                    <h5> Sex: </h5> 
                                    <h5>Status: </h5> 
                                    <h5>Age:</h5>
                                    <h5>Address:</h5>
                                    <h5>Contact:</h5>
                                </div>
                                <div class="col-md-3"> 
                                    <h5><?= $resident['lname'];?>, <?= $resident['fname'];?> <?= $resident['mi'];?></h5> 
                                    <h5> <?= $resident['email'];?> </h5>
                                    <h5> <?= $resident['sex'];?> </h5>
                                    <input style="margin-right: 70px;" class="input" type="text" name="age" value="<?= $resident['age'];?>">
                                    <input class="input" type="text" name="status" value="<?= $resident['status'];?>">
                                    <input class="input" type="text" name="address" value="<?= $resident['address'];?>">
                                    <input class="input" type="text" name="contact" value="<?= $resident['contact'];?>">
                                </div>
                                <div class="col-md-3"> 
                                    <h5 style="margin-right: 2em; display:inline-block;"> Birth Date: </h5>
                                    <h5 style="margin-right: 2em;display:inline-block;"> Birth Place: </h5> 
                                    <h5 style="margin-right: 2em;display:inline-block;"> Nationality: </h5> 
                                    <h5 style="margin-right: 2em;display:inline-block;"> Family Role: </h5> 
                                </div>
                                <div class="col-md-3"> 
                                    <h5> <?= $resident['bdate'];?> </h5>
                                    <h5> <?= $resident['bplace'];?> </h5>
                                    <h5> <?= $resident['nationality'];?> </h5> 
                                    <h5> <?= $resident['family_role'];?> </h5>
                                </div>
                            </div>               
                        </form>
                        </div>  
                        </div>
                    </div> 

                <div class="col-sm"> </div>
            </div>


          


            <div class="row" style=" margin-bottom: 5em;"> 
                <div class="col-xl-12">
                    <div class="form-inline">
                    <form method="post">

                    <br>
                            <input class="form-control" name="lname" type="hidden" value="<?= $resident['lname'];?>"/>
                            <input class="form-control" name="mi" type="hidden" value="<?= $resident['mi'];?>" />
                            <button type="submit button" class="btn btn-info"  name="search_household">View Household</button>
                            <button class="btn btn-primary" type="submit" name="profile_update"> Update </button>
                            <a href="resident_profile.php?id_resident=<?= $userdetails['id_resident'];?>"></a>
                            
                            
                        <div>
                        <br /><br />
                            <?php include'testingsearch.php'?>
                            
                        </div>
                    </form>
                    </div>                                   
                </div>
            </div>
        </div>

        
        
        </section>

 
        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
    </body>
</html>
