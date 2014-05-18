<?php
    
   require_once '../member/controller/Queries.php';
   
   $dt = $_GET["dt"];
   $user = $_GET["username"];
   $password = $_GET["password"];
   
   $IsUser = $Queries->Select("SELECT * FROM kpadb_user_account WHERE username = '$user' AND password = '$password';");
   if($IsUser != 0) {
   		echo "Successful";
   }
   else {
   		echo "Invalid username or password, <br /> please try again.";
   }
   
?>