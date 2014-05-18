<?php
	function Details( $user_id ) {
		
		$sql = "SELECT 
				d.UID, d.firstname, d.lastname, d.email_address, 
				d.mobile_number, d.sponsor_id, d.placement_number, 
				d.status, d.date_created
				FROM kpadb_user_account AS a
				INNER JOIN kpadb_user_account_details AS d
				ON a.UID = d.Uid
				WHERE a.UID = '$user_id' OR a.username = '$user_id' OR d.email_address = '$user_id' OR d.mobile_number = '$user_id';";
				
		return $sql;
	}
?>