<?php
	session_start(); 
	require_once 'AES_256.php';
	require_once 'HostIP.php';
	require_once 'Queries.php';
	require_once 'Prefixe.php';
	
	$UserId = isset($_SESSION["UserId"]) ? $_SESSION["UserId"] : null;
	$Uuid = isset($_GET["from"]) ? $_GET["from"] : null;
	$Number = isset($_GET["number"]) ? $_GET["number"] : null;
	$Message = isset($_GET["message"]) ? $_GET["message"] : "No Message :D";
	
	if($UserId == null || empty($Uuid))
	{
		echo "UserIdNull";
		exit;
	}
	
	$IP = $HostIP->GetIt();
	$Datetime = $_GET["txtDateTime"];
	list($id, $from) = explode(";", $Uuid);
	
	$Message1 = "1/2 from: $from, " . $Message . PHP_EOL . PHP_EOL. "Sent via PTXT4WRD";
	$Message2 = "2/2 Reply 2 dis msg 4 free, just select reply then type $id<space>Ur Msg & send! enjoy :D" . PHP_EOL . PHP_EOL. "Powered by PTXT4WRD";
	
	$EMessage1 = $AES256->Encrypt($Message1, "ABC12abc");
	$EMessage2 = $AES256->Encrypt($Message2, "ABC12abc");
	$result = $Queries->Execute("INSERT INTO ptxt_queued (UserId, UserIp, ToNumber, ToMessage, DateCreated, Status) VALUES 
	('$UserId', '$IP', '$Number', '$EMessage1', '$Datetime', 1),
	('PTXT4WRD', '21.21.21.21', '$Number', '$EMessage2', '$Datetime', 1);");
	
	if($result) {
		echo "<p><b>Message Sent!</b></p>";
	}
	else {
		echo "<p><b>Sending Failed!</b></p>";
	}
?>
