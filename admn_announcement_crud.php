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
            <div class="card-header"> Event Announcement Form </div>
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

<?php 
    include('dashboard_sidebar_end.php');
?>
