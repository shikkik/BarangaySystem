<?php
	// require the database connection
	require 'classes/conn.php';
	if(isset($_POST['search_certofres'])){
		$keyword = $_POST['keyword'];
?>
	<table class="table table-dark table-responsive" >
		<thead >
            
			<tr>
                <th> Actions</th>
                <th> Resident ID </th>
                <th> Surname </th>
                <th> First Name </th>
                <th> Middle Name </th>
                <th> Age </th>
                <th> Status </th>
                <th> Nationality </th>
                <th> Address </th>
			</tr>
		</thead>
		<tbody>
		
                    
			<?php
				
				$stmnt = $conn->prepare("SELECT * FROM `tbl_rescert` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
				or `age` LIKE '%$keyword%' or  `id_resident` LIKE '%$keyword%' or  `address` LIKE '%$keyword%' or  `contact` LIKE '%$keyword%'
				or `email` LIKE '%$keyword%'");
				$stmnt->execute();
				
				while($view = $stmnt->fetch()){
			?>
			<tr>
            <td>    
                        <form action="" method="post">
                            <a class="btn btn-primary" href="rescert_form.php?id_resident=<?= $view['id_resident'];?>">Generate</a> 
                            <input type="hidden" name="id_rescert" value="<?= $view['id_rescert'];?>">
                            <button class="btn btn-danger" type="submit" name="delete_certofres"> Remove </button>
                        </form>
                        </td>
                        <td> <?= $view['id_resident'];?> </td> 
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['status'];?> </td>
                        <td> <?= $view['nationality'];?> </td>
                        <td> <?= $view['address'];?> </td>
			</tr>
			<?php
			}
			?>
			
			
		</tbody>
	</table>
<?php		
	}else{
?>
<table class="table table-dark table-responsive">
		<thead >
			<tr>
            <th> Actions</th>
                <th> Resident ID </th>
                <th> Surname </th>
                <th> First Name </th>
                <th> Middle Name </th>
                <th> Age </th>
                <th> Status </th>
                <th> Nationality </th>
                <th> Address </th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
			<tr>
            <td>    
                        <form action="" method="post">
                            <a class="btn btn-primary" href="rescert_form.php?id_resident=<?= $view['id_resident'];?>">Generate</a> 
                            <input type="hidden" name="id_rescert" value="<?= $view['id_rescert'];?>">
                            <button class="btn btn-danger" type="submit" name="delete_certofres"> Remove </button>
                        </form>
                        </td>
                        <td> <?= $view['id_resident'];?> </td> 
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['status'];?> </td>
                        <td> <?= $view['nationality'];?> </td>
                        <td> <?= $view['address'];?> </td>
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