<?php
   error_reporting(E_ALL ^ E_WARNING);
   require('classes/resident.class.php');
   $userdetails = $bmis->get_userdata();
   //$bmis->validate_admin();
   $id_resident = $_GET['id_resident'];
   $view = $residentbmis->get_single_blotter($id_resident);
   $residentbmis->update_blotter();

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
                <div class="card-header bg-primary text-white"> Update Peace and Order Data</div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data"> 
                            <div class="row"> 
                                <div class="col">
                                    <div class="form-group">
                                        <label for="lname">Last Name:</label>
                                        <input name="lname" type="text" class="form-control" value="<?= $view['lname']?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="fname">First Name:</label>
                                        <input name="fname" type="text" class="form-control" value="<?= $view['fname']?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="mname">Middle Name:</label>
                                        <input name="mi" type="text" class="form-control" value="<?= $view['mi']?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="age" class="mtop">Age </label>
                                        <input name="age" type="number" class="form-control" value="<?= $view['age']?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">            
                                        <label for="cno">Contact Number:</label>
                                        <input name="contact" type="text" maxlength="11" pattern="[0-9]{11}" class="form-control" value="<?= $view  ['contact']?>" >
                                    </div>
                                </div>
                            </div>            

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label> House No: </label>
                                        <input type="text" class="form-control" name="houseno"  
                                        placeholder="Enter House No." value="<?= $view['houseno']?>">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label> Street: </label>
                                        <input type="text" class="form-control" name="street"  
                                        placeholder="Enter Street" value="<?= $view['street']?>">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label> Barangay: </label>
                                        <input type="text" class="form-control" name="brgy"  
                                        placeholder="Enter Barangay" value="<?= $view['brgy']?>">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label> Municipality: </label>
                                        <input type="text" class="form-control" name="municipal" 
                                        placeholder="Enter Municipality" value="<?= $view['municipal']?>">
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col">
                                    <label>Supporting Evidence Photo:</label>
                                    <div class="custom-file form-group">
                                        <input type="file" onchange="readURL(this);" value="<?= $view['blot_photo']?>" class="custom-file-input" id="customFile" name="blot_photo" required>
                                        <label class="custom-file-label" for="customFile">Choose File Photo</label>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <label>Photo Display:</label>
                            <div class="row">
                                <div class="col">
                                    <img id="blah" src="http://placehold.it/470x350" alt="your image" style="margin-left: 20%;" />
                                </div>
                            </div>

                            <hr>


                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="report">Narrative Report:</label>
                                        <textarea class="form-control" rows="5" id="report" value="<?= $view['narrative']?>" name="narrative"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input name="id_resident" type="hidden" value="<?= $resident['id_resident']?>">
                                <a type="button" href="staff_blotterreport.php" class="btn btn-danger" 
                                style="width: 135px;
                                border-radius: 30px;
                                font-size: 18px;
                                color:white;" >Close</a>
                                <button type="submit" name="update_blotter" 
                                style="width: 135px;
                                border-radius: 30px;
                                font-size: 18px;" class="btn btn-success">Save changes</button>
                            </div>   
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"> </div>
    </div>
</div>

<!-- /.container-fluid -->

<!-- End of Main Content -->

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(470)
                    .height(350);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php 
    include('dashboard_sidebar_end.php');
?>
