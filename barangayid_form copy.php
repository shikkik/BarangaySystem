<?php
require('classes/resident.class.php');
//$userdetails = $residentbmis->get_userdata();
//$id_resident = $_GET['id_resident'];
//$resident = $residentbmis->get_single_certofres($id_resident);
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
			width: 100px;
    		margin-top: 40px;
            margin-left: 15px;
            flex-basis: 40%
		}

.text {
  font-size: 20px;
  padding-left: 20px;
}
 /* Container holding the image and the text */
 .container {
  position: relative;
  text-align: left;
  color: white;
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
                    
                    <div class="container" >
                        <img src="../BarangaySystem/icons/ID.jpg" alt="Snow" style="width:80%;">
                        
                        <div class="centered">
                          <label style="position:relative; left:80px; bottom:30px; font-size:20px;">  <b>Mendros Peter James T. </b> </label>
                          <label style="position:relative; left:80px;  font-size:15px;">  <b>0356 Happy Land Carmencita Street Dona <br> Carmen Commonwealth Quezon City </b> </label>
                        </div>
                        <div class="bottom-left">
                        <label style="position:relative; left:190px; bottom:30px; font-size:15px;">  <b>01/14/200 </b> </label>
                        <label style="position:relative; left:210px; bottom:30px; font-size:15px;">  <b>01/14/200 </b> </label>
                        <label style="position:relative; left:240px; bottom:30px; font-size:15px;">  <b>01/14/200 </b> </label>
                        </div>
                        <div class="bbottom-left">
                        <label style="position:relative; left:30px; bottom:20px; font-size:15px;">  <b>01/14/200 </b> </label>
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