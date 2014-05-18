<?php
	session_start(); 
    session_destroy();
	session_cache_expire();
	
	header("Location: ../admin/");
?>