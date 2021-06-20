<?php
   error_reporting(E_ALL ^ E_WARNING);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   //$bmis->validate_admin();
   $bmis->create_medicine();
   $view = $bmis->view_medicine();
   $bmis->update_medicine();
   $bmis->delete_medicine();
   $medcount = $residentbmis->count_medicine();

?>

<?php 
    include('dashboard_sidebar_start_staff.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
                
    <div class="row"> 
        <div class="col-md-8"> 
        <div class="card">
        <div class="card-header bg-primary text-white"> Add New Medicine Item</div>
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

                <button class="btn btn-primary" type="submit" name="create_medicine"> Submit </button>
                </form>
        </div>
        </div>
        </div>

        <div class="col-md-4">
            <div class="card border-left-primary shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Medicine Inventory</div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $medcount?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-pills fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <br>
    <div class="row"> 
        <div class="col-md-12"> 
            <h1 class="h3 mb-4 text-gray-800">Medicine Inventory Data</h1>
            <table class="table table-dark">
            <form action="" method="post">
                <thead> 
                    <tr>
                        <th> Actions </th>
                        <th> ID </th>
                        <th> Medicine Item </th>
                        <th> Date Manufactured </th>
                        <th> Shipped From </th>
                        <th> Date Accepted</th>
                        <th> Distribution Date </th>
                        <th> Stocks </th>
                        <th> AddedBy </th>
                        
                    </tr>
                </thead>
                <tbody> 
                <?php if(is_array($view)) {?>
                    <?php foreach($view as $view) {?>
                        <tr>
                            <td>    
                            <form action="" method="post">
                                <a href="staff_update_medicine_form.php?id_medicine=<?= $view['id_medicine'];?>" class="btn btn-primary"> Update </a>
                            </form>
                            </td>
                            <td> <?= $view['id_medicine'];?> </td>
                            <td> <?= $view['item'];?> </td>
                            <td> <?= $view['dateman'];?> </td>
                            <td> <?= $view['origin'];?> </td>
                            <td> <?= $view['datein'];?> </td>
                            <td> <?= $view['dateout'];?> </td>
                            <td> <?= $view['stocks'];?> </td>
                            <td> <?= $view['addedby'];?> </td>
                            
                        </tr>
                    <?php }?>
                <?php } ?>
                </tbody>
            </form>
            </table>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 
    include('dashboard_sidebar_end.php');
?>
