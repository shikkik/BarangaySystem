<?php
	// require the database connection
	require 'classes/conn.php';

	if(isset($_POST['search_maleres'])){
	$keyword = $_POST['keyword'];

   
   
?>
	<table class="table table-dark table-responsive" >
		<thead> 
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
                <th> Contact </th>
                <th> Birth date </th>
                <th> Birth place </th>
                <th> Nationality </th>
			</tr>
		</thead>
		<tbody>
			<?php
				$stmnt = $conn->prepare("SELECT * FROM `tbl_resident` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
				or  `age` LIKE '%$keyword%' or  `sex` LIKE '%$keyword%' or  `status` LIKE '%$keyword%' or  `address` LIKE '%$keyword%' or  `contact` LIKE '%$keyword%'
				or  `bdate` LIKE '%$keyword%' or  `bplace` LIKE '%$keyword%' or  `nationality` LIKE '%$keyword%' or  `family_role` LIKE '%$keyword%' or  `role` LIKE '%$keyword%' or  `email` LIKE '%$keyword%'");
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
                <td> <?= $view['contact'];?> </td>
                <td> <?= $view['bdate'];?> </td>
                <td> <?= $view['bplace'];?> </td>
                <td> <?= $view['nationality'];?> </td>
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
		<thead>
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
                <th> Contact </th>
                <th> Birth date </th>
                <th> Birth place </th>
                <th> Nationality </th>
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
                <td> <?= $view['contact'];?> </td>
                <td> <?= $view['bdate'];?> </td>
                <td> <?= $view['bplace'];?> </td>
                <td> <?= $view['nationality'];?> </td>
			</tr>
			
			<?php
				}
			?>
			<?php
				}
			?>
		</tbody>
	</table>
<?php
	}
$con = null;
?>