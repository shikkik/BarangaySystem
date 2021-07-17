<?php 
    require('classes/resident.class.php');
    $userdetails = $bmis->get_userdata();
    $id_resident = $_GET['id_resident'];
    $resident = $residentbmis->get_single_resident($id_resident);

    $bmis->create_blotter();



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

            /* Back-to-Top */

            .top-link {
            transition: all 0.25s ease-in-out;
            position: fixed;
            bottom: 0;
            right: 0;
            display: inline-flex;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            margin: 0 3em 3em 0;
            border-radius: 50%;
            padding: 0.25em;
            width: 80px;
            height: 80px;
            background-color: #3661D5;
            }
            .top-link.show {
            visibility: visible;
            opacity: 1;
            }
            .top-link.hide {
            visibility: hidden;
            opacity: 0;
            }
            .top-link svg {
            fill: white;
            width: 24px;
            height: 12px;
            }
            .top-link:hover {
            background-color: #3498DB;
            }
            .top-link:hover svg {
            fill: #000000;
            }

            .screen-reader-text {
            position: absolute;
            clip-path: inset(50%);
            margin: -1px;
            border: 0;
            padding: 0;
            width: 1px;
            height: 1px;
            overflow: hidden;
            word-wrap: normal !important;
            clip: rect(1px, 1px, 1px, 1px);
            }
            .screen-reader-text:focus {
            display: block;
            top: 5px;
            left: 5px;
            z-index: 100000;
            clip-path: none;
            background-color: #eee;
            padding: 15px 23px 14px;
            width: auto;
            height: auto;
            text-decoration: none;
            line-height: normal;
            color: #444;
            font-size: 1em;
            clip: auto !important;
            }

            /* Modal */

            .applybutton
            {
                width: 100% !important;
                height: 50px !important;
                border-radius: 20px;
                margin-top: 5%;
                margin-bottom: 8%;
                font-size: 25px;
                letter-spacing: 2px;
            }

            /* Navbar Buttons */

            .btn1 {
            border-radius: 20px;
            border: none; /* Remove borders */
            color: white; /* White text */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            margin-left: 23%;
            padding: 8px 22px;
            }

            .btn2 {
            border-radius: 20px;
            border: none; /* Remove borders */
            color: white; /* White text */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            padding: 8px 22px;
            margin-left: .1%;
            }

            .btn3 {
            border-radius: 20px;
            border: none; /* Remove borders */
            color: white; /* White text */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            padding: 8px 22px;
            margin-left: .1%;
            }

            .btn4 {
            border-radius: 20px;
            border: none; /* Remove borders */
            color: white; /* White text */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            padding: 8px 22px;
            margin-left: .1%;
            }

            .btn5 {
            border-radius: 20px;
            border: none; /* Remove borders */
            color: white; /* White text */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            padding: 8px 22px;
            margin-left: .1%;
            }

            /* Darker background on mouse-over */
            .btn1:hover {
            background-color: RoyalBlue;
            color: black;
            }

            .btn2:hover {
            background-color: RoyalBlue;
            color: black;
            }

            .btn3:hover {
            background-color: RoyalBlue;
            color: black;
            }

            .btn4:hover {
            background-color: RoyalBlue;
            color: black;
            }

            .btn5:hover {
            background-color: RoyalBlue;
            color: black;
            }

            /* Under Navbar */

            .container1 {
                position: relative;
                font-family: Arial;
                background-color: lightblue;
            }

            .text-block {
                position: absolute;
                bottom: 35%;
                right: 20%;
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
                height: 100px;
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
            top: 50%;
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

            /* Container for image text */
            .caption-container {
            position: relative;
            left: -15px;
            text-align: center;
            background-color: #222;
            padding: 5px;
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
                margin-top: 20px;
                position: relative;
                left: -28%;
            }

            /* Card Flip */

            .container3{
                margin-top: 3%;
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

            /* Contact Chip */

            .chip {
            display: inline-block;
            padding: 0 25px;
            height: 50px;
            line-height: 50px;
            border-radius: 25px;
            background-color: #2C54C1;
            margin-top: 5px;
            }

            .chip img {
            float: left;
            margin: 0 10px 0 -25px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
            }

            .zoom {
            transition: transform .3s;
            }

            .zoom:hover {
            -ms-transform: scale(1.4); /* IE 9 */
            -webkit-transform: scale(1.4); /* Safari 3-8 */
            transform: scale(1.4); 
            }

        </style>
    </head>

    <body>

        <!-- Back-to-Top and Back Button -->

        <a data-toggle="tooltip" title="Back-To-Top" class="top-link hide" href="" id="js-top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M12 6H0l6-6z"/></svg>
            <span class="screen-reader-text">Back to top</span>
        </a>

        <!-- Eto yung navbar -->

        <nav class="navbar navbar-dark bg-primary sticky-top">
            <a class="navbar-brand" href="resident_homepage.php">Barangay Information & E-Services Management System</a>
            <a href="resident_homepage.php" data-toggle="tooltip" title="Home" class="btn1 bg-primary"><i class="fa fa-home fa-lg"></i></a>
            <a href="#down3" data-toggle="tooltip" title="Blotter Reason" class="btn5 bg-primary"><i class="fa fa-question fa-lg"></i></a>
            <a href="#down2" data-toggle="tooltip" title="Blotter Information" class="btn4 bg-primary"><i class="fa fa-info fa-lg"></i></a>
            <a href="#down1" data-toggle="tooltip" title="Registration" class="btn3 bg-primary"><i class="fa fa-edit fa-lg"></i></a>
            <a href="#down" data-toggle="tooltip" title="Contact" class="btn2 bg-primary"><i class="fa fa-phone fa-lg"></i></a>
           
            <div class="dropdown ml-auto">
                <button title="Your Account" class="btn btn-primary dropdown-toggle" style="margin-right: 2px;" type="button" data-toggle="dropdown"><?= $userdetails['surname'];?>, <?= $userdetails['firstname'];?>
                    <span class="caret" style="margin-left: 2px;"></span>
                </button>
                <ul class="dropdown-menu" style="width: 175px;" >
                    <a class="btn" href="resident_profile.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-user"> &nbsp; </i>Personal Profile  </a>
                    <a class="btn" href="resident_changepass.php?id_resident=<?= $userdetails['id_resident'];?>"> <i class="fas fa-lock" >&nbsp;</i> Change Password  </a>
                    <a class="btn" href="logout.php"> <i class="fas fa-sign-out-alt">&nbsp;</i> Logout  </a>
                </ul>
            </div>
        </nav>

        <!-- Under Navbar -->

        <div class="container-fluid container1">
            <img src="../BarangaySystem/icons/Blotter/blotter2.png" alt="Nature" style="width:100%; height: 400px;">
            <div class="text-block text-center taytel" >
                <h1 style="font-size: 100px; letter-spacing: 5px;">Peace and Order</h1>
            </div>
        </div>

        <div id="down3"></div>

        <br>
        <br>
        <br>

        <!-- Slideshow -->

        <div class="container container2">
            <h1 style="text-align:center">Blotter Reason</h1>
            <hr style="background-color: black;">

            <br> 

            <div class="mySlides">
                <img style="width: 1140px; height:450px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter3.jpg">
            </div>

            <div class="mySlides">
                <img style="width: 1140px; height:450px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter4.jpg">
            </div>

            <div class="mySlides">
                <img style="width: 1140px; height:450px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter5.jpg">
            </div>
                
            <div class="mySlides">
                <img style="width: 1140px; height:450px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter6.jpg">
            </div>

            <div class="mySlides">
                <img style="width: 1140px; height:450px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter7.jpg">
            </div>
                
            <div class="mySlides">
                <img style="width: 1140px; height:450px;" class="picture" src="../BarangaySystem/icons/Blotter/blotter8.jpg">
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

        <div id="down2"></div>

        <br>
        <br>
        <br>

        <div class="container container3">
            <h1 style="text-align:center">Blotter Information</h1>
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
                            <div class="flip-card-back bg-info" style="font-size: 15px;">
                                <br>
                                Step 1: Fill-Up the entire form in our system.
                                <br><br>
                                Step 2: Verify all of the information you've been given
                                        in our system that we can use to solve your case   
                                        as quick as possible.
                                <br><br>
                                Step 3: Approve your complain, so we can set a schedule 
                                        or an appointment to make an agreement on bot sides. 
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

        <div id="down1"></div>

        <br>
        <br>
        <br>


        <!-- Button trigger modal -->

        <div class="container container4">

            <h1 class="text-center">Complain</h1>
            
            <hr style="background-color:black;">

            <div class="col">   
                <button type="button" class="btn btn-primary applybutton" data-toggle="modal" data-target="#exampleModalCenter">
                    Apply Form
                </button>
            </div>


            <!-- Modal -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Complain Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- Modal Body -->

                        <div class="modal-body">
                            <form method="post" class="was-validated" enctype="multipart/form-data"> 

                                <div class="row"> 
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last name:</label>
                                            <input name="lname" type="text" class="form-control" value="<?= $resident['lname']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First name:</label>
                                            <input name="fname" type="text" class="form-control" value="<?= $resident['fname']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mname">Middle name:</label>
                                            <input name="mi" type="text" class="form-control" value="<?= $resident['mi']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>  
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="age" class="mtop">Age </label>
                                            <input name="age" type="number" class="form-control" value="<?= $resident['age']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">            
                                            <label for="cno">Contact Number:</label>
                                            <input name="contact" type="text" maxlength="11" class="form-control" value="<?= $resident['contact']?>" pattern="[0-9]{11}" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>            

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label> House No: </label>
                                            <input type="text" class="form-control" name="houseno"  
                                            placeholder="Enter House No." value="<?= $resident['houseno']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Street: </label>
                                            <input type="text" class="form-control" name="street"  
                                            placeholder="Enter Street" value="<?= $resident['street']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Barangay: </label>
                                            <input type="text" class="form-control" name="brgy"  
                                            placeholder="Enter Barangay" value="<?= $resident['brgy']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label> Municipality: </label>
                                            <input type="text" class="form-control" name="municipal" 
                                            placeholder="Enter Municipality" value="<?= $resident['municipal']?>" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <h6>Guidelines for Supporting Evidence Photo:</h6>

                                <p>
                                    <ul style="font-size: 15px;">
                                        <li>
                                            Good quality photo.
                                        </li>
                                        <li>
                                            At least 50KB and no more than 50MB.
                                        </li>
                                        <li>
                                            File Format: JPEG or PNG
                                        </li>
                                        <li>
                                            Clear and in focus.
                                        </li>
                                    </ul>
                                </p>

                                <div class="row">
                                    <div class="col">
                                        <label>Supporting Evidence Photo:</label>
                                        <div class="custom-file form-group">
                                            <input type="file" onchange="readURL(this);" class="custom-file-input" id="customFile" name="blot_photo" required>
                                            <label class="custom-file-label" for="customFile">Choose File Photo</label>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label>Photo Display:</label>
                                        <img id="blah" src="http://placehold.it/470x350" alt="your image" />
                                    </div>
                                </div>

                                <hr>

                                <h6>Guidelines for Narrative Report:</h6>

                                <p>
                                    <ul style="font-size: 15px;">
                                        <li>
                                            Use simple, everyday words rather than complex terminology.
                                        </li>
                                        <li>
                                            Be specific on your report
                                        </li>
                                        <li>
                                            Don't use bad words
                                        </li>
                                        <li>
                                            Clear and Easy to read report
                                        </li>
                                        <li>
                                            Don't use Emoji or any kind of Symbols. 
                                        </li>
                                    </ul>
                                </p>
                                
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="report">Narrative Report:</label>
                                            <textarea class="form-control" rows="5" id="report" name="narrative" placeholder="Enter Message here" required></textarea>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="paa">
                                        <input name="id_resident" type="hidden" value="<?= $resident['id_resident']?>">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                        <button type="submit" name="create_blotter" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div> 
                            
                            </form>
 
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
                    <a href="#!" class="sbtn btn-large mx-1" title="Documents">
                    <i class="fas fa-file fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Card">
                    <i class="fas fa-id-card fa-2x"></i>
                    </a>
                </li>

                &nbsp;

                <li class="list-inline-item">
                    <a href="#!" class="sbtn btn-large mx-1" title="Friend">
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
                    <a href="#!" class="sbtn btn-large mx-1" title="Contact">
                    <i class="fas fa-phone fa-2x"></i>
                    </a>
                </li>
                </li>
                </ul>
            </div>

            <hr class="mb-0">

            <!--Footer Links-->

            <div class="container text-left text-md-center">
                <div class="row">

                    <!--First column-->

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
                            <li><a href="services_certofres.php">Certificate of Residency</a></li>
                            <li><a href="services_brgyclearance.php">Barangay Clearance</a></li>
                            <li><a href="services_certofindigency.php">Certificate of Indigency</a></li>
                            <li><a href="services_business.php">Business Permit</a></li>
                            <li><a href="services_brgyid.php">Barangay ID</a></li>
                        </ul>
                    </div>

                    <!--/.First column-->

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
                            <li><a href="services_blotter.php">Peace and Order</a></li>
                        </ul>
                    </div>

                    <!--/.Third column-->

                    <hr class="clearfix w-100 d-md-none mb-0">
 
                    <!--Fourth column-->

                    <div class="col-md-3 mx-auto shfooter" id="down">
                        <h5 class="my-2 font-weight-bold d-none d-md-block">Contact Us:</h5>
                        <div class="d-md-none title" data-target="#Contact-Us" data-toggle="collapse">
                            <div class="mt-3 font-weight-bold">Contact Us:
                                <div class="float-right navbar-toggler">
                                <i class="fas fa-angle-down"></i>
                                <i class="fas fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled collapse" id="Contact-Us">
                            <li>
                                <div class="zoom">
                                    <div class="chip" style="font-size:10px;">
                                        <img src="../BarangaySystem/icons/Contact/mikhos.png" alt="Person" width="96" height="96">
                                        Mikhos Dungca | 09514053044
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="zoom">
                                    <div class="chip" style="font-size:10px;">
                                        <img src="../BarangaySystem/icons/Contact/pj.png" alt="Person" width="96" height="96">
                                        PJ Mendros | 09179450661
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="zoom">
                                    <div class="chip" style="font-size:10px;">
                                        <img src="../BarangaySystem/icons/Contact/vincent.png" alt="Person" width="96" height="96">
                                        Vincent Vilfamat | 09512873394
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="zoom">
                                    <div class="chip" style="font-size:10px;">
                                        <img src="../BarangaySystem/icons/Contact/eugene.png" alt="Person" width="96" height="96">
                                        Joel Evangelista | 09301112368
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="zoom">
                                    <div class="chip" style="font-size:10px;">
                                        <img src="../BarangaySystem/icons/Contact/kyle.png" alt="Person" width="96" height="96">
                                        Kyle Pilapil | 09618853017
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!--/.Fourth column-->

                </div>
            </div>

            <!--/.Footer Links-->

            <hr class="mb-0">

            <!--Copyright-->

            <div class="py-3 text-center">
                Copyright 2021 -
                <script>
                document.write(new Date().getFullYear())
                </script> 
                BI & ESMS | For Educational Purposes Only
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

        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>

        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result)
                            .width(470)
                            .height(350);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

        <script>
            // Set a variable for our button element.
            const scrollToTopButton = document.getElementById('js-top');

            // Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window.
            const scrollFunc = () => {
            // Get the current scroll value
            let y = window.scrollY;
            
            // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
            if (y > 0) {
                scrollToTopButton.className = "top-link show";
            } else {
                scrollToTopButton.className = "top-link hide";
            }
            };

            window.addEventListener("scroll", scrollFunc);

            const scrollToTop = () => {
            // Let's set a variable for the number of pixels we are from the top of the document.
            const c = document.documentElement.scrollTop || document.body.scrollTop;
            
            // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
            // We'll also animate that scroll with requestAnimationFrame:
            // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
            if (c > 0) {
                window.requestAnimationFrame(scrollToTop);
                // ScrollTo takes an x and a y coordinate.
                // Increase the '10' value to get a smoother/slower scroll!
                window.scrollTo(0, c - c / 10);
            }
            };

            // When the button is clicked, run our ScrolltoTop function above!
            scrollToTopButton.onclick = function(e) {
            e.preventDefault();
            scrollToTop();
            }
        </script>

        <script>
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>

        <script>
            $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
                } // End if
            });
            });
        </script>

        <script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>

    </body>
</html>