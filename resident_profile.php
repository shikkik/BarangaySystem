<?php 
    require('classes/resident.class.php');

    $view = $residentbmis->view_single_resident($email);
    $userdetails = $residentbmis->get_userdata();
    
    
?>

<!DOCTYPE html> 
<html>

    <head> 
    <title> Barangay Management System </title>
        <script src="../BarangaySystem/customjs/main.js" type="text/javascript"> </script>
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="resident_homepage.php">Barangay Sorsogon</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="resident_profile.php?ID=<?php echo $profile['id_resident'];?>"> view </a>
                <a class="nav-item nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </nav>
        <div class="container"  style="margin-top: 4em;">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Resident Profile</h1>
                    

                <div class="row margin mtop"> 
                    <div class="col-sm"> </div>
                    <div class="col-12">   
                        <div class="card mbottom">
                            <div class="card-body" name>
                                <div class="row">
                                    <div class="col">

                                    <h5> Name: <?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?> <?= $userdetails['mname'];?>.</h5> 
                                    <h5> Email: <?= $userdetails['emailadd'];?> </h5>
                                    <h5> Sex: <?= $userdetails['sex'];?> </h5>
                                    <h5> Status: <?= $userdetails['status'];?> </h5>
                                    <h5> Address: <?= $userdetails['address'];?> </h5>
                                    <h5> Contact: <?= $userdetails['contact'];?> </h5>
                                    <h5> Birth Date: <?= $userdetails['bdate'];?> </h5>
                                    <h5> Birth Place: <?= $userdetails['bplace'];?> </h5>
                                    <h5> Nationality: <?= $userdetails['nationality'];?> </h5>
                                    <h5> Family Role: <?= $userdetails['family_role'];?> </h5>
                                    
                                    
                                <form method="POST" action="">
                                <div class="container">
                                <input  class="form-control" name="mname" type="" value="<?= $userdetails['mname'];?>" placeholder="Search here..." required=""/>
                                <input  class="form-control" name="surname" type="" value="<?= $userdetails['surname'];?>" placeholder="Search here..." required=""/>
                                <button type="button" class="btn btn-info" name ="search" data-toggle="collapse" data-target="#demo" >Simple collapsible</button>
                                <div id="demo" class="collapse">
                                <?php include'testingsearch.php'?>
                                </div>
                                </div>
                                </form>
                            
                                    <div class="col">
                                    
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div> 

                    <div class="col-sm"> </div>
                </div>
            </div>
        </div>

        
        
        </section>
        
        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
         
    </body>
</html>
