<?php
    require_once 'Queries.php';
	
	$sql = "SELECT Id, Mobile, DateCreated FROM ptxt_gold_member_list WHERE Uid = 16;";
	$members = $Queries->Fetch_Array($sql, TRUE);
	$count = count($members);
	
	$Iid = 1;
	$isDouble = 0;
	$isSingle = 0;
	for ($i = 0; $i  < $count; $i++) {
		
		$Uid = $members[$i]["Id"];
		$Mobile = $members[$i]["Mobile"];
		$DateCreated = $members[$i]["DateCreated"];
		
		$format = 'm/d/Y h:i:s A';
		$date = DateTime::createFromFormat($format, $DateCreated);
		$dateCreates = $date->format('Y-m-d h:i:s A');
		
		$result = $Queries->Select("SELECT * FROM ptxt_wallet WHERE Uac = '$Mobile';");
		if ($result == 0) {
			
			$query = "INSERT ptxt_wallet (Id, Uid, Uac, Amount, Type, DateCreated) VALUES
			($Iid, $Uid, '$Mobile', '100.00', 26, '$dateCreates');";
			
			//echo "<br />" . $Queries->Execute($query);
			
			$Iid = $Iid + 1;
			$isSingle = $isSingle + 1;
		}
		else {
			$isDouble = $isDouble + 1;
		}
	}
	echo "<br /><br />" .$isDouble; 
	echo "<br />" . $isSingle;
?>