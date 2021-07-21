<?php
	// require the database connection
	require 'classes/conn.php';
	if(isset($_POST['search_bspermit'])){
		$keyword = $_POST['keyword'];
?>

<table class="table table-hover text-center table-bordered table-responsive" >

    <thead >
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
                        <a class="btn btn-primary" style="width: 90px; font-size: 17px; border-radius:30px;" href="update_blotter_form_for_staff.php?id_resident=<?= $view['id_resident'];?>">Update</a> 
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
                <td> <?= $view['narrative'];?> </td>
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

    <thead >
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
                            <a class="btn btn-primary" style="width: 90px; font-size: 17px; border-radius:30px;" href="update_blotter_form_for_staff.php?id_resident=<?= $view['id_resident'];?>">Update</a> 
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
                    <td> <?= $view['narrative'];?> </td>
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