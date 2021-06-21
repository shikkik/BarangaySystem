<?php
	// require the database connection
	require 'classes/conn.php';
	if(isset($_POST['search_totalvoters'])){
		$keyword = $_POST['keyword'];
?>
	<table class="table table-dark table-responsive" >
		<thead >
            
			<tr>
                <th> Surname </th>
                <th> First name </th>
                <th> Middle name </th>
                <th> House No.</th>
                <th> Street </th>
                <th> Barangay </th>
                <th> Contact # </th>
			</tr>
		</thead>
		<tbody>
		
                    
			<?php
				
				$stmnt = $conn->prepare("SELECT * FROM `tbl_resident` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
				or `houseno` LIKE '%$keyword%' or  `street` LIKE '%$keyword%' or  `brgy` LIKE '%$keyword%' or  `contact` LIKE '%$keyword%'");
				$stmnt->execute();
				
				while($view = $stmnt->fetch()){
			?>
			<tr>
                <td> <?= $view['lname'];?> </td>
                <td> <?= $view['fname'];?> </td>
                <td> <?= $view['mi'];?> </td>
                <td> <?= $view['houseno'];?> </td>
                <td> <?= $view['street'];?> </td>
                <td> <?= $view['brgy'];?> </td>
                <td> <?= $view['contact'];?> </td>
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
                <th> Surname </th>
                <th> First name </th>
                <th> Middle name </th>
                <th> House No.</th>
                <th> Street </th>
                <th> Barangay </th>
                <th> Contact # </th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
			<tr>
                <td> <?= $view['lname'];?> </td>
                <td> <?= $view['fname'];?> </td>
                <td> <?= $view['mi'];?> </td>
                <td> <?= $view['houseno'];?> </td>
                <td> <?= $view['street'];?> </td>
                <td> <?= $view['brgy'];?> </td>
                <td> <?= $view['contact'];?> </td>
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