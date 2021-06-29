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
                    
                    <hr>


                        <h2>Barangay ID</h2>

                        <div class="card" style="border: 2px solid black;" >
                        <div class="photo">
				        <img src="../BarangaySystem/icons/2x2.jpg">
			            </div>
                        <div class="text" style="padding-left: 2em;padding-right: 2em;  ">    
                               <br>
                                <label style="font-size:10px;">Last Name <label style="padding-left: 3em;">First Name</label> <label style="padding-left: 3em; ">Middle Initial</b></label>  </label>  <br>
                                <label style="font-size:15px;"><b>John Doe</b> <label style="padding-left: 1em;"><b>John Doe</b> </label> <label style="padding-left: 1em;"><b>John Doe</b></label> </label>   <br>
                                <label style="font-size:10px;">Address</label> <br>
                                <label style="font-size:13px;"><b>happyland dona carmen subdivision commonwealth Qc</b> </label> <br>
                                <label style="font-size:10px;">Date of Birth <label style="padding-left: 3em;">Place of Birth </label> <label style="padding-left: 3em; ">Precinct No.</b></label>  </label>  <br>
                                <label style="font-size:15px;"><b>John Doe</b> <label style="padding-left: 1em;"><b>John Doe</b> </label> <label style="padding-left: 1em;"><b>John Doe</b></label> </label>  
                                <br><br>       
                        </div>       
                        </div>
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