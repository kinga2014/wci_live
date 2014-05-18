<?php 

	//if they DID upload a file...
	if (!empty($_FILES["file"])) {
		
		$myFile = $_FILES["file"];
		
	    if ($myFile["error"] !== UPLOAD_ERR_OK) {
	        echo "Failed";
	        exit;
	    }
	 
	 	$UPLOAD_DIR = "../upload/";
	    // ensure a safe filename
	    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
	 
	    // don't overwrite an existing file
	    $i = 0;
	    $parts = pathinfo($name);
	    while (file_exists($UPLOAD_DIR . $name)) {
	        $i++;
	        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
	    }
	 
	    // preserve file from temporary directory
	    $dir = $UPLOAD_DIR . $name;
	    $success = move_uploaded_file($myFile["tmp_name"], $dir);
		
	    if (!$success) { 
	        echo "Failed";
	    }else{
	    	 // set proper permissions on the new file
	    	chmod($UPLOAD_DIR . $name, 0644);
			echo $dir;
		}
	}
	else{
		echo "No files";
	}
?>