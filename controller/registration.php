<?php

   require_once '../member/controller/Queries.php';
   
   $dt = $_GET["dt"];
   $fname = $_GET["fname"];
   $lname = $_GET["lname"];
   $email = $_GET["email"];
   $mobile = $_GET["mobile"];
   $user = $_GET["username"];
   $password = $_GET["password"];
   
   $IsUser = $Queries->Select("SELECT * FROM kpadb_user_account WHERE username = '$user';");
   
   
   if ($IsUser == 0) {
   		
	   $sql = "INSERT INTO kpadb_user_account (username, password, status, last_login) VALUES ('$user', '$password', '1', '$dt')";
	   $result = $Queries->Execute($sql);
	   
	   if($result) {
	   	
		   $uid = $Queries::$last_Id;
		   $sql = "INSERT INTO kpadb_user_account_details (UID, firstname, lastname, email_address, mobile_number, sponsor_id, placement_number, status, date_created) VALUES 
		   		  ('$uid', '$fname', '$lname', '$email', '$mobile', '0', '0', '1', '$dt')";
		   $result = $Queries->Execute($sql);
		   
		   if($result) {
		   		echo "You are successfully registered.";
				?> 
					<!-- <script src="http://code.jquery.com/jquery-1.10.1.js"></script>
					<script>
						
						$(document).ready(function(){
							var fromEmail = "donot-reply@weconx.com";
							var toEmail = "<?php echo $email; ?>";
							var subject = "Verifying Email Address";
							var message = "Thank you, for registering in our web site.";
							
							var url = "http://weconx.sytes.net/APIMail/";
							var data = "from="+fromEmail+"&to="+toEmail+"&subject="+subject+"&message="+message;
							
			    			do_email('GET', url, data);
						});
						
						function do_email(type, url, data) {
							$(document).ready(function(){
								$.ajax({
									type: type,
									url: url,
									data: data,
									cache: false,
									success: function(result) {
										document.getElementById("txtResult").innerHTML = result;
									}
								});
							});
						}

					</script>
					<p id="txtResult"></p> -->
				<?php
				
		   }
		   else {
		   	
		   		$result = $Queries->Execute("DELETE FROM kpadb_user_account UID = $uid;");
		   		echo "Not Successful";
		   }
	   }
		
   }
   else {
   		
		echo "Username already existing.";
   }
?>
