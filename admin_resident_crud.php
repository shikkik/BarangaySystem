<?php 
    error_reporting(E_ALL ^ E_WARNING);
    require('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();
    $bmis->validate_admin();
    $view = $residentbmis->view_resident();
    $residentbmis->create_resident();
    $residentbmis->update_resident();
    $residentbmis->delete_resident();
    $rescount = $residentbmis->count_resident();
    $rescountm = $residentbmis->count_male_resident();
    $rescountf = $residentbmis->count_female_resident();
    $rescountfh = $residentbmis->count_head_resident();
    $rescountfm = $residentbmis->count_member_resident();

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
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
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
                <span class="font-bold text-title"><?= $rescount?></span>
              </div>
            </div>

            <div class="card" style="width: 210px;">
              <i class="fa fa-male fa-2x text-red" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Male</p>
                <span class="font-bold text-title"><?= $rescountm?></span>
              </div>
            </div>

            <div class="card" style="width: 210px;">
              <i class="fa fa-female fa-2x text-yellow" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Female</p>
                <span class="font-bold text-title"><?= $rescountf?></span>
              </div>
            </div>

          </div>

          <br>

          <div class="main__cards"> 
          <div class="card" style="width: 400px;">
              <i class="fa fa-users fa-2x text-lightblue"aria-hidden="true">
              </i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Household Heads</p>
                <span class="font-bold text-title"><?= $rescountfh?></span>
              </div>
            </div>

            <div class="card" style="width: 400px;">
              <i class="fa fa-users fa-2x text-lightblue"aria-hidden="true">
              </i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Household Family Members</p>
                <span class="font-bold text-title"><?= $rescountfm?></span>
              </div>
            </div>
          </div>


          <br>
          <h2>Lists of Residents</h2>
          <br>
          <br>

          <table class="table table-dark">
                    <form action="" method="post">
                        <thead> 
                            <tr>
                                <th> Actions</th>
                                <th> Email </th>
                                <th> Password </th>
                                <th> Surname </th>
                                <th> First name </th>
                                <th> MI </th>
                                <th> Age </th>
                                <th> Sex </th>
                                <th> Status </th>
                                <th> Address </th>
                                <th> Contact </th>
                                <th> Bdate </th>
                                <th> Bplace </th>
                                <th> Nationality </th>
                                <th> Family Role </th>
                                <th> Role </th>
                                <th> AddedBy </th>
                            </tr>
                        </thead>
                        <tbody> 
                        <?php if(is_array($view)) {?>
                            <?php foreach($view as $view) {?>
                            <tr>
                                <td>    
                                <form action="" method="post">
                                    <a href="resident_crud.php?email=<?= $view['email'];?>" class="btn btn-primary">  Update </a>
                                    <input type="hidden" name="email" value="<?= $view['email'];?>">
                                    <button class="btn btn-danger" type="submit" name="delete_resident"> Delete </button>
                                    </form>
                                </td>
                                <td> <?= $view['email'];?> </td>
                                <td> <?= $view['password'];?> </td>
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
                                <td> <?= $view['role'];?> </td>
                                <td> <?= $view['addedby'];?> </td>
                            </tr>
                            <?php }?>
                        <?php } ?>
                        </tbody>
                    </form>
                    </table>
         
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
            <a href="admin_dashboard.php">Dashboard</a>
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
            <a href="admin_announcement_crud.php">Announcement</a>
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
