<?php 

	session_start(); 
	// if(!isset($_SESSION["UserId"]) || $_SESSION["UserId"] == null) {
		// header("Location: ../");
	// }
	
	$pageSelected = "dashboard";
	if (isSet($_GET["p"])) {
		$pageSelected = $_GET["p"];
	}
	
	require_once '../controller/Queries.php';
	require_once '../controller/Function.php';
	require_once '../controller/information.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>WECONX MEMBER PAGE</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<link rel="shortcut icon" href="../images/ptxt_logo.ico">
	<?php
		if ($pageSelected == "member-list") {
			?>
				<!-- 
				<link rel="stylesheet/less" href="../assets/less/admin/module.admin.page.tables.less" />
				-->
				<!--[if lt IE 9]><link rel="stylesheet" href="../assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
				
				<?php if ($_GET["edit"] != null) {
					echo $_GET["edit"];
				} ?>
				
				<link rel="stylesheet" href="../assets/css/admin/module.admin.page.tables.min.css" />
				<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			    <!--[if lt IE 9]>
			      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
			    <![endif]-->
			<?php
		}
		else {
			?>
				<!-- 
				<link rel="stylesheet/less" href="../assets/less/admin/module.admin.page.index.less" />
				-->
				<!--[if lt IE 9]><link rel="stylesheet" href="../assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
				<link rel="stylesheet" href="../assets/css/admin/module.admin.page.index.min.css" />
				
				<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			    <!--[if lt IE 9]>
			      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
			    <![endif]-->
			<?php
		} 
	?>
	
	<script src="../jQuery/ptxt-jQueries.js"></script>
	<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.2"></script>
	<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.2"></script>
	<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.2"></script>
	<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.2"></script>
	<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.2"></script>
	<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.2"></script>
	<script src="../assets/components/library/jquery-ui/js/jquery-ui.min.js?v=v1.2.2"></script>
	<script src="../assets/components/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js?v=v1.2.2"></script>	
	
</head>
<body>

		<div class="navbar navbar-fixed-top navbar-primary main" role="navigation">
    
    <div class="navbar-header pull-left">
        <div class="navbar-brand">
            <div class="pull-left">
                <a href="" class="toggle-button toggle-sidebar btn-navbar"><i class="fa fa-bars"></i></a>
            </div>
            <a href="../admin/" class="appbrand innerL">
				<img src="http://weconx.sytes.net/weconx/assets/images/logo_weconex.png" style="height: 45px;" />
			</a>
        </div>
    </div>
   
    <ul class="nav navbar-nav navbar-right hidden-xs">
    	 <li><a href="" style="background-color: #1fa2e4; color: #fff;">Post Free Ads</a></li>
    	 <li><a href="" style="background-color: #accd40; color: #fff;">Rewards Plus</a></li>
    	 <li><a href="" style="background-color: #f3c53b; color: #fff;">Buy Premium</a></li>
    	 <ul class="nav navbar-nav navbar-left">
	        <li class=" hidden-xs">
	            <form class="navbar-form navbar-left " role="search">
	                <div class="input-group">
	                    <input type="text" class="form-control" placeholder="Type in here..."/>
	                    <div class="input-group-btn">
	                        <button type="submit" class="btn btn-inverse"><i class="fa fa-search"></i></button>
	                    </div>
	                </div>
	            </form>
	        </li>
	    </ul>
        <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="../assets/images/people/35/8.jpg" alt="" class="img-circle"/></a>
            <ul class="dropdown-menu list pull-right ">
                <li><a href="?p=profile">Your Profile <i class="fa fa-user pull-right"></i></a></li>
                <li><a href="?p=edit">Edit Account <i class="fa fa-pencil pull-right"></i></a></li>
                <li><a href="?p=get-help">Get Help <i class="fa fa-question-circle pull-right"></i></a></li>
                <li><a href="../admin/logout">Log out <i class="fa fa-sign-out pull-right"></i></a></li>
            </ul>
        </li>
        <li><a href="../admin/logout" class="menu-icon"><i class="fa fa-sign-out"></i></a></li>
    </ul>
