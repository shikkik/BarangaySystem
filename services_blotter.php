<?php 
    require('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();
    $id_resident = $_GET['id_resident'];
    $resident = $residentbmis->get_single_resident($id_resident);

    $dt = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $tm = new DateTime("now", new DateTimeZone('Asia/Manila'));
    $cdate = $dt->format('Y/m/d');
    $ctime = $tm->format('H:i');

    echo "$cdate";

    echo "<br>";
   
    echo "$ctime";

    $bmis->create_motherchild();


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

            /* Modal */

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

            /* Under Navbar */

            .container1 {
                position: relative;
                font-family: Arial;
                background-color: lightblue;
            }

            .text-block {
                position: absolute;
                bottom: 30%;
                right: 33%;
                background-color: black; 
                opacity: .7;
                color: white;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 20px;
            }

            /* Slideshow */

            * {
            box-sizing: border-box;
            }

            .picture {
            position: relative;
            left: -15px;
            width: 102.7%;
            }

            .picture1{
                height: 8%;
            }

            /* Position the image container (needed to position the left and right arrows) */
            .container2 {
            position: relative;
            }

            /* Hide the images by default */
            .mySlides {
            display: none;
            }

            /* Add a pointer when hovering over the thumbnail images */
            .cursor {
            cursor: grabbing;
            }

            /* Next & previous buttons */
            .prev,
            .next {
            cursor: pointer;
            position: absolute;
            top: 18%;
            width: auto;
            padding: 30px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
            cursor: grab;
            }

            /* Position the "next button" to the right */
            .next {
            right: 15px;
            border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 20px;
            padding: 8px 12px;
            position: absolute;
            top: 55px;
            }

            /* Container for image text */
            .caption-container {
            position: relative;
            left: -15px;
            text-align: center;
            background-color: #222;
            padding: 3px;
            color: white;
            width: 102.7%;
            font-size: 25px;
            }

            .row:after {
            content: "";
            display: table;
            clear: both;
            }

            /* Six columns side by side */
            .column {
            width: 16.66%;
            }

            /* Add a transparency effect for thumnbail images */
            .demo {
            opacity: 0.6;
            }

            .active,
            .demo:hover {
            opacity: 1;
            }


            .paa{
                margin-top: 10px;
                position: relative;
                left: -28%;
            }

            /* Card Flip */

            .container3{
                margin-top: -65%;
            }

            .flip-card {
                background-color: transparent;
                width: 300px;
                height: 300px;
                perspective: 1000px;
            }

            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                text-align: center;
                transition: transform 0.6s;
                transform-style: preserve-3d;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }

            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }

            .flip-card-front, .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .flip-card-front {
                color: white;
            }

            .flip-card-back {
                padding: 7px;
                color: white;
                transform: rotateY(180deg);
            }

            /* Footer */

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

        <!-- Eto yung navbar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="#">Barangay Sorsogon</a>

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

        <div class="container-fluid container1">
            <img src="../BarangaySystem/icons/Blotter/blotter2.png" alt="Nature" style="width:100%; height: 55%;">
            <div class="text-block text-center">
                <h1 style="font-size: 70px; letter-spacing: 5px;">Blotter</h1>
                <br>
                <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae nobis 
                <br> ad aut eum id sed beatae, nostrum, harum quasi reprehenderit deleniti 
                <br> optio molestiae cumque quidem perspiciatis nihil vitae laudantium culpa.</p>
            </div>
        </div>

        <br>
        <br>
        <br>

        <!-- Slideshow -->

        <div class="container container2">
            <h1 style="text-align:center">Blotter Reason</h1>
            <hr style="background-color: black;">

            <br> 

            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img style="width: 1140px; height:550px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter3.jpg">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img style="width: 1140px; height:550px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter4.jpg">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img style="width: 1140px; height:550px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter5.jpg">
            </div>
                
            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img style="width: 1140px; height:550px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter6.jpg">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img style="width: 1140px; height:550px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter7.jpg">
            </div>
                
            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img style="width: 1140px; height:550px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter8.jpg">
            </div>
                
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <div class="row">
                <div class="column">
                <img class="demo cursor picture1" src="../BarangaySystem/icons/Blotter/blotter3.jpg" style="width:100%" onclick="currentSlide(1)" alt="Physical Threatening">
                </div>
                <div class="column">
                <img class="demo cursor picture1" src="../BarangaySystem/icons/Blotter/blotter4.jpg" style="width:100%" onclick="currentSlide(2)" alt="Domestic Violence">
                </div>
                <div class="column">
                <img class="demo cursor picture1" src="../BarangaySystem/icons/Blotter/blotter5.jpg" style="width:100%" onclick="currentSlide(3)" alt="Aggresiveness">
                </div>
                <div class="column">
                <img class="demo cursor picture1" src="../BarangaySystem/icons/Blotter/blotter6.jpg" style="width:100%" onclick="currentSlide(4)" alt="Sexual Harassment">
                </div>
                <div class="column">
                <img class="demo cursor picture1" src="../BarangaySystem/icons/Blotter/blotter7.jpg" style="width:100%" onclick="currentSlide(5)" alt="Psychological Abuse">
                </div>    
                <div class="column">
                <img class="demo cursor picture1" src="../BarangaySystem/icons/Blotter/blotter8.jpg" style="width:100%" onclick="currentSlide(6)" alt="Emotional Abuse">
                </div>
            </div>
        </div>

        <div class="container container3">
            <h1 style="text-align:center">Blotter Reason</h1>
            <hr style="background-color: black;">

            <br> 

            <div class="row">
                <div class="col">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front bg-primary">
                                <br>
                                <br>
                                <i class="fas fa-question-circle fa-4x"></i>
                                <br>
                                <br>
                                <h2>How can I file a Barangay Blotter?</h2>
                            </div>
                            <div class="flip-card-back  bg-info">
                                <br>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Amet omnis, repellat ducimus ad reprehenderit, exercitationem 
                                    iusto itaque repudiandae quasi dolores quaerat ipsam eius. 
                                    Cupiditate ut dolor dignissimos architecto, eum necessitatibus?</h5> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front bg-primary">
                                <br>
                                <br>
                                <i class="fas fa-question-circle fa-4x"></i>
                                <br>
                                <br>
                                <h2>What is Barangay Blotter?</h2>
                            </div>
                            <div class="flip-card-back  bg-info">
                                <br>
                                <h5>The entry in the barangay blotter merely states that private complainant 
                                    was embraced ("niyakap") by the accused. This may be attributed to inaccurate 
                                    reporting or to the victim's incomplete narration of events, whether or not 
                                    intentionally done.</h5> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front bg-primary">
                                <br>
                                <br>
                                <i class="fas fa-question-circle fa-4x"></i>
                                <br>
                                <br>
                                <h3>What is the purpose of Barangay Blotter?</h3>
                            </div>
                            <div class="flip-card-back  bg-info">
                                <br>
                                <h5>A written record of arrests and other occurrences maintained 
                                    by the barangay. The report kept by the barangay when a suspect 
                                    is booked, which involves the written recording of facts about 
                                    the person's arrest and the charges against him or her.</h5> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <br>
        <br>


        <!-- Button trigger modal -->

        <div class="container container4">

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
                                <div class="row modalrow"> 

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last name:</label>
                                            <input name="lname" type="text" class="form-control" placeholder="Enter your Lastname" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="mname">Middle name:</label>
                                            <input name="mi" type="text" class="form-control" placeholder="Enter your Middlename" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">            
                                            <label for="cno">Contact Number:</label>
                                            <input name="contact" type="text" maxlength="11" class="form-control" placeholder="Enter your Contact Numebr" pattern="[0-9]{11}" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">

                                        <div class="form-group">
                                            <label for="fname">First name:</label>
                                            <input name="fname" type="text" class="form-control" placeholder="Enter your Firstname" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input name="address" type="text" class="form-control" placeholder="Enter your Address" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="age" class="mtop">Age </label>
                                            <input name="age" type="number" class="form-control" placeholder="Enter your Age" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <input type="hidden" name="remarks">
                                        <input type="hidden" name="dateapply" value="<?= $cdate?>">
                                        <input type="hidden" name="timeapply" value="<?= $ctime?>">
                                        <input name="addedby" type="hidden" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                                        <input name="id_resident" type="hidden" value="<?= $resident['id_resident']?>">
                                    </div>
                                </div>
                            
                            
                            <div class="modal-footer">
                                <div class="paa">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>  
        </div>

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
        
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
            }
        </script>

        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>

    </body>
</html>