<?php 
    error_reporting(E_ALL ^ E_WARNING);
    require('classes/staff.class.php');
    $userdetails = $bmis->get_userdata();
    $bmis->validate_admin();
    $bmis->create_announcement();
    $view = $bmis->view_announcement();
    $bmis->update_announcement();
    $bmis->delete_announcement();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
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
        <h2>Announcement Management </h2>
        <div class="main__cards">
            <div class="card" style="width: 670px; height: 340px;">
                <h3> Create Announcement </h3> 
                <div class="card_inner">
                <form method="post">
                <br>
                <textarea name="event" rows="14" cols="45">Enter text here...</textarea>
                <label> Date Start </label>
                <input type="date" name="start_date">

                <label> Date End </label>
                <input type="date" name="end_date">
                <input type="hidden" name="addedby" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>"> 
                <br>
                <br>
                <button class="btn btn-primary" type="submit" name="create_announce"> Create </button>
                <button class="btn btn-primary" type="submit" name="update_announce"> Commit Update </button>
                </form>
                </div>
            </div>

            <div class="card" style="width: 300px;">
              <i class="fa fa-users fa-2x text-lightblue"aria-hidden="true">
              </i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Staff</p>
                <span class="font-bold text-title"><?= $staffcount?></span>
              </div>
            </div>

           

          </div>

          <br>


          <br>
          <h2>Lists of Events/Announcements</h2>
          <br>
          <br>

          <table class="table table-dark">
            <form action="" method="post">
                <thead> 
                    <tr>
                        <th> Actions </th>
                        <th> ID </th>
                        <th> Announcement </th>
                        <th> Start Date </th>
                        <th> End Date </th>
                        <th> Added By </th>        
                    </tr>
                </thead>
                <tbody> 
                <?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
                        <tr>
                            <td>    
                            <form action="" method="post">
                                <a href="admin_announcement_crud.php?id_announcement=<?= $view['id_announcement'];?>" class="btn btn-primary"> Update </a>
                                <input type="hidden" name="id_announcement" value="<?= $view['id_announcement'];?>">
                                <button class="btn btn-danger" type="submit" name="delete_announcement"> Delete </button>
                            </form>
                            </td>
                            <td> <?= $view['id_announcement'];?> </td>
                            <td> <?= $view['event'];?> </td>
                            <td> <?= $view['start_date'];?> </td>
                            <td> <?= $view['end_date'];?> </td>
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

    <?php 
        print_r($upstaff);
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>

  </body>
</html>
