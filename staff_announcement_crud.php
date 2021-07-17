<?php
   error_reporting(E_ALL ^ E_WARNING);
   ini_set('display_errors',0);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   //$bmis->validate_admin();
   $bmis->create_announcement();
   $bmis->delete_announcement();
   $view = $bmis->view_announcement();
   $announcementcount = $bmis->count_announcement();

   $dt = new DateTime("now", new DateTimeZone('Asia/Manila'));
   $tm = new DateTime("now", new DateTimeZone('Asia/Manila'));
   $cdate = $dt->format('Y/m/d');   
   $ctime = $tm->format('H');

?>

<?php 
    include('dashboard_sidebar_start_staff.php');
?>
    <!-- Begin Page Content -->
    <div class="container">

    <!-- Page Heading -->

    <div class="row"> 
        <div class="col-md-12"> 
            <h1 class="mb-4 text-center">Event Announcement Page</h1>
        </div>
    </div>

    <hr>

    <br>
      
    <div class="row"> 
        <div class="col-sm-6"> 
            <div class="card">
                <div class="card-header bg-primary text-white" style="font-size: 20px;"> Event Announcement Form </div>
                <div class="card-body">
                    <form method="post">
                        <div class="row"> 
                            <div class="col">
                                <h6>
                                    <i class="fas fa-bullhorn"></i>
                                    Announcement Message
                                </h6>
                                <br>
                                <textarea name="event" class="form-control" rows="6" placeholder="Enter Message Here"></textarea>
                            </div>
                        </div>

                        <br>
                        <hr>

                        <div class="row"> 
                            <div class="col"> 
                                <input type="hidden" name="start_date" value="<?= $cdate?>">
                                <input name="addedby" type="hidden" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                                <button type="submit" name="create_announce" class="btn btn-primary" style="margin-left: 34%; border-radius: 15px; width: 150px; font-size: 18px;"> Submit Entry </button>
                            </div>
                        </div>       
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6"> 
            <div class="card">
                <div class="card-header bg-info text-white" style="font-size: 20px;"> Current Announcement Posted </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered table-responsive text-center">
                        <form action="" method="post">
                            <thead> 
                                <tr>
                                    <th> Actions </th>
                                    <th> Announcement </th>
                                    <th> Date Posted </th>
                                    <th> Added By </th>        
                                </tr>
                            </thead>
                            <tbody> 
                                <?php if(is_array($view)) {?>
                                    <?php foreach($view as $view) {?>
                                        <tr>
                                            <td>    
                                                <form action="" method="post">
                                                    <input type="hidden" name="id_announcement" value="<?= $view['id_announcement'];?>">
                                                    <button class="btn btn-danger" type="submit" name="delete_announcement"> Remove </button>
                                                </form>
                                            </td>
                                            <td> <?= $view['event'];?> </td>
                                            <td> <?= $view['start_date'];?> </td>
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
    </div>
    <br><br>

    <div class="row"> 
        <div class="col">             
            <div class="card">
                <div class="card-header bg-success text-white" style="font-size: 20px;"> Current Announcement Output </div>
                <div class="card-body">

                    <div class="alert alert-info alert-dismissible fade show" 
                        style="border-radius:30px;
                        margin-left:13%; 
                        width:75%;
                        height:180px;
                        color: white;
                        background-color:#3498DB;" role="alert">
                        <strong><h4>ANNOUNCEMENT!<h4><hr></strong> <br> <p> <?= $view['event'];?> </p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
<!-- responsive tags for screen compatibility -->
<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
<!-- custom css --> 
<link href="../BarangaySystem/customcss/regiformstyle.css" rel="stylesheet" type="text/css">
<!-- bootstrap css --> 
<link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
<!-- fontawesome icons -->
<script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
<script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>

<?php 
    include('dashboard_sidebar_end.php');
?>
