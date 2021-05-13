<?php
	// require the database connection
	require 'classes/conn.php';
	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered" >
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
				$surname = $_POST['surname'];
                $mname = $_POST['mname'];
				$query = $conn->prepare("SELECT * FROM `tbl_resident` WHERE `lname` LIKE '%$surname%' and  `mi` LIKE '%$mname%'");
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
	<table class="table table-bordered">
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
				$query = $conn->prepare("SELECT * FROM `tbl_resident`");
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
	}
$conn = null;
?>