<?php 
    error_reporting(E_ALL ^ E_WARNING);
    require('classes/main.class.php');
    $userdetails = $bmis->get_userdata();
    $bmis->validate_admin();
    $bmis->create_medicine();
    $view = $bmis->view_medicine();
    $bmis->update_medicine();
    $bmis->delete_medicine();
    //$staffcount = $staffbmis->count_med();

    

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
        <h2>Medicine Inventory</h2>
        <br>
            
        <div class="main__cards">
            <div class="card" style="width: 580px; height: 300px;">
                <h3> Add/Update Medicine Items</h3> 
                <div class="card_inner">
                <form method="post">
                <label class="mtop"> Medicine Item</label>
                <input type="text" class="form-control" name="item"  placeholder="Enter medicine item">

                <label class="mtop" >Date Manufactured </label>
                <input type="date" class="form-control" name="dateman"  placeholder="Enter date manufactured">

                <br>
                <br>

                <label class="mtop"> Shipped From </label>
                <input type="text" class="form-control" name="origin" placeholder="Enter shipment address">

                <label class="mtop">Date In </label>
                <input type="date" class="form-control" name="datein">

                <br>
                <br>

                <label class="mtop">Date Out</label>
                <input type="date" class="form-control" name="dateout">

                <label class="mtop">Stocks </label>
                <input type="text" class="form-control" name="stocks" placeholder="Enter stocks">

                <br>
                <br>

                <label class="mtop">Remarks </label>
                <input type="text" class="form-control" name="remarks"  placeholder="Enter remarks">
    
                <input type="hidden" class="form-control" name="addedby" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                <br>
                <br>

                <button class="btn btn-primary" type="submit" name="create_medicine"> Add </button>
                <button class="btn btn-primary" type="submit" name="update_medicine"> Commit Update </button>
                </form>
                </div>
            </div>

            <div class="card" style="width: 300px;">
              <i class="fa fa-users fa-2x text-lightblue"aria-hidden="true">
              </i>
              <div class="card_inner">
                <p class="text-primary-p">Types of Medicine Available </p>
                <span class="font-bold text-title"><?= $staffcount?></span>
              </div>
            </div>

          </div>

          <br>

          <br>
          <h2>Medicine Inventory Table</h2>
          <br>
          <br>

          <table class="table table-dark">
            <form action="" method="post">
                <thead> 
                    <tr>
                        <th> Actions </th>
                        <th> ID </th>
                        <th> Medicine Item </th>
                        <th> Date Manufactured </th>
                        <th> Shipped From </th>
                        <th> Date In </th>
                        <th> Date Out </th>
                        <th> Stocks </th>
                        <th> Remarks </th>
                        <th> AddedBy </th>
                        
                    </tr>
                </thead>
                <tbody> 
                <?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
                        <tr>
                            <td>    
                            <form action="" method="post">
                                <a href="admin_medicine_crud.php?id_medicine=<?= $view['id_medicine'];?>" class="btn btn-primary"> Update </a>
                                <input type="hidden" name="id_medicine" value="<?= $view['id_medicine'];?>">
                                <button class="btn btn-danger" type="submit" name="delete_medicine"> Delete </button>
                            </form>
                            </td>
                            <td> <?= $view['id_medicine'];?> </td>
                            <td> <?= $view['item'];?> </td>
                            <td> <?= $view['dateman'];?> </td>
                            <td> <?= $view['origin'];?> </td>
                            <td> <?= $view['datein'];?> </td>
                            <td> <?= $view['dateout'];?> </td>
                            <td> <?= $view['stocks'];?> </td>
                            <td> <?= $view['remarks'];?> </td>
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
