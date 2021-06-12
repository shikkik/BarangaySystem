<?php 
    require('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();

    $id_resident = $_GET['id_resident'];
    $resident = $residentbmis->get_single_resident($id_resident);

    $dt = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $tm = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $cdate = $dt->format('Y/m/d');
    $ctime = $tm->format('H');

    if (isset($_POST['create_animal'])) {
      $bmis->create_animal();
    }
    


    
    
    
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
        border-radius: 20px;
        margin-top: 5%;
        margin-bottom: 8%;
        font-size: 25px;
        letter-spacing: 3px;
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
        margin-top: 10%;
        letter-spacing: 1px;
        font-family: Arial, Helvetica, sans-serif;

      }

      .paa{
        margin-top: 10px;
        position: relative;
        left: -28%;
      }

      a{
      color:white;
      }
      .shfooter .collapse {
          display: inherit;
      }
          @media (max-width:767px) {
      .shfooter ul {
              margin-bottom: 0;
      }

      .shfooter .collapse {
              display: none;
      }

      .shfooter .collapse.show {
              display: block;
      }

      .shfooter .title .fa-angle-up,
      .shfooter .title[aria-expanded=true] .fa-angle-down {
              display: none;
      }

      .shfooter .title[aria-expanded=true] .fa-angle-up {
              display: block;
      }

      .shfooter .navbar-toggler {
              display: inline-block;
              padding: 0;
      }

      }

      .resize {
          text-align: center;
      }
      .resize {
          margin-top: 3rem;
          font-size: 1.25rem;
      }
      /*RESIZESCREEN ANIMATION*/
      .fa-angle-double-right {
          animation: rightanime 1s linear infinite;
      }

      .fa-angle-double-left {
          animation: leftanime 1s linear infinite;
      }
      @keyframes rightanime {
          50% {
              transform: translateX(10px);
              opacity: 0.5;
      }
          100% {
              transform: translateX(10px);
              opacity: 0;
      }
      }
      @keyframes leftanime {
          50% {
              transform: translateX(-10px);
              opacity: 0.5;
      }
          100% {
              transform: translateX(-10px);
              opacity: 0;
      }
      }

    </style>
  </head>
  
  <body>

    <!-- eto yung navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <a class="navbar-brand" href="index.php"> <img src="../BarangaySystem/icons/beverlylogo.png" width="40px" height="40px">&nbsp; 
    <a class="navbar-brand" href="resident_homepage.php">Barangay Beverly Hills</a>

      <div class="dropdown ml-auto">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <a class="btn" href="resident_profile.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-user" style="padding: 0.5em;"></i>Personal Profile  </a>
                    <a class="btn" href="logout.php"> <i class="fas fa-sign-out-alt" style="padding: 0.5em;"></i> Logout  </a>
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
                <img src="../BarangaySystem/icons/Animal/navpic.png">
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
                  <img src="../BarangaySystem/icons/Animal/animal1.png">
                </div>
                <div class="carousel-item">
                  <img src="../BarangaySystem/icons/Animal/animal2.png">
                </div>
                <div class="carousel-item">
                  <img src="../BarangaySystem/icons/Animal/animal3.png">
                </div>
                <div class="carousel-item">
                  <img src="../BarangaySystem/icons/Animal/animal4.png">
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

              <br>

              <h5>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam 
                molestiae modi accusantium, ex mollitia dolores laudantium esse sed 
                quis quasi! Ut perferendis inventore fuga tenetur, id porro quaerat 
                ipsum saepe!
              </h5>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>

      <!-- Button trigger modal -->

      <div class="container">

        <h1 class="text-center">Registration</h1>
            
        <hr style="background-color:black;">

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
                <form method="post" class="was-validated">
                  <div class="row"> 

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="uname">Animal:</label>
                          <input name="pettype" type="text" class="form-control" placeholder="Enter Animal" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">
                        <label for="Age" class="mtop">Age </label>
                      <input name="age" type="number" class="form-control" placeholder="Enter Pets Age" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">            
                        <label for="Sex"class="mtop">Sex</label>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="sex" value="Male" type="radio" class="form-check-input" name="optradio">Male
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="sex" value="Female" type="radio" class="form-check-input" name="optradio">Female
                        </label>
                      </div>    
                        </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="breed">Breed:</label>
                        <input name="breed" type="text" class="form-control" placeholder="Enter Breed" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="form-group">
                        <label for="purpose">Purpose:</label>
                        <input name="purpose" type="text" class="form-control" placeholder="Enter Purpose" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                        <label for="vaccine">Vaccine:</label>
                        <select class="form-control" name="vaccination" id="vaccine" placeholder="Enter your Vaccine" required>
                          <option value="">Choose your Vaccine</option>
                          <option value="Parvovirus">Parvovirus (Dogs)</option>
                          <option value="Distemper">Distemper (Dogs)</option>
                          <option value="Parainfluenza">Parainfluenza (Dogs)</option>
                          <option value="Hepatitis">Hepatitis (Dogs)</option>
                          <option value="Leptospirosis">Leptospirosis (Dogs)</option>
                          <option value="Anti-Rabies">Anti-Rabies (Dogs)</option>
                          <option value="FVRCP">FVRCP (Cats)</option>
                          <option value="FeLV">FeLV (Cats)</option>
                          <option value="Anti-Rabies">Anti-Rabies (Cats)</option>
                          <option value="Bordetella">Bordetella (Cats)</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  </div>
                
                  
                  
                <!-- Modal Footer -->
                  
                <div class="modal-footer">
                  <div class="paa">
                    <input name="id_resident" type="hidden" class="form-control" value="<?= $resident['id_resident']?>">
                    <input name="contact" type="hidden" class="form-control" value="<?= $resident['contact']?>">
                    <input name="address" type="hidden" class="form-control" value="<?= $resident['address']?>">
                    <input name="owner" type="hidden" class="form-control" value="<?= $userdetails['surname']?> <?= $userdetails['firstname']?> <?= $userdetails['mname']?>">
                    <input name="dateapply" type="hidden" class="form-control" value="<?= $cdate?>">
                    <input name="addedby" type="hidden" class="form-control" value="<?= $userdetails['surname']?> <?= $userdetails['firstname']?> <?= $userdetails['mname']?>">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    <button name ="create_animal" type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div> 
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </section>

        <!-- Footer -->

        <footer id="footer" class="bg-primary text-white d-flex-column text-center">
            <hr class="mt-0">

            <div class="text-center">
                <h1>Services</h1>
                <ul class="list-unstyled list-inline">

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="HealthCare">
                    <i class="fas fa-first-aid fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Documents">
                    <i class="fas fa-file fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Documents">
                    <i class="fas fa-user-friends fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Blotter">
                    <i class="fas fa-user-shield fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Inquiries">
                    <i class="fas fa-question fa-2x"></i>
                    </a>
                </li>
                </ul>
            </div>

            <hr class="mb-0">

            <!--Footer Links-->

            <div class="container text-left text-md-center">
                <div class="row">

                    <!--First column-->

                    <div class="col-md-3 mx-auto shfooter">
                        <h5 class="my-2 font-weight-bold d-none d-md-block">HealthCare</h5>
                        <div class="d-md-none title" data-target="#HealthCare" data-toggle="collapse">
                            <div class="mt-3 font-weight-bold">HealthCare
                                <div class="float-right navbar-toggler">
                                    <i class="fas fa-angle-down"></i>
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled collapse" id="HealthCare">
                            <li><a href="#">Animal Registry & Welfare</a></li>
                            <li><a href="#">TB Dots Consultation</a></li>
                            <li><a href="#">Vaccination Programs</a></li>
                            <li><a href="#">Mother & Child Check-Up</a></li>
                        </ul>
                    </div>

                    <!--/.First column-->

                    <hr class="clearfix w-100 d-md-none mb-0">

                    <!--Second column-->

                    <div class="col-md-3 mx-auto shfooter">
                        <h5 class="my-2 font-weight-bold d-none d-md-block">Documentation</h5>
                        <div class="d-md-none title" data-target="#Documentation" data-toggle="collapse">
                            <div class="mt-3 font-weight-bold">Documentation
                                <div class="float-right navbar-toggler">
                                    <i class="fas fa-angle-down"></i>
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled collapse" id="Documentation">
                            <li><a href="#">Certificate of Residency</a></li>
                            <li><a href="#">Barangay Clearance</a></li>
                            <li><a href="#">Certificate of Indigency</a></li>
                        </ul>
                    </div>

                    <!--/.Second column-->

                    <hr class="clearfix w-100 d-md-none mb-0">

                    <!--Third column-->

                    <div class="col-md-3 mx-auto shfooter">
                        <h5 class="my-2 font-weight-bold d-none d-md-block">Other Services</h5>
                        <div class="d-md-none title" data-target="#OtherServices" data-toggle="collapse">
                            <div class="mt-3 font-weight-bold">Other Services
                                <div class="float-right navbar-toggler">
                                    <i class="fas fa-angle-down"></i>
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </div>
                        </div>

                        <ul class="list-unstyled collapse" id="OtherServices">
                            <li><a href="#">Family Planning</a></li>
                            <li><a href="#">Blotter</a></li>
                        </ul>
                    </div>

                    <!--/.Third column-->

                    <hr class="clearfix w-100 d-md-none mb-0">
 
                    <!--Fourth column-->

                    <div class="col-md-3 mx-auto shfooter">
                        <h5 class="my-2 font-weight-bold d-none d-md-block">Get Help</h5>
                        <div class="d-md-none title" data-target="#Get-Help" data-toggle="collapse">
                        <div class="mt-3 font-weight-bold">Get Help
                            <div class="float-right navbar-toggler">
                            <i class="fas fa-angle-down"></i>
                            <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                        </div>
                        <ul class="list-unstyled collapse" id="Get-Help">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms</a></li>
                        </ul>
                    </div>

                    <!--/.Fourth column-->

                </div>
            </div>

            <!--/.Footer Links-->

            <hr class="mb-0">

            <!--Copyright-->

            <div class="py-3 text-center">
                Copyright 2020 -
                <script>
                document.write(new Date().getFullYear())
                </script> 
                SAD/DBA | For Educational Purposes Only
            </div>

        </footer>

    <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
  
  </body>
</html>
