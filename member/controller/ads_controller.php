<?php
	
	require_once 'Queries.php';
	$dt = $_GET["dt"];
	$uid = $_GET["uid"];
	$img_ads = $_GET["mcode"];
	$title = $_GET["title"];
	$tag_id = $_GET["tfor"];
	$tag_description = $_GET["ifor"];
	$price = $_GET["price"];
	$description = $_GET["desc"];
	$location = $_GET["loc"];
	$category_id = "N/A";
	$type = $_GET["type"];
	
	$sql = "INSERT INTO kpadb_user_post_ads (
		   		  	Uid,
		   		  	ads_img_uid,
		   		  	ads_title,
		   		  	ads_tag_Id,
		   		  	ads_itemforswap,
		   		  	ads_price,
		   		  	ads_description,
		   		  	ads_locations,
		   		   	ads_category,
		   		   	ads_type,
		   		   	ads_status,
		   		   	ads_created
		   		   ) VALUES ('$uid', '$img_ads', '$title', '$tag_id', '$tag_description', '$price', '$description', '$location', '$category_id', $type, 1, '$dt'); ";
	
	$result = $Queries->Execute($sql);
	if($result) {
	 	
		echo "Your ads has been successfully submited.";
	}
	else {
	   	
		echo "Your ads wasn't successfully submited.";
	}

?>