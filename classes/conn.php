<?php
	
 
	$conn = new PDO( 'mysql:host=localhost;dbname=bmis', 'root', '');
	if(!$conn){
		die("Error: Failed to connect to database!");
	}

?>