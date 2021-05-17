<?php 
    require('classes/resident.class.php');

    //$view = $residentbmis->view_single_resident($email);
    $userdetails = $residentbmis->get_userdata();
    
  
    
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="text-center"> Change Password </h3>
                                        <form method="post">
                                        <input type="hidden" name="email" value="<?= $userdetails['emailadd'];?>">

                                        <label> Current Password </label>
                                        <input class="form-control" type="password" name="password" placeholder="Current Passsword" require>
                                        <label> New Password </label>
                                        <input class="form-control" type="password" name="newpassword" placeholder="New Passsword" require>
                                        <label> Verify Password </label>
                                        <input class="form-control" type="password" name="checkpassword" placeholder="Verify Passsword" require>

                                        <br>

                                        <button class="btn btn-primary" type="submit" name="change_pass"> Change Password </button>
                                        </form>
                                    </div>  
                                </div>   
                            </div>
                        </div>
                    </div> 

                    <div class="col-sm"> 
                
                    </div>
                </div>
            </div>
        </div>

        
        
        </section>

        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
         
    </body>
</html>
