<?php
	// require the database connection
	error_reporting(E_ALL ^ E_WARNING);
	require 'classes/conn.php';
	if(isset($_POST['search_household'])){

		$lname = $_POST['lname'];
        $mi = $_POST['mi'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>

	<body>

		<table class="table table-responsive">
		<thead class="alert-info">
			<tr>
                <th> Surname </th>
                <th> First name </th>
                <th> MI </th>
                <th> Age </th>
                <th> Sex </th>
                <th> Status </th>
                <th> Address </th>
                <th> Contact </th>
                <th> Bdate </th>
                <th> Bplace </th>
                <th> Nationality </th>
			</tr>
		</thead>
		<tbody>
			<?php
				

				$query = $conn->prepare("SELECT * FROM `tbl_resident` WHERE `lname` LIKE '%$lname%' and  `mi` LIKE '%$mi%'");
				$query->execute();
				
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['lname']?></td>
				<td><?php echo $row['fname']?></td>
                <td><?php echo $row['mi']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['sex']?></td>
                <td><?php echo $row['status']?></td>
				<td><?php echo $row['address']?></td>
                <td><?php echo $row['contact']?></td>
                <td><?php echo $row['bdate']?></td>
                <td><?php echo $row['bplace']?></td>
                <td><?php echo $row['nationality']?></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
<?php		
	}else{
?>
<?php
	}
$con = null;
?>
		
	</body>
</html>

