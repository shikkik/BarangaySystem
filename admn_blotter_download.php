<?php

require_once("classes/conn.php");

//Get ID from GET (better POST but for easy debug...)
if (isset($_GET["blot_photo"])) {
	$blot_photo = $_GET["blot_photo"];
} else {
  echo "Wrong input";
  exit;
}

//Prepare PDO SQL
$q = $this->prepare("SELECT * FROM `tbl_blotter` WHERE `blot_photo`=:blot_photo");

//Add some data
$q->bindparam(":blot_photo", $blot_photo); //Filter user input, no sanitize necessary here

//Do the db query
$q->execute();

//If something found (always only 1 record!)
if ($q->rowCount() == 1) {
  
  	//Get the content of the record into $row
	$row = $q->fetch(PDO::FETCH_ASSOC); //Everything with id=$id should be in record buffer
  	
  	//This is the image blob mysql item  
  	$image = $row['image'];
  	
  	//Clean disconnect
  	$database->disconnect();
    
  	//Now start the header, caution: do not output any other header or other data!
  	header("Content-type: image/jpeg");
    header('Content-Disposition: attachment; filename="table_with_image_image'.$id.'.jpg"');
    header("Content-Transfer-Encoding: binary"); 
    header('Expires: 0');
    header('Pragma: no-cache');
    header("Content-Length: ".strlen($image));
    //Output plain image from db
	echo $image;
} else {
  //Nothing found with that id, output some error
  $database->disconnect();
  echo "No image found";
}

//No output and exceution further this point
exit();
?>