</div>

<div id="menu" class="hidden-print hidden-xs">
	<div class="sidebar sidebar-inverse">
		<div class="user-profile media innerAll">
			<a href="" class="pull-left"><img src="../assets/images/people/50/8.jpg" alt="" class="img-circle"><span class="badge badge-primary"></span></a>
			<div class="media-body">
				<a href="" class="strong">King Paulo C. Aquino</a>
				<p>09173254062</p>
				<p class="text-success" style="margin-top: -7px;"><i class="fa fa-fw fa-circle"></i> Online</p>
			</div>
			<!-- <ul>
				<li><a href=""><i class="fa fa-fw fa-user"></i></a></li> <!-- class="active" 
				<li><a href=""><i class="fa fa-fw fa-envelope"></i></a></li>
				<li><a href="logout.php"><i class="fa fa-fw fa-lock"></i></a></li>
			</ul> -->
		</div>
		<div class="sidebarMenuWrapper">
			<ul class="list-unstyled">
				<li class='active'><a href="../admin/"><i class=" icon-projector-screen-line"></i><span>Dashboard</span></a></li>
				
				<li class="hasSubmenu">
					<a href="#" data-target="#menu-style-Advertisement" data-toggle="collapse"><i class="icon-user-2"></i><span>Advertisement</span></a>
					<ul class="collapse" id="menu-style-Advertisement">
						<li><a href="../admin/?p=manage-ads"><i class="icon-compose"></i><span>Manage Ads</a></li>
						<li><a href="../admin/?p=free-ads"><i class="icon-group"></i><span>Free Ads</a></li>
						<li><a href="../admin/?p=premium-ads"><i class="icon-group"></i><span>Premium Ads</a></li>
						<li><a href="../admin/?p=active-ads"><i class="icon-group"></i><span>Active Ads</a></li>
					</ul>
				</li>
				
				<li class="hasSubmenu">
					<a href="#" data-target="#menu-style-Messaging" data-toggle="collapse"><i class="icon-user-1"></i><span>Messaging</span></a>
					<ul class="collapse" id="menu-style-Messaging">
						<li><a href="../admin/add-member"><i class="icon-compose"></i><span>Write</a></li>
						<li><a href="../admin/member-list"><i class="icon-group"></i><span>Inbox</a></li>
						<li><a href="../admin/member-list"><i class="icon-group"></i><span>Sent Items</a></li>
					</ul>
				</li>	
				<!-- <li><a href="support_tickets.html?lang=en"><i class="icon-ticket"></i><span>Support Tickets</span></a></li> -->
				<!-- <li><a href="surveys_multiple.html?lang=en"><i class="icon-bulleted-list"></i><span>Survey</span></a></li>
				<li><a href="events.html?lang=en"><i class="icon-time-clock"></i><span>Events</span></a></li>
				<li><a href="contacts.html?lang=en"><i class="icon-group"></i><span>Contacts</span></a></li>
				<li><a href="maps_google.html?lang=en"><i class="icon-map-location-fill-2"></i><span>Maps</span></a></li>
				<li><a href="gallery.html?lang=en"><i class="icon-film-strip"></i><span>Media &amp; Carousels</span></a></li> -->
				
				<li class="hasSubmenu">
					<a href="#" data-target="#collapse-menu-Premium" data-toggle="collapse"><i class="icon-settings-wheel-fill"></i><span>WECOIN Rewards</span></a>
					<ul class="collapse" id="collapse-menu-Premium">
						<li><a href="../admin/balance"><i class="icon-bulleted-list"></i><span>Available</span></a></li>
						<li><a href="../admin/buy-credits"><i class="icon-ticket"></i><span>Buy Premium Credits</span></a></li>
						<li><a href="../admin/transfer-credits"><i class="icon-compose"></i><span>Transfer Premium Credits</span></a></li>
						<li><a href="../admin/transaction-history"><i class="icon-folder-add"></i><span>Transaction History</span></a></li>
					</ul>
				</li>
				
				<!-- <li class="hasSubmenu">
					<a href="#" data-target="#collapse-menu-PTXT4WRD" data-toggle="collapse"><i class="icon-settings-wheel-fill"></i><span>PTXT4WRD</span></a>
					<ul class="collapse" id="collapse-menu-PTXT4WRD">
						<li><a href="../admin/balance"><i class="icon-bulleted-list"></i><span>Balance</span></a></li>
						<li><a href="../admin/buy-credits"><i class="icon-ticket"></i><span>Buy Credits</span></a></li>
						<li><a href="../admin/transaction-history"><i class="icon-folder-add"></i><span>Text Blasting</span></a></li>
						<li><a href="../admin/transfer-credits"><i class="icon-compose"></i><span>Transfer Credits</span></a></li>
						<li><a href="../admin/transaction-history"><i class="icon-folder-add"></i><span>Transaction History</span></a></li>
					</ul>
				</li> -->
				
				
				<!-- <li class="hasSubmenu">
					<a href="#" data-target="#forms-menu" data-toggle="collapse"><i class="icon-compose"></i><span>Forms</span></a>
					<ul class="collapse" id="forms-menu">
						<li><a href="form_wizards.html?lang=en">Form Wizards</a></li>
						<li><a href="form_elements.html?lang=en">Form Elements</a></li>
						<li><a href="form_validator.html?lang=en">Form Validator</a></li>
						<li><a href="file_managers.html?lang=en">File Managers</a></li>
					</ul>
				</li>
				
				<li class="hasSubmenu">
					
					<a href="#" data-target="#collapse-menu-pages" data-toggle="collapse"><i class="icon-note-pad"></i><span>Pages</span></a>
					<ul class="collapse " id="collapse-menu-pages">
					
						<li><a href="email.html?lang=en"><i class=" icon-inbox-fill-1"></i><span>Inbox</span></a></li>
						<li class="hasSubmenu">
							<a href="#" data-target="#financial" data-toggle="collapse"><i class="icon-graph-up-1"></i><span>Financial</span></a>
							<ul class="collapse" id="financial">
								<li><a href="finances.html?lang=en">Finances</a></li>
								<li><a href="invoice.html?lang=en">Invoice</a></li>
								<li><a href="bookings.html?lang=en">Bookings</a></li>
							</ul>
						</li>
						<li class="hasSubmenu">
							<a href="#" data-target="#medical" data-toggle="collapse"><i class="icon-medical-symbol-fill"></i> Medical</a>
							<ul class="collapse" id="medical">
								<li><a href="medical_overview.html?lang=en">Overview</a></li>
								<li><a href="medical_patients.html?lang=en">Patients</a></li>
								<li><a href="medical_appointments.html?lang=en">Appointments</a></li>
								<li><a href="medical_memos.html?lang=en">Memos</a></li>
								<li><a href="medical_metrics.html?lang=en">Metrics</a></li>
							</ul>
						</li>
						<li > <a href="social.html?lang=en"> <i class="icon-user-1"></i><span>Social</span></a></li>
						
						<li class="hasSubmenu">
							<a href="#" data-target="#shop" data-toggle="collapse"><i class="icon-shopping-cart"></i>Online Shop</a>
							<ul class="collapse " id="shop">
								<li><a href="shop_edit_product.html?lang=en">Add product</a></li>
								<li><a href="shop_products.html?lang=en">Products</a></li>
							</ul>
						</li>
						<li class="hasSubmenu">
							<a href="#" data-target="#account" data-toggle="collapse"><i class="icon-shopping-cart"></i>Account</a>
							<ul class="collapse" id="account">
									<li><a href="login.html?lang=en">Login</a></li>
								<li><a href="signup.html?lang=en">Signup</a></li>
								<li><a href="my_account.html?lang=en">Edit account</a></li>
							</ul>
						</li>
						<li><a href="ratings.html?lang=en"><i class="icon-tv-star"></i><span>Ratings</span></a></li>
						<li> <a href="error.html?lang=en"> <span>Error</span></a></li>
					</ul>
				</li> -->
			
			</ul>
		</div>
	</div>
