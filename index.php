<!--
started code			-> April 11, 2014
web designer & developer 	-> king paulo aquino
email 				-> kingpauloaquino@mail.com
mobile				-> +63 917 325 4062
skype				-> king052188
linkedin			-> http://ph.linkedin.com/in/kingpauloaquino 
-->

<?php 
	require_once 'controller/assets-path.php';
	$IsLive = TRUE;
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
  
  <link href='<?php echo $Assets->path("images", "weconex_icon.png", $IsLive); ?>' rel='stylesheet' type='text/css'>
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <script src="http://code.jquery.com/jquery-1.10.1.js"></script>
   
  <!-- <script src="<?php echo $Assets->path("js", "jquery-2.0.3.min.js", $IsLive); ?>"></script> -->
  <script src="<?php echo $Assets->path("js", "jquery.easing.min.js", $IsLive); ?>"></script>
  <script src="<?php echo $Assets->path("js", "hover_pack.js", $IsLive); ?>"></script>
  <script src="<?php echo $Assets->path("js", "bootstrap.min.js", $IsLive); ?>"></script>
  <script src="<?php echo $Assets->path("js", "jquery.kinotice.js", $IsLive); ?>"></script>
  <script src="<?php echo $Assets->path("js", "weconex_ui.js", $IsLive); ?>"></script>
  <script src="<?php echo $Assets->path("js", "prefixe.js", $IsLive); ?>"></script>
  <script src="<?php echo $Assets->path("js", "DateTime.js", $IsLive); ?>"></script>
  <script src="<?php echo $Assets->path("js", "ptxt-jQueries.js", $IsLive); ?>"></script>
  
  <link href='<?php echo $Assets->path("css", "bluehost-fonts.css", $IsLive); ?>' rel='stylesheet' type='text/css'>
  <link href='<?php echo $Assets->path("css", "bluehost-fonts.css", $IsLive); ?>' rel='stylesheet' type='text/css'>
  <link href='<?php echo $Assets->path("css", "hover_pack.css", $IsLive); ?>' rel='stylesheet' type='text/css'>
  <link href='<?php echo $Assets->path("css", "bootstrap-combined.min.css", $IsLive); ?>' rel='stylesheet' type='text/css'>
  <link href='<?php echo $Assets->path("css", "developer.notify.css", $IsLive); ?>' rel='stylesheet' type='text/css'>
  
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
  <link href='<?php echo $Assets->path("css", "weconex-firefox.css", $IsLive); ?>' rel='stylesheet' type='text/css'>
<?php } elseif(get_user_browser() == "IE") { ?>
  <link href='<?php echo $Assets->path("css", "weconex-ie.css", $IsLive); ?>' rel='stylesheet' type='text/css'>
<?php } else { ?>
  <link href='<?php echo $Assets->path("css", "weconex.css", $IsLive); ?>' rel='stylesheet' type='text/css'>
<?php } ?>
  <link href='<?php echo $Assets->path("css", "dropdown.css", $IsLive); ?>' rel='stylesheet' type='text/css'>
  <?php
  		$devNotiContent = "";
  		if(IsSet($_GET["IsNotify"])) {
  			if($_GET["IsNotify"] == "true") {
  				$devNotiContent = "Need a Markerting Tool? | More Info: <a href='#'>http://txt4wrd.com</a>";
  				?>
  					<script src="<?php echo $Assets->path("js", "dev.notify.js", $IsLive); ?>"></script>
	  				<script>do_notify_users("<?php echo $url;?>");</script>
	  			<?php
  			}
  		}
  ?>

