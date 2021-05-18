<?php 
    require('classes/resident.class.php');
    $userdetails = $residentbmis->get_userdata();
    $id_resident = $_GET['id_resident'];
    $resident = $residentbmis->get_single_resident($id_resident);
    $residentbmis->profile_update();
    

    //$view = $residentbmis->view_household_list();

    print_r($resident);

    //$lname = $_GET['lname'];
    //$lname = $_GET['mi'];

    //$connection = $residentbmis->openConn();
    //$stmt = $connection->prepare("SELECT * FROM tbl_resident WHERE lname ='$lname'");
    //$stmt->execute();  
   // $view = $stmt->fetch();
?>

<!DOCTYPE html> 
<html>

    <head> 
    <title> Barangay Management System </title>
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="resident_homepage.php">Barangay Sorsogon</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="dropdown ml-auto">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <button class="btn" onclick="profile();"> <i class="fas fa-user" style="padding: 0.5em;"></i>Personal Profile  </button>
                    <button class="btn" onclick="logout();"> <i class="fas fa-sign-out-alt" style="padding: 0.5em;"></i> Logout  </button>
                </ul>
            </div>
        </nav>
        <div class="container"  style="margin-top: 4em;">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Resident Profile</h1>
                    <hr>

        
            <div class="row margin mtop"> 
                <div class="col-sm"> </div>
                <div class="col-12">   
                    <div class="card mbottom">
                        <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col">
                                
                                    <div class="row">
                                    <h5> Name: <?= $resident['lname'];?>, <?= $resident['fname'];?> <?= $resident['mi'];?></h5> 
                                    </div>
                                    <div class="row">
                                        <h5> Email: <?= $resident['email'];?> </h5>
                                    </div>

                                    <div class="row">
                                        <h5> Sex: <?= $resident['sex'];?> </h5>
                                    </div>
                                    
                                    <div class="row">
                                    <h5>Age:</h5>
                                    <input type="text" name="address" value="<?= $resident['age'];?>">
                                    </div>

                                    <div class="row">
                                    <h5>Status:</h5>
                                    <input type="text" name="address" value="<?= $resident['status'];?>">
                                    </div>
                                    
                                    <div class="row">
                                    <h5>Address:</h5>
                                    <input type="text" name="address" value="<?= $resident['address'];?>">
                                    </div>

                                    <div class="row">
                                    <h5>Contact:</h5>
                                    <input type="text" name="address" value="<?= $resident['contact'];?>">
                                    </div>
                                    
                                    <div class="row">
                                    <h5> Birth Date: <?= $resident['bdate'];?> </h5>
                                    </div>

                                    <div class="row">
                                    <h5> Birth Place: <?= $resident['bplace'];?> </h5>
                                    </div>

                                    <div class="row">
                                    <h5> Nationality: <?= $resident['nationality'];?> </h5>
                                    </div>

                                    <div class="row">
                                    <h5> Family Role: <?= $resident['family_role'];?> </h5>
                                    </div>
                                </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="profile_update"> Update </button>
                        </form>
                                <div class="col"></div>
                            </div>  
                        </div>
                    </div> 

                <div class="col-sm"> </div>
            </div>

            <div class="row" style="margin-top: 3em; margin-bottom: 5em; margin-left:22%;"> 
                <div class="col-xl-12">
                    <div class="form-inline">
                    <form method="post">
                            <input class="form-control" name="lname" type="hidden" value="<?= $resident['lname'];?>"/>
                            <input class="form-control" name="mi" type="hidden" value="<?= $resident['mi'];?>" />
                            <button type="submit button" class="btn btn-info"  name="search_household">View Household</button>
                            
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

        <?php 
           print_r($userdetails);
        ?>

         
    </body>
</html>
