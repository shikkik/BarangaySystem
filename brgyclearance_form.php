<?php
ini_set('display_errors',0);
require('classes/resident.class.php');
$userdetails = $residentbmis->get_userdata();
$id_resident = $_GET['id_resident'];
$resident = $residentbmis->get_single_clearance($id_resident);
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
       
       <div class="col-xs-12 col-sm-6 col-md-8"  >
            <div style=" background: black;" >
                <div class="col-xs-4 col-sm-6 col-md-3" style="background: white; margin-right:10px; border: 2px solid black;">
                    <center><image src="../BarangaySystem/icons/beverlylogo.png" style="width:90%;height:164px;"/></center>
                    <div style="margin-top:20px; text-align: center; word-wrap: break-word;">
                        
                                    <p style="margin-top: 2em;">
                                    <b>Vincent Vilfamat</b><br>
                                    <span style="font-size:12px;">PUNONG BARANGAY</span>
                                    </p><br>
                                    <p>
                                    KAG. Mikhos Dungca<br>
                                    <span style="font-size:12px;">Sports / Law / Ordinance</span>
                                    </p><br>
                                    
                                    <p>
                                    KAG. PJ Mendros<br>
                                    <span style="font-size:12px;">Public Safety / Peace and Order</span>
                                    </p><br>
                                    
                                    <p>
                                    KAG. Eugene Evangelista<br>
                                    <span style="font-size:12px;">Culture & Arts / Tourism / Womens Sector</span>
                                    </p><br>
                                    <p>
                                    KAG. Kyle Pilapil<br>
                                    <span style="font-size:12px;">Budget & Finance / Electrification</span>
                                    </p><br>
                                   
                                    <p>
                                    KAG. Jr Gapas<br>
                                    <span style="font-size:12px;">Agriculture / Livelihood / Farmers Sector / PWD Sector</span>
                                    </p><br>
                                   
                                    <p>
                                    KAG. Kjell Ibabao<br>
                                    <span style="font-size:12px;">Health & Sanitation / Education</span>
                                    </p><br>
                                  
                                    <p>
                                    KAG. Remedios<br>
                                    <span style="font-size:12px;">Infrastracture / Labor Sector/ Environment / Beautification</span>
                                    </p>
                                    
                    </div>
                </div>
                <div class="col-xs-7 col-sm-5 col-md-8" style="background: white;  ">`
                    <div class="pull-center" style="font-size: 16px; text-align:center;"><b>
                        Republic of the Philippines<br>
                        Municipality of Antipolo<br>
                        Province of Metro Manila<br>
                        BARANGAY BEVERLY HILLS<br>
                        Tel. +632 633-9667<br><br></b>
                    </div>
                  
                    <div class="pull-right" style="border: 2px ;">
                       
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <p class="text-center" style="font-size: 20px; font-size:bold;">OFFICE OF THE BARANGAY CAPTAIN<br><br><b style="font-size: 25px;"><ins>BARANGAY CLEARANCE</ins></b></p> <br>
                        <p style="font-size: 18px;">TO WHOM IT MAY CONCERN:</p> <br>
                        <p style="text-indent:40px;text-align: justify;">This is to certify that <b><?= $resident['lname'];?>, <?= $resident['fname'];?> <?= $resident['mi'];?></b>,
                        <?= $resident['age'];?> Years Old, <?= $resident['nationality'];?> and a bonafide resident of <?= $resident['houseno'];?> <?= $resident['street'];?> <?= $resident['brgy'];?> <?= $resident['municipal'];?>.</p> <br>

                        <p style="text-indent:40px;text-align: justify;">Further certify that the above-named subject is of good moral character and has 
                        no derigatory record in this office, law abiding citizen and reliable.</p> <br>

                        <p style="text-indent:40px;text-align: justify;">This certification is issued upon the request of the above-named party
                        as a supporting document needed for <ins><?= $resident['purpose'];?></ins>.</p> <br>

                       


                        
                        
                        <br><br><br><br><br><br>
                    
                        <label style="font-size:18px;">____________</label>    <label style="font-size:18px;margin-left:4em;">VINCENT VILFAMAT</label><br> 
                        <label style=" text-align: center;">Signature </label>     <label style=" text-align: center;margin-left:10em;">Punong Barangay</label>
                       
                        
                    </div>
                    
                </div>
                
                <div class="col-xs-offset-8 col-xs-5 col-md-offset-8 col-md-4 "  >
                
                </div>

                <div class="col-xs-8 col-md-4" style="margin-top: 7em;">
                <b style="font-size:18px;">Rest. Cert. No. _______<br>
                <span style=" text-align: center;">Issued at ____________</span><br>
                <span style=" text-align: center;">Issued on ___________</span></b>
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
        var mywindow = window.open('', 'my div', 'height=400,width=600');
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