</div>
	
	<?php
		switch ($pageSelected) {
			case 'account':
				include 'dashboard.php';
				break;
			case 'manage-ads':
				include 'manage-ads.php';
				break;
			default:
				include 'dashboard.php';
				break;
		}
		
	?>


<!-- // Content END -->
<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->
<div id="footer" class="hidden-print">
	<!--  Copyright Line -->
	<div class="copy">WECONX &copy; <?php echo date("Y"); ?></div>
	<!--  End Copyright Line -->
</div>
<!-- // Footer END -->
	
</div>
<!-- // Main Container Fluid END -->
	
<!-- Global -->
<script>
var basePath = '',
	commonPath = '../assets/',
	rootPath = '../',
	DEV = false,
	componentsPath = '../assets/components/';

var primaryColor = '#cb4040',
	dangerColor = '#b55151',
	infoColor = '#466baf',
	successColor = '#8baf46',
	warningColor = '#ab7a4b',
	inverseColor = '#45484d';

var themerPrimaryColor = primaryColor;
</script>

<script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.2"></script>
<script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.2.2"></script>
<script src="../assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.2"></script>
<script src="../assets/components/core/js/animations.init.js?v=v1.2.2"></script>

<?php 
	
	if($_GET["p"] == "member-list"){
		?>
			<script src="../assets/components/modules/admin/tables/datatables/assets/lib/js/jquery.dataTables.min.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/tables/datatables/assets/lib/extras/TableTools/media/js/TableTools.min.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/tables/datatables/assets/lib/extras/ColVis/media/js/ColVis.min.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/tables/datatables/assets/custom/js/DT_bootstrap.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/tables/datatables/assets/custom/js/datatables.init.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/forms/elements/fuelux-checkbox/fuelux-checkbox.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/tables/classic/assets/js/tables-classic.init.js?v=v1.2.2"></script>
		<?php
	}
	else {
		?>
			<script src="../assets/components/modules/admin/charts/flot/assets/lib/jquery.flot.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/charts/flot/assets/lib/jquery.flot.resize.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/charts/flot/assets/lib/plugins/jquery.flot.tooltip.min.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/charts/flot/assets/custom/js/flotcharts.common.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-simple.init.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-simple-bars.init.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/widgets/widget-chat/assets/js/widget-chat.js?v=v1.2.2"></script>
			<script src="../assets/components/plugins/slimscroll/jquery.slimscroll.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/forms/elements/bootstrap-datepicker/assets/lib/js/bootstrap-datepicker.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/forms/elements/bootstrap-datepicker/assets/custom/js/bootstrap-datepicker.init.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/charts/easy-pie/assets/lib/js/jquery.easy-pie-chart.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/charts/easy-pie/assets/custom/easy-pie.init.js?v=v1.2.2"></script>
			<script src="../assets/components/modules/admin/widgets/widget-scrollable/assets/js/widget-scrollable.init.js?v=v1.2.2"></script>
		<?php
	} 
?>

<script src="../assets/components/plugins/holder/holder.js?v=v1.2.2"></script>
<script src="../assets/components/core/js/sidebar.main.init.js?v=v1.2.2"></script>
<script src="../assets/components/core/js/sidebar.collapse.init.js?v=v1.2.2"></script>
<script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.2"></script>
<script src="../assets/components/core/js/core.init.js?v=v1.2.2"></script>	
</body>
</html>
















