<?php
require('classes/resident.class.php');
$userdetails = $residentbmis->get_userdata();
$id_resident = $_GET['id_resident'];
$resident = $residentbmis->get_single_brgyid($id_resident);
  ?>
<!DOCTYPE html>
<html id="clearance">
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
    
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 55%;
  display: flex;
  
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;

}

.photo img {
			width: 180px;
    
flex-basis: 40%;
position: absolute;
  top: 47%;
  left: 17%;
  transform: translate(-50%, -50%);
		}

.text {
  font-size: 20px;
  padding-left: 20px;
}
 /* Container holding the image and the text */
 .container {
  position: relative;
  text-align: left;
  color: black;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 50px;
  left: 80px;
}

.bbottom-left {
  position: absolute;
  bottom: 8px;
  left: 80px;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
} 



</style>

 <head>
    <meta charset="UTF-8">
    <title>Barangay Information System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../BarangaySystem/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../BarangaySystem/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../BarangaySystem/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../BarangaySystem/bootstrap/css/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../BarangaySystem/bootstrap/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="./BarangaySystem/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../BarangaySystem/bootstrap/css/select2.css" rel="stylesheet" type="text/css" />
    <script src="../BarangaySystem/bootstrap/css/jquery-1.12.3.js" type="text/javascript"></script>  
    
    
    

</head>
 <body class="skin-black" >
     <!-- header logo: style can be found in header.less -->
    
    
     <?php 
     
     include "classes/conn.php"; 

     ?> 
                <div class="col-xs-12 col-sm-5 col-md-8" >`
                
                    
                    <hr>
                    <br>
                    <br>
                    <div class="container" style="margin-left: 2em;" >
                        <img src="../BarangaySystem/icons/ID.jpg" alt="Snow" style="width:80%;">
                        
                        <div class="photo"><img src="../BarangaySystem/icons/2x2.jpg"></div>
                        <div class="centered">
                          <label style="position:relative; left:80px; bottom:30px; font-size:20px;color:white">  <b><?= $resident['lname'];?>, <?= $resident['fname'];?> <?= $resident['mi'];?> </b> </label>
                          <label style="position:relative; left:65px;  font-size:15px;color:white">  <b><?= $resident['houseno'];?> <?= $resident['street'];?> <?= $resident['brgy'];?> <?= $resident['municipal'];?> </b> </label>
                        </div>
                        <div class="bottom-left">
                        <label style="position:relative; left:170px; bottom:30px; font-size:15px; color:white">  <b><?= $resident['bdate'];?></b> </label>
                        <label style="position:relative; left:190px; bottom:30px; font-size:15px; color:white">  <b><?= $resident['bplace'];?></b> </label>
                        <label style="position:relative; left:240px; bottom:30px; font-size:15px; color:white">  <b>2 </b> </label>
                        </div>
                        <div class="bbottom-left">
                        <label style="position:relative; left:30px; bottom:20px; font-size:15px; color:white">  <b>01</b> </label>
                        </div>
                      </div> 
                      <br><br><br><br>

                      <div class="container" style="margin-left: 2em;"  >
                        <img src="../BarangaySystem/icons/IDBACK.jpg" alt="Snow" style="width:80%;">

                        <div class="top-left">
                          <label style="position:relative; left:160px; top:30px; font-size:12px;color:white">  <?= $resident['inc_lname'];?>, <?= $resident['inc_fname'];?> <?= $resident['inc_mi'];?>  </label>
                          <label style="position:relative; left:-13px; top:45px; font-size:12px;color:white">  <b><b><?= $resident['inc_houseno'];?> <?= $resident['inc_street'];?> <?= $resident['inc_brgy'];?> </b> </label>
                          <label style="position:relative; left:-218px; top:65px; font-size:12px;color:white">  <b><?= $resident['inc_contact'];?></b> </label>
                        </div>
                        
                        <div class="bbottom-left">
                        <label style="position:absolute; left:1px; bottom:20px; font-size:15px; color:white">  <b>01/14/2021 </b> </label>
                        <label style="position:absolute; left:160px; bottom:20px; font-size:15px; color:white">  <b>01/14/2022 </b> </label>
                        </div>
                      </div> 
 

                   
                    
                
                
                <div class="col-xs-offset-8 col-xs-5 col-md-offset-8 col-md-4 "  >
                
                </div>

                
                
                
            </div>
        </div>
</div>
    <button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#clearance')">Print</button>
    </body>
    <?php
    
    ?>


    <script>
         function PrintElem(elem)
    {
        window.print();
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=1000');
        //mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        //mywindow.document.write('</head><body class="skin-black" >');
         var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        mywindow.document.write(data);
        //mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();

        printButton.style.visibility = 'visible';
        mywindow.close();

        return true;
    }
    </script>
</html>