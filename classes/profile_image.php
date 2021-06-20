<?php 
    error_reporting(E_ALL ^ E_WARNING);
    require('classes/resident.class.php');
    ini_set('display_errors',0);
    $userdetails = $residentbmis->get_userdata();
    $id_resident = $_GET['id_resident'];
    $resident = $residentbmis->get_single_resident($id_resident);

    $residentbmis->profile_update();
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Barangay Information & Management System </title>
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
    </head>

    <body>
        <form method="POST" enctype="multipart/form"> 
        <table>
            <thead> 

            </thead>
            <?php

                $connection = $residentbmis->openConn();
                $stmt = $connection->prepare("SELECT * FROM tbl_resident WHERE id_resident = ?");
            
            
            ?>

            <tbody>
                <td> </td>
            </tbody>
        </table>
        </form>
        
    </body>
</html>