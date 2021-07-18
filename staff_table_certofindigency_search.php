<?php
	// require the database connection
	require 'classes/conn.php';
	if(isset($_POST['search_certofindigency'])){
		$keyword = $_POST['keyword'];
?>

<table class="table table-hover text-center table-bordered table-responsive" >
    
    <thead >
        <tr class="alert-info">
            <th> Actions</th>
            <th> Resident ID </th>
            <th> Surname </th>
            <th> First Name </th>
            <th> Middle Name </th>
            <th> Nationality </th>
            <th> House Number </th>
            <th> Street </th>
            <th> Barangay </th>
            <th> Municipality </th>
            <th> Purpose </th>
            <th> Date </th>
        </tr>
    </thead>

    <tbody>

        <?php
            
            $stmnt = $conn->prepare("SELECT * FROM `tbl_rescert` WHERE `lname` LIKE '%$keyword%' or  `mi` LIKE '%$keyword%' or  `fname` LIKE '%$keyword%' 
                or  `id_resident` LIKE '%$keyword%' or  `nationality` LIKE '%$keyword%' or  `houseno` LIKE '%$keyword%'
            or `street` LIKE '%$keyword%' or `brgy` LIKE '%$keyword%' or `municipal` LIKE '%$keyword%' or `date` LIKE '%$keyword%' or `purpose` LIKE '%$keyword%'");
            $stmnt->execute();
            
            while($view = $stmnt->fetch()){
        ?>
            <tr>
                <td>    
                    <form action="" method="post">
                        <a class="btn btn-primary" style="width: 90px; font-size: 17px; border-radius:30px;" href="indigency_form.php?id_resident=<?= $view['id_resident'];?>">Generate</a> 
                        <input type="hidden" name="id_indigency" value="<?= $view['id_indigency'];?>">
                    </form>
                </td>
                <td> <?= $view['id_resident'];?> </td> 
                <td> <?= $view['lname'];?> </td>
                <td> <?= $view['fname'];?> </td>
                <td> <?= $view['mi'];?> </td>
                <td> <?= $view['nationality'];?> </td>
                <td> <?= $view['houseno'];?> </td>
                <td> <?= $view['street'];?> </td>
                <td> <?= $view['brgy'];?> </td>
                <td> <?= $view['municipal'];?> </td>
                <td> <?= $view['purpose'];?> </td>
                <td> <?= $view['date'];?> </td>

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
        <tr class="alert-info">
        <th> Actions</th>
            <th> Resident ID </th>
            <th> Surname </th>
            <th> First Name </th>
            <th> Middle Name </th>
            <th> Nationality </th>
            <th> House Number </th>
            <th> Street </th>
            <th> Barangay </th>
            <th> Municipality </th>
            <th> Purpose </th>
            <th> Date </th>
        </tr>
    </thead>

    <tbody>
        <?php if(is_array($view)) {?>
            <?php foreach($view as $view) {?>
                <tr>
                    <td>    
                        <form action="" method="post">
                            <a class="btn btn-primary" style="width: 90px; font-size: 17px; border-radius:30px;" target="blank" href="indigency_form.php?id_resident=<?= $view['id_resident'];?>">Generate</a> 
                            <input type="hidden" name="id_indigency" value="<?= $view['id_indigency'];?>">
                        </form>
                    </td>
                    <td> <?= $view['id_resident'];?> </td> 
                    <td> <?= $view['lname'];?> </td>
                    <td> <?= $view['fname'];?> </td>
                    <td> <?= $view['mi'];?> </td>
                    <td> <?= $view['nationality'];?> </td>
                    <td> <?= $view['houseno'];?> </td>
                    <td> <?= $view['street'];?> </td>
                    <td> <?= $view['brgy'];?> </td>
                    <td> <?= $view['municipal'];?> </td>
                    <td> <?= $view['purpose'];?> </td>
                    <td> <?= $view['date'];?> </td>
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