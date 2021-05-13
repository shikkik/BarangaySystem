<?php 
    require('classes/main.class.php');
    $userdetails = $bmis->get_userdata();
    $bmis->validate_admin();

    //print_r($userdetails);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/e4c20ed0dd.js" crossorigin="anonymous"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="dashboard.css"/>

    <title>Admin Dashboard</title>
  </head>
  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
      </nav>

      <main>
        <div class="main__container">

          <h2>Residents</h2>

          <br>

          <div class="main__cards">

            <div class="card" style="width: 400px;">
              <i class="fa fa-users fa-2x text-lightblue"aria-hidden="true">
              </i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Residents</p>
                <span class="font-bold text-title">680</span>
              </div>
            </div>

            <div class="card" style="width: 210px;">
              <i class="fa fa-male fa-2x text-red" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Male</p>
                <span class="font-bold text-title">430</span>
              </div>
            </div>

            <div class="card" style="width: 210px;">
              <i class="fa fa-female fa-2x text-yellow" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Female</p>
                <span class="font-bold text-title">250</span>
              </div>
            </div>

          </div>


          <br>
          <h2>Lists of Residents</h2>
          <br>
          <br>

         
      </main>

     

<br>


















      <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="assets/logo.jpg" alt="logo" 
              style="border-radius: 50px;
                     width: 50px;
                     height: 50px;"/>
            &nbsp;&nbsp;<h1><?= $userdetails['surname']?>, <?= $userdetails['firstname']?></h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Dashboard</a>
          </div>

          <br>

          <h2>Users Management</h2>

          <div class="sidebar__link">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <a href="admin_staff_crud.php">Barangay Staff</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-users"></i>
            <a href="admin_resident_crud.php">Residents</a>
          </div>

          <br>

          <h2>Barangay Services</h2>

          <div class="sidebar__link">
            <i class="fa fa-bullhorn"></i>
            <a href="#">Announcement</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-paw"></i>
            <a href="animal.php">Animal Registry and Welfare</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-user-shield"></i>
            <a href="#">Blotter</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-id-card"></i>
            <a href="#">TB Dots</a>
          </div>
          <div class="sidebar__link">
            <i class="fas fa-ambulance"></i>
            <a href="#">Emergency Cases</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-book"></i>
            <a href="#">Family Planning</a>
          </div>
          <div class="sidebar__link">
            <i class="fas fa-first-aid"></i>
            <a href="#">Mother and Child Check-Up</a>
          </div>
          <div class="sidebar__link">
            <i class="fas fa-baby"></i>
            <a href="#">Vaccination Program</a>
          </div>

          <br>

          <h2>Documents</h2>

          <div class="sidebar__link">
            <i class="fa fa-file-word-o"></i>
            <a href="#">Certificate of Residency</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-file-text-o"></i>
            <a href="#">Indigency</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-file-o"></i>
            <a href="#">Barangay Clearance</a>
          </div>

          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="logout.php">Log out</a>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>

  </body>
</html>
