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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
      <!-- responsive tags for screen compatibility -->
      <meta name="viewport" content="width=device-width, initial-scale=1"><!-- bootstrap css --> 
      <link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
      <!-- fontawesome icons --> 
      <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
  
    <style>
body{
    background-color: #FBFCFC;
}
        .picture1{
            height: 550px;
            width: 900px;
            margin-top: 10px;
            margin-left: 40px;
        }

        .container1{
            margin-top: 30px;
            margin-left: 10px;
        }

        .text1{
            margin-top: 10%;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1{
            font-size: 65px;
            color: #3498DB;
        }

        p{
            color: #3498DB;
            line-height: 25px;
            letter-spacing: .5px;
        }
    </style>
  </head>

    <!-- eto yung navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
      <a class="navbar-brand" href="#">Barangay Sorsogon</a>

      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="#"> <?= $userdetails['fullname'];?>  <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
      </div>
    </nav>

    <div class="container-fluid container1">
        <div class="row">
            <div class="col text1">
                <h1>TUBERCULOSIS</h1>

                <br>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sunt quam consequuntur qui debitis nesciunt a odio. Debitis mollitia quia labore eius ut. A, nihil officiis doloremque id assumenda amet! 
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, earum nemo, error excepturi praesentium vel ipsa neque suscipit, minima saepe voluptas libero. Deserunt eos doloremque, vitae illo quae in voluptatem.</p>
            </div>
            <div class="col">
                <img class="picture1" src="../BarangaySystem/icons/TB Dots/tbdots1.jpg">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

                <div class="card" style="width: 400px; height: 400px;">
                        <img src="../BarangaySystem/icons/TB Dots/tbdots2.png">
                </div>

                <div class="card" style="width: 400px; height: 400px;">
                        <img src="../BarangaySystem/icons/TB Dots/tbdots3.png">
                </div>

                <div class="card" style="width: 400px; height: 400px;">
                        <img src="../BarangaySystem/icons/TB Dots/tbdots4.png">
                </div>

                <div class="card" style="width: 400px; height: 400px;">
                        <img src="../BarangaySystem/icons/TB Dots/tbdots5.png">
                </div>

        </div>
    </div>

</html>