<?php 
    require('classes/main.class.php');
    $userdetails = $bms->get_userdata();
    $bms->validate_admin();

    //print_r($userdetails);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
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

          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards">
            <div class="card" style="width: 440px;">
              <i class="fa fa-users fa-2x text-lightblue"aria-hidden="true">
              </i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Residents</p>
                <span class="font-bold text-title">578</span>
              </div>
            </div>

            <div class="card" style="width: 175px;">
              <i class="fa fa-male fa-2x text-red" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Male</p>
                <span class="font-bold text-title">2467</span>
              </div>
            </div>

            <div class="card" style="width: 175px;">
              <i class="fa fa-female fa-2x text-yellow"aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Female</p>
                <span class="font-bold text-title">340</span>
              </div>
            </div>
          </div>

          <!-- MAIN CARDS ENDS HERE -->

          <!-- CHARTS STARTS HERE -->
          
          <div class="charts">
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                  <h1>Daily Reports</h1>
                  <p>Cupertino, California, USA</p>
                </div>
                <i class="fa fa-usd" aria-hidden="true"></i>
              </div>
              <div id="apex1"></div>
            </div>

            <div class="charts__right">
              <div class="charts__right__title">
                <div>
                  <h1>Stats Reports</h1>
                  <p>Cupertino, California, USA</p>
                </div>
                <i class="fa fa-usd" aria-hidden="true"></i>
              </div>

              <div class="charts__right__cards">
                <div class="card1">
                  <h1>Income</h1>
                  <p>$75,300</p>
                </div>

                <div class="card2">
                  <h1>Sales</h1>
                  <p>$124,200</p>
                </div>

                <div class="card3">
                  <h1>Users</h1>
                  <p>3900</p>
                </div>

                <div class="card4">
                  <h1>Orders</h1>
                  <p>1881</p>
                </div>
              </div>
            </div>
          </div>
          <!-- CHARTS ENDS HERE -->
        </div>
      </main>

      <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="assets/logo.png" alt="logo" />
            <h1>Vincent Vilfamat</h1>
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
            <a href="#">Barangay Officials</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-users"></i>
            <a href="#">Residents</a>
          </div>

          <br>

          <h2>Barangay Services</h2>

          <div class="sidebar__link">
            <i class="fa fa-bullhorn"></i>
            <a href="#">Announcement</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-paw"></i>
            <a href="#">Animal Registry and Welfare</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-calendar-check-o"></i>
            <a href="#">Blotter</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-id-card"></i>
            <a href="#">TB Dots</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-exclamation"></i>
            <a href="#">Emergency Cases</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-book"></i>
            <a href="#">Family Planning</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-user-md"></i>
            <a href="#">Mother and Child Check-Up</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-child"></i>
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
            <a href="#">Log out</a>
          </div>
        </div>
      </div>
    </div>
    
    <?php 
      print_r($userdetails);
    ?>

    <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>

  </body>
</html>
