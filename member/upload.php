<?php

	require_once 'controller/Queries.php';
	$img_codes = $_GET["uuid"];
	$local_path = "C:\\WECONX\\WWW\\wci.bak\\OneDrive\\images\\";
	 
	if (!empty($_FILES)) {
	 	
	    $tempFile = $_FILES['file']['tmp_name'];
	    $targetPath = $local_path;
	    $img_name = $_FILES['file']['name'];
		
		$min_rand = rand(0,1000);
		$max_rand = rand(100000000000,10000000000000000);
		$name_file = rand($min_rand,$max_rand);
		
		$ext = end(explode(".", $img_name));
		$newfilename =  "weconx_img_" . $img_codes . "_" . $name_file.".".$ext;
	    $targetFile =  $targetPath . $newfilename;
	 	$sql = "INSERT INTO kpadb_images (img_uuid, img_filename) VALUES ('$img_codes', '$newfilename');";
		
	 	$Queries->Execute($sql);
	    move_uploaded_file( $tempFile, $targetFile );
	}
	
?> 