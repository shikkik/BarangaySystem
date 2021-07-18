<?php
	// require the database connection
	require 'classes/conn.php';
	if(isset($_POST['search_totalres'])){
		$keyword = $_POST['keyword'];
?>
<table class="table table-hover table-bordered text-center table-responsive" >
        <thead class="alert-info">
                <tr>
                        <th> Email </th>
                        <th> Surname </th>
                        <th> First name </th>
                        <th> Middle name </th>
                        <th> Age </th>
                        <th> Sex </th>
                        <th> Status </th>
                        <th> House No.</th>
                        <th> Street </th>
                        <th> Barangay </th>
                        <th> Municipality </th>
                        <th> Contact # </th>
                        <th> Birth date </th>
                        <th> Birth place </th>
                        <th> Nationality </th>
                        <th> Family Head </th>
                </tr>
        </thead>

        <tbody>
                <?php
                        
                $stmnt = $conn->prepare("SELECT * FROM `tbl_resident` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
                or  `age` LIKE '%$keyword%' or  `sex` LIKE '%$keyword%' or  `status` LIKE '%$keyword%' or  `houseno` LIKE '%$keyword%' or  `contact` LIKE '%$keyword%'
                or  `bdate` LIKE '%$keyword%' or  `bplace` LIKE '%$keyword%' or  `nationality` LIKE '%$keyword%' or  `family_role` LIKE '%$keyword%' or  `role` LIKE '%$keyword%' or  `email` LIKE '%$keyword%'
                or  `brgy` LIKE '%$keyword%' or  `street` LIKE '%$keyword%' or  `municipal` LIKE '%$keyword%'");
                $stmnt->execute();
                        
                while($view = $stmnt->fetch()){
                ?>
                        <tr>
                                <td> <?= $view['email'];?> </td>
                                <td> <?= $view['lname'];?> </td>
                                <td> <?= $view['fname'];?> </td>
                                <td> <?= $view['mi'];?> </td>
                                <td> <?= $view['age'];?> </td>
                                <td> <?= $view['sex'];?> </td>
                                <td> <?= $view['status'];?> </td>
                                <td> <?= $view['houseno'];?> </td>
                                <td> <?= $view['street'];?> </td>
                                <td> <?= $view['brgy'];?> </td>
                                <td> <?= $view['municipal'];?> </td>
                                <td> <?= $view['contact'];?> </td>
                                <td> <?= $view['bdate'];?> </td>
                                <td> <?= $view['bplace'];?> </td>
                                <td> <?= $view['nationality'];?> </td>
                                <td> <?= $view['family_role'];?> </td>
                        </tr>
                <?php
                }
                ?>
        </tbody>
</table>

<?php		
        }else{
?>

<table class="table table-hover table-bordered text-center table-responsive">
        <thead class="alert-info">
                <tr>
                        <th> Email </th>
                        <th> Surname </th>
                        <th> First name </th>
                        <th> Middle name </th>
                        <th> Age </th>
                        <th> Sex </th>
                        <th> Status </th>
                        <th> House No.</th>
                        <th> Street </th>
                        <th> Barangay </th>
                        <th> Municipality </th>
                        <th> Contact # </th>
                        <th> Birth date </th>
                        <th> Birth place </th>
                        <th> Nationality </th>
                        <th> Family Head </th>
                        <th> Registered Voter </th>
                </tr>
	</thead>
        <tbody>
                <?php if(is_array($view)) {?>
                        <?php foreach($view as $view) {?>
                                <tr>
                                        <td> <?= $view['email'];?> </td>
                                        <td> <?= $view['lname'];?> </td>
                                        <td> <?= $view['fname'];?> </td>
                                        <td> <?= $view['mi'];?> </td>
                                        <td> <?= $view['age'];?> </td>
                                        <td> <?= $view['sex'];?> </td>
                                        <td> <?= $view['status'];?> </td>
                                        <td> <?= $view['houseno'];?> </td>
                                        <td> <?= $view['street'];?> </td>
                                        <td> <?= $view['brgy'];?> </td>
                                        <td> <?= $view['municipal'];?> </td>
                                        <td> <?= $view['contact'];?> </td>
                                        <td> <?= $view['bdate'];?> </td>
                                        <td> <?= $view['bplace'];?> </td>
                                        <td> <?= $view['nationality'];?> </td>
                                        <td> <?= $view['family_role'];?> </td>
                                        <td> <?= $view['voter'];?> </td>
                                </tr>
                        
                        <?php
                                }
                        ?>
                <?php
                        }
                ?>
        </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
<!-- responsive tags for screen compatibility -->
<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
<!-- custom css --> 
<link href="../BarangaySystem/customcss/regiformstyle.css" rel="stylesheet" type="text/css">
<!-- bootstrap css --> 
<link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
<!-- fontawesome icons -->
<script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
<script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>

<?php
	}
$con = null;
?>