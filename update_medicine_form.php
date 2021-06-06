<?php
   error_reporting(E_ALL ^ E_WARNING);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   //$bmis->validate_admin();
   $view = $residentbmis->view_resident();
   $bmis->update_medicine();

?>

<?php 
    include('dashboard_sidebar_start.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
                
    <div class="row"> 
        <div class="col-md-2"> </div> 
        <div class="col-md-8"> 
        <div class="card">
        <div class="card-header"> Update Medicine Inventory Data</div>
        <div class="card-body">
        <form method="post">
                <label class="mtop"> Medicine Item</label>
                <input name="item"  type="text" class="form-control"  placeholder="Enter medicine item">
                <br>
                <label class="mtop" >Date Manufactured </label>
                <input type="date" class="form-control" name="dateman"  placeholder="Enter date manufactured">

                <br>
                <br>

                <label class="mtop"> Shipped From </label>
                <input type="text" class="form-control" name="origin" placeholder="Enter shipment address">
                <br>
                <label class="mtop">Date In </label>
                <input type="date" class="form-control" name="datein">

                <br>
                <br>

                <label class="mtop">Date Out</label>
                <input type="date" class="form-control" name="dateout">
                <br>
                <label class="mtop">Stocks </label>
                <input type="text" class="form-control" name="stocks" placeholder="Enter stocks">

                <br>
                <br>

                <label class="mtop">Remarks </label>
                <input type="text" class="form-control" name="remarks"  placeholder="Enter remarks">
                <br>
                <input type="hidden" class="form-control" name="addedby" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                <br>
                <br>

                <button class="btn btn-primary" type="submit" name="update_medicine"> Submit </button>
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
