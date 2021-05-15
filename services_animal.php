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

      .carousel-inner img 
      {
        width: 100%;
        height: 100%;
        border-radius: 10px;
      }

      .applybutton
      {
        width: 100% !important;
        height: 50px !important;
        position: relative;
        bottom: -40px;
        border-radius: 20px;
        margin-top: 30px;
      }

      .container1
      {
        background-color: blue;
        height: 342px;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
          
      }

      .container2
      {
        margin-top: 50px;
      }

      body 
      {
        background-color: #ffffff;
      }

      .text1 
      {
        text-align: justify;
        margin-top: 6.5%;
        letter-spacing: 1px;
        font-family: Arial, Helvetica, sans-serif;
      }

    </style>
  </head>
  
  <body>

    <!-- eto yung navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
      <a class="navbar-brand" href="resident_homepage.php">Barangay Sorsogon</a>

      <div class="dropdown ml-auto">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
              <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <form method="post">
                <input type="hidden" value="<?= $userdetails['surname'];?>">  
                <input type="hidden" value="<?= $userdetails['mname'];?>">
                <li><button class="btn" href="resident_profile.php"> <i class="fas fa-user"></i> Personal Profile </button></li>
            </form>
                <button class="btn" onclick="logout();"> <i class="fas fa-sign-out-alt"> </i> Logout </button>
          </ul>
      </div>
      
    </nav>

    <!-- Under Navbar -->

    <section class="heading-section"> 
      <div class="container-fluid container1 bg-primary"> 
        <div class="row"> 
          <div class="col"> 
            <div class="header">
              <h4>We take care your pets</h4> 
              <h1>Animal Registry & Welfare </h1>
                <img src="../BarangaySystem/icons/navpic.png">
            </div>
          </div>
        </div>
      </div>

      <!-- Picture Slideshow-->

      <div class="container container2">
        <div class="row">
          <div class="col">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
              </ul>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../BarangaySystem/icons/animal1.png">
                </div>
                <div class="carousel-item">
                  <img src="../BarangaySystem/icons/animal2.png">
                </div>
                <div class="carousel-item">
                  <img src="../BarangaySystem/icons/animal3.png">
                </div>
                <div class="carousel-item">
                  <img src="../BarangaySystem/icons/animal4.png">
                </div>
              </div>

                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div> 
          </div>

          <!-- Content beside Picture Slideshow -->

          <div class="col text1">
              <h1>Animal Welfare</h1>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam molestiae modi accusantium, ex mollitia dolores laudantium esse sed quis quasi! Ut perferendis inventore fuga tenetur, id porro quaerat ipsum saepe!</h5>
          </div>
        </div>
      </div>

      <!-- Button trigger modal -->

      <div class="container">
        <div class="col">   
          <button type="button" class="btn btn-primary applybutton" data-toggle="modal" data-target="#exampleModalCenter">
            Apply
          </button>
        </div>


        <!-- Modal -->

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Registration Form</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <!-- Modal Body -->

              <div class="modal-body">
                <form action="/action_page.php" class="was-validated">
                  <div class="row"> 

                    <div class="col">
                      <div class="form-group">
                        <label for="uname">Animal:</label>
                        <input type="text" class="form-control" placeholder="Enter Animal" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                      </div>

                      <div class="form-group">
                        <label for="origin">Origin:</label>
                        <input type="text" class="form-control" placeholder="Enter Origin" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>  
                      </div>

                      <div class="form-group">            
                        <label for="disease">Disease:</label>
                        <input type="text" class="form-control" placeholder="Enter Disease" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                  </div>

                    <div class="col">
                      <div class="form-group">
                        <label for="breed">Breed:</label>
                        <input type="text" class="form-control" placeholder="Enter Breed" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="form-group">
                        <label for="purpose">Purpose:</label>
                        <input type="text" class="form-control" placeholder="Enter Purpose" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="form-group">
                        <label for="vaccination">Vaccination:</label>
                        <input type="text" class="form-control" placeholder="Enter Vaccination" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                    </div>

                  </div>

                    <div class="row">

                        <div class="col">
                          <label for="Age" class="mtop">Age </label>
                          <input type="number" class="form-control" placeholder="Enter Age" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="col">
                            <label for="Sex"class="mtop">Sex</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optradio">Male
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optradio">Female
                            </label>
                          </div>    
                        </div>

                        <div class="col">
                          <div class="form-group">
                              <label for="Date"class="mtop">Date </label>
                              <input type="date" class="form-control" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                          </div>
                        </div>  
                      </div> 
                  </form>
                  
                <!-- Modal Footer -->
                  
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>  
              </div>
            </div>
          </div>
        </div>  
      </div>    
    </section>

    <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
  
  </body>
</html>
