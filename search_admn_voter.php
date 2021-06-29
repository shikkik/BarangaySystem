<?php
	// require the database connection
	require 'classes/conn.php';
	if(isset($_POST['search_admn_voter'])){

	$keyword = $_POST['keyword'];

?>

	<table class="table table-dark table-responsive" >
		<thead> 
		    <tr>
                <th> Actions</th>
                <th> Surname </th>
                <th> Middle name </th>
                <th> House No.</th>
                <th> Street </th>
                <th> Barangay </th>
                <th> Nationality </th>
                <th> Role </th>
                <th> Added By </th>
			</tr>
		</thead>
		<tbody>
			<?php
				$stmnt = $conn->prepare("SELECT * FROM `tbl_resident` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
				or `age` LIKE '%$keyword%' or   `status` LIKE '%$keyword%' or  `contact` LIKE '%$keyword%'
				or `nationality` LIKE '%$keyword%' or `family_role` LIKE '%$keyword%' or  `houseno` LIKE '%$keyword%' or  `street` LIKE '%$keyword%' or  `brgy` LIKE '%$keyword%'");
				$stmnt->execute();
				
				while($view = $stmnt->fetch()){
			?>
			<tr>
			    <td>    
                <form action="" method="post">
                    <a href="update_resident_form.php?id_resident=<?= $view['id_resident'];?>" class="btn btn-primary">  Update </a>
                    <input type="hidden" name="id_resident" value="<?= $view['id_resident'];?>">
                    <button class="btn btn-danger" type="submit" name="delete_resident"> Delete </button>
                </form>
                </td>
                <td> <?= $view['lname'];?> </td>
                <td> <?= $view['mi'];?> </td>
                <td> <?= $view['houseno'];?> </td>
                <td> <?= $view['street'];?> </td>
                <td> <?= $view['brgy'];?> </td>
                <td> <?= $view['nationality'];?> </td>
                <td> <?= $view['role'];?> </td>
                <td> <?= $view['addedby'];?> </td>
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
                <th> Actions</th>
                <th> Surname </th>
                <th> Middle name </th>
                <th> House No.</th>
                <th> Street </th>
                <th> Barangay </th>
                <th> Nationality </th>
                <th> Role </th>
                <th> Added By </th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
			<tr>
			<td>    
                <form action="" method="post">
                <a href="update_resident_form.php?id_resident=<?= $view['id_resident'];?>" class="btn btn-primary">  Update </a>
                <input type="hidden" name="id_resident" value="<?= $view['id_resident'];?>">
                <button class="btn btn-danger" type="submit" name="delete_resident"> Delete </button>
                 </form>
            </td>
            <td> <?= $view['lname'];?> </td>
            <td> <?= $view['mi'];?> </td>
            <td> <?= $view['houseno'];?> </td>
            <td> <?= $view['street'];?> </td>
            <td> <?= $view['brgy'];?> </td>
            <td> <?= $view['nationality'];?> </td>
            <td> <?= $view['role'];?> </td>
            <td> <?= $view['addedby'];?> </td>
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