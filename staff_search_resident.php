<?php
	// require the database connection
	require 'classes/conn.php';
	if(isset($_POST['search_resident'])){
		$keyword = $_POST['keyword'];
?>
	<table class="table table-dark table-responsive" >
		<thead class="alert-info">
            
			<tr>
			<th> Actions</th>
            <th> Email </th>
            <th> Password </th>
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
            <th> Family Role </th>
            <th> Role </th>
            <th> AddedBy </th>
                
                
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
			<td>    
            <form action="" method="post">
                            <a href="update_resident_form.php?id_resident=<?= $view['id_resident'];?>" class="btn btn-primary">  Update </a>
                            <input type="hidden" name="id_resident" value="<?= $view['id_resident'];?>">
                        </form>
            </td>
			<td> <?= $view['email'];?> </td>
                        <td> <?= $view['password'];?> </td> 
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['sex'];?> </td>
                        <td> <?= $view['status'];?> </td>
                        <td> <?= $view['address'];?> </td>
                        <td> <?= $view['contact'];?> </td>
                        <td> <?= $view['bdate'];?> </td>
                        <td> <?= $view['bplace'];?> </td>
                        <td> <?= $view['nationality'];?> </td>
                        <td> <?= $view['family_role'];?> </td>
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
		<thead class="alert-info">
			<tr>
			<th> Actions</th>
            <th> Email </th>
            <th> Password </th>
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
            <th> Family Role </th>
            <th> Role </th>
            <th> AddedBy </th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
			<tr>
			<td>    
                        <form action="" method="post">
                            <a href="staff_update_resident_form.php?id_resident=<?= $view['id_resident'];?>" class="btn btn-primary">  Update </a>
                            <input type="hidden" name="id_resident" value="<?= $view['id_resident'];?>">
                        </form>
            </td>
			<td> <?= $view['email'];?> </td>
                        <td> <?= $view['password'];?> </td> 
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['sex'];?> </td>
                        <td> <?= $view['status'];?> </td>
                        <td> <?= $view['address'];?> </td>
                        <td> <?= $view['contact'];?> </td>
                        <td> <?= $view['bdate'];?> </td>
                        <td> <?= $view['bplace'];?> </td>
                        <td> <?= $view['nationality'];?> </td>
                        <td> <?= $view['family_role'];?> </td>
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