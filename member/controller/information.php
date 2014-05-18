<?php

    $uid = $_SESSION["UserId"];
	$sql = "SELECT * FROM ptxt_users WHERE Email = '$uid' OR Mobile = '$uid';";
	$infos = $Queries->Fetch_Array($sql);
	$UserId = $infos["Id"];
?>