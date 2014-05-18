<!--
started code			-> April 11, 2014
web designer & developer 	-> king paulo aquino
email 				-> kingpauloaquino@mail.com
mobile				-> +63 917 325 4062
skype				-> king052188
linkedin			-> http://ph.linkedin.com/in/kingpauloaquino 
-->

<?php 
	require_once '../controller/assets-path.php';
	$IsLive = FALSE;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <title>WeConex | Free Classifieds</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="kingpauloaquino@mail.com | http://ph.linkedin.com/in/kingpauloaquino">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  
  <link href='<?php echo $Assets->path("images", "weconex_icon.png", $IsLive, "../../"); ?>' rel='stylesheet' type='text/css'>
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
   <!-- <script src="http://code.jquery.com/jquery-1.10.1.js"></script> -->
   
  <script src="<?php echo $Assets->path("js", "jquery-2.0.3.min.js", $IsLive, "../../"); ?>"></script>
  <script src="<?php echo $Assets->path("js", "jquery.easing.min.js", $IsLive, "../../"); ?>"></script>
  <script src="<?php echo $Assets->path("js", "bootstrap.min.js", $IsLive, "../../"); ?>"></script>
  
  <link href='<?php echo $Assets->path("css", "bluehost-fonts.css", $IsLive, "../../"); ?>' rel='stylesheet' type='text/css'>
  <link href='<?php echo $Assets->path("css", "bootstrap-combined.min.css", $IsLive, "../../"); ?>' rel='stylesheet' type='text/css'>
  <link href='<?php echo $Assets->path("css", "developer.notify.css", $IsLive, "../../"); ?>' rel='stylesheet' type='text/css'>
  
<?php
function get_user_browser()
{
	$user_agent = $_SERVER['HTTP_USER_AGENT']; 
	if (preg_match('/MSIE/i', $user_agent)) {
		$browser = "IE";
	}
	elseif (preg_match('/Firefox/i', $user_agent)){
		$browser = "Mozilla Firefox";
	} 
	else {
		$browser = "Default";
	}
 	return $browser;
}

if(get_user_browser() == "Mozilla Firefox") { ?>
  <link href='assets/css/weconx-admin-default.css' rel='stylesheet' type='text/css'>
<?php } elseif(get_user_browser() == "IE") { ?>
  <link href='assets/css/weconx-admin-default.css' rel='stylesheet' type='text/css'>
<?php } else { ?>
  <link href='assets/css/weconx-admin-default.css' rel='stylesheet' type='text/css'>
<?php } ?>

  <?php
	$devNotiContent = "";
	if(IsSet($_GET["IsNotify"])) {
		if($_GET["IsNotify"] == "true") {
			$devNotiContent = "Need a Markerting Tool? | More Info: <a href='#'>http://txt4wrd.com</a>";
			?>
				<script src="<?php echo $Assets->path("js", "dev.notify.js", $IsLive, "../../"); ?>"></script>
  				<script>do_notify_users("<?php echo $url;?>");</script>
  			<?php
  			}
  		}
  ?>

</head>
<body>
<div id="main">
	
	<div id="nav">
		
		<div id="links">
			<div id="logo">
				<a href="#" class="urlImg"><img src="http://weconx.sytes.net/weconx/assets/images/logo_weconex.png" atl="WECONX" title="We Connect & We Exchange" /></a> 
			</div>
			<ul>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Advertisment</a></li>
				<li><a href="#">Message</a></li>
				<li><a href="#">Premium Ads</a></li>
			</ul>
			<div id="search">
				<input type="search" id="txtSearch" name="txtSearch" placeholder="Search" />
				<button id="btnSearch">Go</button>
			</div>
		</div>
		
	</div>
	
	<div id="section">
		<div id="col-left">sdfsdf</div>
		<div id="col-center">sdfsdf</div>
		<div id="col-right">sdfds</div>
	</div>
	<div id="footer">
	</div>
</div>
</body>
</html>













