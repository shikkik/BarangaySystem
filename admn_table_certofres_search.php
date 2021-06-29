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
                <th> Nationality </th>
                <th> House Number </th>
                <th> Street </th>
                <th> Barangay </th>
                <th> Municipality </th>
                <th> Date </th>
                <th> Purpose </th>
			</tr>
		</thead>
		<tbody>
		
                    
			<?php
				
				$stmnt = $conn->prepare("SELECT * FROM `tbl_rescert` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
				or `age` LIKE '%$keyword%' or  `id_resident` LIKE '%$keyword%' or  `nationality` LIKE '%$keyword%' or  `houseno` LIKE '%$keyword%'
				or `street` LIKE '%$keyword%' or `brgy` LIKE '%$keyword%' or `municipal` LIKE '%$keyword%' or `date` LIKE '%$keyword%' or `purpose` LIKE '%$keyword%'");
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
                        <td> <?= $view['nationality'];?> </td>
                        <td> <?= $view['houseno'];?> </td>
                        <td> <?= $view['street'];?> </td>
                        <td> <?= $view['brgy'];?> </td>
                        <td> <?= $view['municipal'];?> </td>
                        <td> <?= $view['date'];?> </td>
                        <td> <?= $view['purpose'];?> </td>

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
                <th> Nationality </th>
                <th> House Number </th>
                <th> Street </th>
                <th> Barangay </th>
                <th> Municipality </th>
                <th> Date </th>
                <th> Purpose </th>
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
                        <td> <?= $view['nationality'];?> </td>
                        <td> <?= $view['houseno'];?> </td>
                        <td> <?= $view['street'];?> </td>
                        <td> <?= $view['brgy'];?> </td>
                        <td> <?= $view['municipal'];?> </td>
                        <td> <?= $view['date'];?> </td>
                        <td> <?= $view['purpose'];?> </td>
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