<?php 
    require('classes/resident.class.php');

    //$view = $residentbmis->view_single_resident($email);
    $userdetails = $residentbmis->get_userdata();
    $view = $residentbmis->view_household_list();

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
                </div>
            </div>

            <div class="row margin mtop"> 
                <div class="col-sm"> </div>
                <div class="col-12">   
                    <div class="card mbottom">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5> Name <?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?> <?= $userdetails['mname'];?>.</h5> 
                                    <h5> Email <?= $userdetails['emailadd'];?> </h5>
                                    <h5> Sex <?= $userdetails['sex'];?> </h5>
                                    <h5> Status <?= $userdetails['status'];?> </h5>
                                    <h5> Address <?= $userdetails['address'];?> </h5>
                                    <h5> Contact <?= $userdetails['contact'];?> </h5>
                                    <h5> Birth Date <?= $userdetails['bdate'];?> </h5>
                                    <h5> Birth Place <?= $userdetails['bplace'];?> </h5>
                                    <h5> Nationality <?= $userdetails['nationality'];?> </h5>
                                    <h5> Family Role <?= $userdetails['family_role'];?> </h5>
                                </div>

                                <div class="col"></div>
                            </div>  
                        </div>
                    </div>
                </div> 

                <div class="col-sm"> </div>
            </div>

            <br>


            <table class="table table-dark">
            <form method="post">
                <thead> 
                    <tr>
                        <th> Surname </th>
                        <th> First name </th>
                        <th> Middle Name </th>
                        <th> Age </th>
                        <th> Sex </th>
                        <th> Status </th>
                        <th> Address </th>
                        <th> Contact </th>
                        <th> Bdate </th>
                        <th> Bplace </th>
                        <th> Nationality </th>
                        <th> Family Role </th>
                        <th> Actions </th>
                    </tr>
                    </thead>
                    <tbody> 
                    <?php if(is_array($view)) {?>
                        <?php foreach($view as $view) {?>
                    <tr>
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['sex'];?> </td>
                        <td> <?= $view['status'];?> </td>
                        <td> <?= $view['address'];?> </td>
                        <td> <?= $view['contact'];?> </td>
                        <td> <?= $view['bdate'];?> </td>
                        <td> <?= $view['bplace'];?> </td>
                        <td> <?= $view['nationality'];?> </td>
                        <td> <?= $view['family_role'];?> </td>
                        <td>    
                        <form method="post">
                            <a href="" class="btn btn-primary">  Update </a>
                            <button class="btn btn-danger" type="submit" name="delete_resident"> Remove </button>
                        </form>
                        </td>
                    </tr>
                        <?php }?>
                    <?php } ?>
                </tbody>
            </form>
            </table>
        </div>

        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
        
    </body>
</html>