</head>
<body onload="msieversion();">
  <div>
  	<div id="top_notify">
  		<div id="top_content">
  			<p class="p_left"><?php echo $devNotiContent; ?></p>
  			<p class="p_right"> <a href="#" id="btn_hide">Hide</a> </p>
  		</div>
  	</div>
    <nav id="n_main">
    	
    	<div id="nav">
    		<div id="inner">
    			<div id="logo">
	    			<a href="#" onclick="MyLocations();">
	    				<img id="logo_img" src="<?php echo $Assets->path("images", "logo_weconex.png", $IsLive); ?>" alt="WECONEX" class="masterTooltip" title="We Connect & We Exchange." />
					</a>
	    		</div>
	    		
	    		<div id="nav_1">
	    			<ul>
				      <li><a href="#" class="btn_1">Post Free Ads</a></li>
				      <li><a href="#" class="btn_2">Rewards Plus</a></li>
				      <li><a href="#" class="btn_3">Buy Premium</a></li>
				    </ul>
	    		</div>
	    		
	    		<div id="search" class="search-wrapper cf">
					<input type="search" id="txtSearch" name="txtSearch" placeholder="Search..." />
					<!-- Clickable Nav -->
					<div class="click-nav">
						<ul class="no-js">
							<li>
								<a class="clicker" onclick="Do_Search('NoCriteria');">Search</a>
								<ul>
									<li><a href="#" onclick="Do_Search('Forum Topics');"> <img src="<?php echo $Assets->path("images", "side_dropdown2.png", $IsLive); ?>" width="10" /> Forum Topics</a></li>
									<li><a href="#" onclick="Do_Search('Item For Sale');"> <img src="<?php echo $Assets->path("images", "side_dropdown2.png", $IsLive); ?>" width="10" /> Item For Sale</a></li>
									<li><a href="#" onclick="Do_Search('Item For Swap');"> <img src="<?php echo $Assets->path("images", "side_dropdown2.png", $IsLive); ?>" width="10" /> Item For Swap</a></li>
									<li><a href="#" onclick="Do_Search('Want To Buy');"> <img src="<?php echo $Assets->path("images", "side_dropdown2.png", $IsLive); ?>" width="10" /> Want To Buy</a></li>
									<li class="liLast"><a href="#" onclick="Do_Search('Member');"> <img src="<?php echo $Assets->path("images", "side_dropdown2.png", $IsLive); ?>" width="10" /> Member</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- /Clickable Nav -->
				</div>
				
				<div id="nav_2">
	    			<ul>
				      <li><a href="?p=login" class="cls_login">Login</a></li>
				      <li><a href="?p=join-now" class="cls_join">Join Now</a></li>
				    </ul>
	    		</div>
    		</div>
    	</div>
    </nav>
    
    <div id="content"> 
    	<div id="before_main" class="before_main"></div>
    		<!-- <div id="ads_left">&nbsp</div> -->
    		<?php
						
				if(IsSet($_GET["p"])) {
					
					$page = $_GET["p"];
					switch ($page) {
						case 'join-now':
							include_once "view/join.php";
							break;
						case 'login':
							include_once "view/login.php";
							break;
					}
					
				}
				else {
					include_once "view/search-ads.php";
				}
				
			?>
	    	<!-- <div id="ads_right">&nbsp</div> -->
    </div>
    
   	<!-- <div style="height: 70px;"></div> -->
    
    
	<footer>
		<p style="float: left; margin-left: 10px; margin-top: 6px;">WECONEX &copy; <?php echo date("Y"); ?></p>
		<p style="float: right; margin-right: 10px; margin-top: 6px;">Powered by: WeConnect Inc.</p>
		<div id="context">
			<ul>
				<li><img src="<?php echo $Assets->path("images", "about.png", $IsLive); ?>" alt="About Us" title="About Us" id="fAbout" /> <!-- class="context-menu-one" --></li>
				<li><a href="?view=contact-us"><img src="<?php echo $Assets->path("images", "contact.png", $IsLive); ?>" alt="Contact Us" title="Contact Us" id="fContact" /></a> </li>
				<li><a href="?view=shift-mobiles"><img src="<?php echo $Assets->path("images", "mobile.png", $IsLive); ?>" alt="Mobile" title="Mobile" id="fMobile" /></a></li>
				<li><a href="?view=disclaimers"><img src="<?php echo $Assets->path("images", "disclaimer.png", $IsLive); ?>" alt="Disclaimer" title="Disclaimer" id="fDisclaimer" /></a> </li>
			</ul>
		</div>
  	</footer>
  </div>
  <!-- <script src="assets/js/weconex_modal.js"></script> -->
<?php
	if(IsSet($_GET["ads"])) {
		$item_id = $_GET["ads"];
		include 'view/item_selected.php';
	}
	
	if(IsSet($_GET["search"])) {
		$search = $_GET["search"];
		$criteria= "";
		if(IsSet($_GET["criteria"])) {
			$criteria = "Criteria: " . $_GET["criteria"];
		}
		include 'view/search.php';
	}
	
	if(IsSet($_GET["view"])) {
		$toggle = $_GET["view"];
		switch ($toggle) {
			case 'contact-us':
				include 'view/contacts.php';
				break;
			case 'earn-100-today':
				include 'view/earn_100_today.php';
				break;
			case 'shift-mobiles':
				include 'view/mobiles.php';
				break;
			case 'disclaimers':
				include 'view/disclaimers.php';
				break;
			case 'about-developer':
				include 'view/developer.php';
				break;
			default:
				break;
		}
	}
?>

<div id="weconex-more">
	<div id="weconex-about">
		<span id="about-close">Close</span>
		<h3>About</h3>
		<ul type="none">
		 	<li><a href="#" onclick="ItsBeingUpdated();"> <img src="<?php echo $Assets->path("images", "side_dropdown2.png", $IsLive); ?>" width="10" /> Company</a></li>
		 	<li><a href="#" onclick="ItsBeingUpdated();"> <img src="<?php echo $Assets->path("images", "side_dropdown2.png", $IsLive); ?>" width="10" /> Services</a></li>
		 	<li><a href="#" onclick="ItsBeingUpdated();"> <img src="<?php echo $Assets->path("images", "side_dropdown2.png", $IsLive); ?>" width="10" /> Opportunities</a></li>
		 	<li><a href="#" onclick="ItsBeingUpdated();"> <img src="<?php echo $Assets->path("images", "side_dropdown2.png", $IsLive); ?>" width="10" /> Policies</a></li>
		 </ul>
	</div>
</div>
<div id="important-message" style="display:none;">
	<p style="margin-top: -4px; text-align: center;">
		<a href="?view=earn-100-today">
			Earn P100 Today!<br/>
			Join Now for Free
		</a>
	</p>
</div>
</body>
</html>













