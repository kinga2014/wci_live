<?php

	require_once 'controller/Queries.php';
	$ds = DIRECTORY_SEPARATOR;  //1
	$storeFolder = 'upload';   //2
	$img_codes = $_GET["uuid"];
	
	 
	if (!empty($_FILES)) {
	 	
	    $tempFile = $_FILES['file']['tmp_name'];
	    $targetPath = dirname( __FILE__ ) . $ds . $storeFolder . $ds;
	    $img_name = $_FILES['file']['name'];
	    $targetFile =  $targetPath . $img_name;
	 
	 	$sql = "INSERT INTO kpadb_images (img_uuid, img_filename) VALUES ('$img_codes', '$img_name');";
	 	$Queries->Execute($sql);
	    move_uploaded_file( $tempFile, $targetFile );
		
	}
	
?> 