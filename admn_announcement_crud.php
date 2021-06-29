<?php
   error_reporting(E_ALL ^ E_WARNING);
   ini_set('display_errors',0);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   $bmis->validate_admin();
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
    include('dashboard_sidebar_start.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->

    <div class="row"> 
        <div class="col-md-12"> 
            <h1 class="h3 mb-4 text-gray-800">Event Announcement Page</h1>
        </div>
    </div>

                
    <div class="row"> 
        <div class="col-md-6"> 
            <div class="card">
            <div class="card-header bg-primary text-white"> Event Announcement Form </div>
            <div class="card-body">
            <form method="post">
                <div class="row"> 
                    <div class="col">
                        <label>Announcement Message </label>
                        <textarea name="event" class="form-control" rows="6">Enter message here</textarea>
                    </div>
                </div>

                <br><br>

                <div class="row"> 
                    <div class="col"> 

                        <input type="hidden" name="start_date" value="<?= $cdate?>">
                        <input name="addedby" type="hidden" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">
                        <button type="submit" name="create_announce" class="btn btn-primary"> Submit Entry </button>
                    </div>
                </div>       
            </form>
            </div>
            </div>
        </div>

        <div class="col-md-6"> 

        <h5> Current Announcement Posted </h5>

        <br>
        <table class="table table-dark table-responsive">
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
                                <button class="btn btn-danger" type="submit" name="delete_announcement"> Delete </button>
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

    <br><br>

    <div class="row"> 
        <div class="col-md-12"> 
        <h5> Sample Output </h5>

        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong><h4>ANNOUNCEMENT!<h4></strong> <br> <p> <?= $view['event'];?> </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        </div>

        <span style="height: 750px;"> </span>   
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
