<?php
    error_reporting(E_ALL ^ E_WARNING);
    require('classes/staff.class.php');
    $userdetails = $bmis->get_userdata();
    $bmis->validate_admin();
    $view = $staffbmis->view_staff();
    $staffbmis->create_staff();
    $upstaff = $staffbmis->update_staff();
    $staffbmis->delete_staff();
    $staffcount = $staffbmis->count_staff();
?>

<?php 
    include('dashboard_sidebar_start.php');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-800">Barangay Staff Data</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card"> 
                <div class="card-header"> Add new Barangay Staff </div>
                <div class="card-body"> 
                <form method="post">
                    <label class="mtop"> Last Name</label>
                    <input type="text" class="form-control" name="lname"  placeholder="Enter last name">

                    <label class="mtop" >First Name </label>
                    <input type="text" class="form-control" name="fname"  placeholder="Enter first name">

                    <label class="mtop"> Middle Initial </label>
                    <input type="text" class="form-control" name="mi" placeholder="Enter middle initial">

                    <label class="mtop">Email </label>
                    <input type="email" class="form-control" name="email"  placeholder="Enter email">

                    <label class="mtop">Contact Number</label>
                    <input type="tel" class="form-control" name="contact" placeholder="Enter contact number">

                    <label class="mtop">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">

                    <label class="mtop">Position </label>
                    <input type="text" class="form-control" name="position"  placeholder="Enter position">

                    <label class="mtop"> Address </label>
                    <input type="text" class="form-control" name="address"  placeholder="Enter Address">

                    <label class="mtop">Age </label>
                    <input type="number" class="form-control" name="age" placeholder="Age">

                    <label class="mtop">Gender</label>
                    <select class="form-control" name="sex" id="sex">
                        <option value="Male">Male</opt ion>
                        <option value="Female">Female</option>
                    </select>
                                        
                    <input type="hidden" class="form-control" name="role" value="user">
                    <input type="hidden" class="form-control" name="addedby" value="<?= $userdetails['surname']?>, <?= $userdetails['firstname']?>">

                    <button class="btn btn-primary" type="submit" name="add_staff"> Add </button>
                </form>         
                </div>
            </div>
        </div>

        <div class="col-md-6>"> 
            <div class="card"> 
                <div class="card-body"> 
                    <h5> Number of Staffs Registered </h5>
                    <br>
                    <h5> <?= $staffcount?></h5>
                </div>
            </div>
        </div>
    </div>
                    
    <br>

    <div class="row"> 
        <div class="col-md-12">
           <table class="table table-dark table-responsive" id="dataTable" width="100%" cellspacing="0">
                <form action="" method="post">
                <thead> 
                    <tr>
                        <th> Actions </th>
                        <th> Email </th>
                        <th> Password </th>
                        <th> Surname </th>
                        <th> First name </th>
                        <th> Middle Name </th>
                        <th> Age </th>
                        <th> Sex </th>
                        <th> Address </th>
                        <th> Contact </th>
                        <th> Position </th>
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
                                <a href="update_staff_form.php?email=<?= $view['email'];?>" class="btn btn-primary"> Update </a>
                                <input type="hidden" name="email" value="<?= $view['email'];?>">
                                <button class="btn btn-danger" type="submit" name="delete_staff"> Delete </button>
                            </form>
                        </td>
                        <td> <?= $view['email'];?> </td>
                        <td> <?= $view['password'];?> </td>
                        <td> <?= $view['lname'];?> </td>
                        <td> <?= $view['fname'];?> </td>
                        <td> <?= $view['mi'];?> </td>
                        <td> <?= $view['age'];?> </td>
                        <td> <?= $view['sex'];?> </td>
                        <td> <?= $view['address'];?> </td>
                        <td> <?= $view['contact'];?> </td>
                        <td> <?= $view['position'];?> </td>
                        <td> <?= $view['role'];?> </td>
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