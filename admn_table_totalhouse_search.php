<?php
	// require the database connection
	require 'classes/conn.php';
	if(isset($_POST['search_household'])){
		$keyword = $_POST['keyword'];
?>
	<table class="table table-dark table-responsive text-center" >
		<thead >
			<tr>
                <th> Family Surname </th>
                <th> Family Middle name </th>
                <th> House no. </th>
                <th> Street </th>
                <th> Barangay</th>
			</tr>
		</thead>
		<tbody>
   
			<?php
				
				$stmnt = $conn->prepare("SELECT * FROM `tbl_resident` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
				or `houseno` LIKE '%$keyword%' or  `street` LIKE '%$keyword%' or  `brgy` LIKE '%$keyword%'");
				$stmnt->execute();
				
				while($view = $stmnt->fetch()){
			?>
			<tr>
                <td> <?= $view['lname'];?> </td>
                <td> <?= $view['mi'];?> </td>
                <td> <?= $view['houseno'];?> </td>
                <td> <?= $view['street'];?> </td>
                <td> <?= $view['brgy'];?> </td>
			</tr>
			<?php
			}
			?>
			
			
		</tbody>
	</table>
<?php		
	}else{
?>
<table class="table table-dark table-responsive text-center">
		<thead >
			<tr>
                <th> Family Surname </th>
                <th> Family Middle name </th>
                <th> House no. </th>
                <th> Street </th>
                <th> Barangay</th>   
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
			<tr>
                <td> <?= $view['lname'];?> </td>
                <td> <?= $view['mi'];?> </td>
                <td> <?= $view['houseno'];?> </td>
                <td> <?= $view['street'];?> </td>
                <td> <?= $view['brgy'];?> </td>

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