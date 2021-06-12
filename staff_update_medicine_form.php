<?php
   error_reporting(E_ALL ^ E_WARNING);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   //$bmis->validate_admin();
   $view = $residentbmis->view_resident();
   $bmis->update_medicine();
   $id_medicine = $_GET['id_medicine'];
   $medicine = $residentbmis->get_single_medicine($id_medicine);
?>

<?php 
   include('dashboard_sidebar_start_staff.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
                
    <div class="row"> 
        <div class="col-md-2"> </div> 
        <div class="col-md-8"> 
        <div class="card">
        <div class="card-header bg-success text-white"> Update Medicine Inventory Data</div>
        <div class="card-body">
        <form method="post">
                <label class="mtop"> Medicine Item</label>
                <input name="item"  type="text" class="form-control" value="<?= $medicine['item']?>" placeholder="Enter medicine item">
                <br>
                <label class="mtop" >Date Manufactured </label>
                <input type="date" class="form-control" name="dateman"  placeholder="Enter date manufactured">

                <br>
                <br>

                <label class="mtop"> Shipped From </label>
                <input type="text" class="form-control" name="origin" value="<?= $medicine['origin']?>" placeholder="Enter shipment address">
                <br>
                <label class="mtop">Date In </label>
                <input type="date" class="form-control" name="datein">

                <br>
                <br>

                <label class="mtop">Date Out</label>
                <input type="date" class="form-control" name="dateout">
                <br>
                <label class="mtop">Stocks </label>
                <input type="text" class="form-control" name="stocks" value="<?= $medicine['stocks']?>" placeholder="Enter stocks">

                <br>
                <br>

                <label class="mtop">Remarks </label>
                <input type="text" class="form-control" name="remarks" value="<?= $medicine['remarks']?>" placeholder="Enter remarks">
                <br>
                <input type="hidden" class="form-control" name="addedby" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                <br>
                <br>

                <button class="btn btn-success" type="submit" name="update_medicine">Update </button>
                </form>
        </div>
        </div>
        </div>
        <div class="col-md-2"> </div>
    </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>
