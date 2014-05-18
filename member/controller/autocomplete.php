<?php
	require_once '../controller/Queries.php';
	
	$Uid = isSet($_GET["uid"]) ? $_GET["uid"] : null;
	$type = isSet($_GET["t"]) ? $_GET["t"] : null;
	$result = null;
	
	switch ($type) {
		case 'group':
			$sql = "SELECT DISTINCT Gid FROM ptxt_gold_member_list WHERE Uid = $Uid;";
			$result = $Queries->Fetch_Array($sql, TRUE, TRUE);
			break;
		case 'cities':
			$sql = "SELECT city_name FROM ptxt_cities;";
			$result = $Queries->Fetch_Array($sql, TRUE, TRUE);
			break;
		case 'provinces':
			$sql = "SELECT province_name FROM ptxt_provinces;";
			$result = $Queries->Fetch_Array($sql, TRUE, TRUE);
			break;	
		default:
			break;
	}
	
    echo json_encode($result);
?>