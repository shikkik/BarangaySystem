<?php 
    require('classes/resident.class.php');

    $view = $residentbmis->view_single_resident($email);
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
                                            <form method="POST" action="">
                                            <div class="form-inline">
                                                <input type="search" class="form-control" name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>" placeholder="Search here..." required=""/>
                                                <button class="btn btn-success" name="search">Search</button>
                                                <a href="resident_profile.php" class="btn btn-info">Reload</a>
                                                </div>
                                                </form>
                                                <br /><br />
                                                <?php include'testingsearch.php'?>
                                            </div>
                                         </div>
                            
                                

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

         
    </body>
</html>
