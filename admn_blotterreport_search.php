<?php
	// require the database connection
	require 'classes/conn.php';
	if(isset($_POST['search_bspermit'])){
		$keyword = $_POST['keyword'];
?>
	<table class="table table-hover text-center table-bordered table-responsive" >
		<thead class="alert-info">
            
			<tr>
                <th> Actions</th>
                <th> Resident ID </th>
                <th> Surname </th>
                <th> First Name </th>
                <th> Middle Name </th>
                <th> House No. </th>
                <th> Street </th>
                <th> Barangay </th>
                <th> Municipality </th>
                <th> Blotter Image </th>
                <th> Contact # </th>
                <th> Narrative Report </th>
                <th> Date & Time Applied</th> 
			</tr>
		</thead>
		<tbody>
		
                    
			<?php
				
				$stmnt = $conn->prepare("SELECT * FROM `tbl_bspermit` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
				or `bsname` LIKE '%$keyword%' or  `id_resident` LIKE '%$keyword%' or  `houseno` LIKE '%$keyword%' or  `street` LIKE '%$keyword%'
				or `brgy` LIKE '%$keyword%' or `municipal` LIKE '%$keyword%' or `bsindustry` LIKE '%$keyword%' or `aoe` LIKE '%$keyword%' ");
				$stmnt->execute();
				
				while($view = $stmnt->fetch()){
			?>
			<tr>
            <td>    
                <form action="" method="post">
                    <a class="btn btn-success" style="width: 90px; font-size: 17px; border-radius:30px; margin-bottom: 2px;" href="update_blotter_form.php?id_resident=<?= $view['id_resident'];?>">Update</a> 
                    <input type="hidden" name="id_blotter" value="<?= $view['id_blotter'];?>">
                    <button class="btn btn-danger" style="width: 90px; font-size: 17px; border-radius:30px;" type="submit" name="delete_blotter"> Archive </button>
                </form>
                </td>
                <td> <?= $view['id_resident'];?> </td> 
                <td> <?= $view['lname'];?> </td>
                <td> <?= $view['fname'];?> </td>
                <td> <?= $view['mi'];?> </td>
                <td> <?= $view['houseno'];?> </td>
                <td> <?= $view['street'];?> </td>
                <td> <?= $view['brgy'];?> </td>
                <td> <?= $view['municipal'];?> </td>
                <td> <?php echo '<img src="data:image;base64,'.base64_encode($view['blot_photo']).'" alt="Blotter Photo" style="width: 100px; height:100px;">'; ?> </td>
                <td> <?= $view['contact'];?> </td>
                <td> <?= $view['narrative'];?> </td>
                <td> <?= $view['timeapplied'];?> </td>
			</tr>
			<?php
			}
			?>
			
			
		</tbody>
	</table>
<?php		
	}else{
?>
<table class="table table-hover text-center table-bordered table-responsive">
		<thead class="alert-info">
			<tr>
                <th> Actions</th>
                <th> Resident ID </th>
                <th> Surname </th>
                <th> First Name </th>
                <th> Middle Name </th>
                <th> House No. </th>
                <th> Street </th>
                <th> Barangay </th>
                <th> Municipality </th>
                <th> Blotter Image </th>
                <th> Contact # </th>
                <th> Narrative Report </th>
                <th> Date & Time Applied</th> 
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
			<tr>
            <td>    
                        <form action="" method="post">
                        <a class="btn btn-success" style="width: 90px; font-size: 17px; border-radius:30px; margin-bottom: 2px;" href="update_blotter_form.php?id_resident=<?= $view['id_resident'];?>">Update</a> 
                            <input type="hidden" name="id_blotter" value="<?= $view['id_blotter'];?>">
                            <button class="btn btn-danger" style="width: 90px; font-size: 17px; border-radius:30px;" type="submit" name="delete_blotter"> Archive </button>
                        </form>
                        </td>

                        <td> <?= $view['id_resident'];?> </td> 
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['houseno'];?> </td>
                        <td> <?= $view['street'];?> </td>
                        <td> <?= $view['brgy'];?> </td>
                        <td> <?= $view['municipal'];?> </td>
                        <td><a class="btn btn-success" href="admn_blotter_download.php?blot_photo=<?php echo $view['blot_photo'] ?>">Download</a></td>
                        <td> <?= $view['contact'];?> </td>
                        <td> <?= $view['narrative'];?> </td>
                        <td> <?= $view['timeapplied'];?> </td>
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