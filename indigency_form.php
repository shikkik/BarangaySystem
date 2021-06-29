<?php
require('classes/resident.class.php');
$userdetails = $residentbmis->get_userdata();
$id_resident = $_GET['id_resident'];
$resident = $residentbmis->get_single_certofindigency($id_resident);
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
                
                <div class="col-xs-12 col-sm-5 col-md-8" style="background: white;  ">`
              
                   
                    <div class="pull-center" style="font-size: 16px;text-align: center;"><b>
                    <image src="../BarangaySystem/icons/beverlylogo.png"  ALIGN="left" style="width:150px;height:120px;"></image>
                    <image src="../BarangaySystem/icons/beverlylogo.png"  ALIGN="right" style="width:150px;height:120px;"></image> 
                        Republic of the Philippines<br>
                        Municipality of Antipolo<br>
                        Province of Metro Manila<br>
                        BARANGAY BEVERLY HILLS<br>
                        Tel. +632 633-9667<br></b>
                        
                    </div>

                    <hr>

                    <div class="col-xs-12 col-sm-6 col-md-12" style="padding-left: 96px;padding-right: 96px;" >
                        <p class="text-center" style="font-size: 20px; font-size:bold;">OFFICE OF THE BARANGAY CAPTAIN<br><br><b style="font-size: 28px;"><ins>CERTIFICATE OF INDIGENCY</ins></b></p> <br><br><br>
                        <p style="font-size: 18px; padding-left:3em;">TO WHOM IT MAY CONCERN:</p> <br><br>
                        <p style="text-indent:40px;text-align: justify;">This is to certify that <b><?= $resident['lname'];?>, <?= $resident['fname'];?> <?= $resident['mi'];?></b>, of legal age, <?= $resident['nationality'];?> and
                        a bonifide resident at <?= $resident['houseno'];?> <?= $resident['street'];?> <?= $resident['brgy'];?> <?= $resident['municipal'];?>.</p><br>
                        <p style="text-indent:40px;text-align: justify;">Further Certify that the above named subject is of good moral character and has
                        good community standing, but unfortunately to the indigent family in this barangay.
                        </p><br>
                        <p style="text-indent:40px;text-align: justify;">This certification is issued upon the request of the above named party as a 
                        requirement needed for <b><ins><?= $resident['purpose'];?></ins></b>.
                        </p>
                        
                        
                        <br><br><br><br><br><br><br><br>
                        
                    
                        <label style="font-size:17px;margin-left:70%;"><b>VINCENT VILFAMAT</b>  </label><br> 
                        <label style=" text-align: center;margin-left:73%">Punong Barangay</label>
                       
                        
                    </div>
                    
                
                
                <div class="col-xs-offset-8 col-xs-5 col-md-offset-8 col-md-4 "  >
                
                </div>

                <div class="col-xs-8 col-md-4" style="margin-top: 5em;">
                <b style="font-size:18px;">Rest. Cert. No. _______<br>
                <span style=" text-align: center;">Issued at ____________</span><br>
                <span style=" text-align: center;">Issued on ___________</span></b>
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