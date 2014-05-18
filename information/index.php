<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Service Information | Weconx.com</title>
  <meta name="description" content="">
  <meta name="author" content="Administrator">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
  <link rel="stylesheet" href="bluehost-fonts.css" >
  <style>
  		
  		.main { 
  			width: 100%; 
  			font:normal 16px/1.25 bluehost,'Segoe UI','Gill Sans','Gill Sans MT',GillSans,'Trebuchet MS',Arial,sans-serif; 
  			text-transform: lowercase;
  		}
  		.main .styles { margin: 0 auto; width: 720px; margin-bottom: 5px; }
  		.main .paddings { padding: 1px; }
  		.main .tbl_paddings tr td { padding: 4px; }
  		.main .status { color: red; }
  		.main .status_accpt { color: green; }
  		.main .noti_style { background-color:#F7916F; color: #fff; }
  		.main table { border-collapse:collapse; }
  		.main table, th, td { border: 1px solid #dedede; }
  		.main a { color: #2e2e2e; text-decoration: none; }
		.main a:hover { text-decoration: underline; }
  		
  </style>
  <script src="jquery-1.10.1.js"></script>
  <script>
	$(document).ready(function() {
		$( '#btnPrint' ).click(function() {
			window.print();
			return false;
		});
	});
  </script>
  
  
  
</head>

<body>
  <div class="main">
  	
  	
    <div class="styles paddings">
      <div style="float: right;">
      	<a href="#" id="btnPrint">Print</a>
      </div>
   	  
      <h3>Project informations</h3>
      
      <table class="tbl_paddings" border="0" cellpadding="0" cellspacing="0" style="width: 100%;" align="center">
      	<tr>
      		<td colspan="4" style="font-weight: bold;">Weconx.com - Classified Ads</td>
      	</tr>
      	<tr>
      		<td width="15%">Status:</td>
      		<td>Inprogress</td>
      		<td align="right">Started:</td>
      		<td width="15%" align="right">04/09/2014</td>
      	</tr>
      	<tr>
      		<td>Payment Cycle:</td>
      		<td>Per Module Done</td>
      		<td align="right">Deposits:</td>
      		<td align="right">10,000.00</td>
      	</tr>
      	<tr>
      		<td colspan="4" align="center">
      			<a href="WE_CONNECT_PROJECT_PROPOSAL_PLAN_WITH_QOUTATION.pdf">Contract 1</a> |
      			<a href="MEMBER_USER_PAGE.pdf">Contract 2</a>
      		</td>
      	</tr>
      </table>
      
    </div>
    
    <div class="styles paddings">
      <h3>Module Informations</h3>
	   <table class="tbl_paddings" border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
	  	<tr>
	  		<td align="center" style="font-weight: bold;">Title</td>
	  		<td width="11%" align="center" style="font-weight: bold;">Started</td>
	  		<td width="11%" align="center" style="font-weight: bold;">Completed</td>
	  		<td width="11%" align="center" style="font-weight: bold;">Status</td>
	  		<td width="11%" align="center" style="font-weight: bold;">Gateway</td>
	  		<td width="13%" align="center" style="font-weight: bold;">Amount</td>
	  	</tr>
	  	<tr>
	  		<td>Templates & Logo</td>
	  		<td align="center">04/11/2014</td>
	  		<td align="center">04/26/2014</td>
	  		<td align="center" class="status_accpt">Accepted</td>
	  		<td align="center" >G-Cash</td>
	  		<td align="right" style="font-weight: bold;"><?php $tPrice1 = 12500; echo number_format($tPrice1, 2); ?></td>
	  	</tr>
	  	<tr class="noti_style">
	  		<td>Registration & Login</td>
	  		<td align="center">05/05/2014</td>
	  		<td align="center">05/12/2014</td>
	  		<td align="center" class="status">Unpaid</td>
	  		<td align="center" >N/A</td>
	  		<td align="right" style="font-weight: bold;"><?php $tPrice2 = 7500; echo number_format($tPrice2, 2); ?></td>
	  	</tr>
	  	<tr>
	  		<td>Members Dashboard | <span style="font-weight: bold;">Dashboard(A)</span></td>
	  		<td align="center">05/13/2014</td>
	  		<td align="center">----------</td>
	  		<td align="center" class="status">Unpaid</td>
	  		<td align="center" >N/A</td>
	  		<td align="right" style="font-weight: bold;"><?php $tPrice3 = 12500; echo number_format($tPrice3, 2); ?></td>
	  	</tr>
	  	<tr>
	  		<td>Advertisement | <span style="font-weight: bold;">Dashboard(B)</span></td>
	  		<td align="center">----------</td>
	  		<td align="center">----------</td>
	  		<td align="center" class="status">Unpaid</td>
	  		<td align="center" >N/A</td>
	  		<td align="right" style="font-weight: bold;"><?php $tPrice4 = 7500; echo number_format($tPrice4, 2); ?></td>
	  	</tr>
	  	<tr>
	  		<td>Premium Ads | <span style="font-weight: bold;">Dashboard(C)</span></td>
	  		<td align="center">----------</td>
	  		<td align="center">----------</td>
	  		<td align="center" class="status">Unpaid</td>
	  		<td align="center" >N/A</td>
	  		<td align="right" style="font-weight: bold;"><?php $tPrice5 = 6500; echo number_format($tPrice5, 2); ?></td>
	  	</tr>
	  	<tr>
	  		<td>Anonymous / Guest Users</td>
	  		<td align="center">----------</td>
	  		<td align="center">----------</td>
	  		<td align="center" class="status">Unpaid</td>
	  		<td align="center" >N/A</td>
	  		<td align="right" style="font-weight: bold;"><?php $tPrice6 = 7500; echo number_format($tPrice6, 2); ?></td>
	  	</tr>
	  	<tr>
	  		<td colspan="5" align="right">Total Price:</td>
	  		<td align="right"align="center" style="font-weight: bold;">
	  			<?php 
	  				$total_price = $tPrice1 + $tPrice2 + $tPrice3 + $tPrice4 + $tPrice5 + $tPrice6; 
	  				echo number_format($total_price, 2); 
	  			?>
	  		</td>
	  	</tr>
	  	<tr>
	  		<td colspan="5" align="right">Total Deposits:</td>
	  		<td align="right" align="center" style="font-weight: bold;">
	  			<?php 
	  				$deposits = 10000;
	  				echo "-" . number_format($deposits, 2); 
	  			?>
	  		</td>
	  	</tr>
	  	<tr>
	  		<td colspan="5" align="right">Total Down:</td>
	  		<td align="right" colspan="5" align="center" style="font-weight: bold;">
	  			<?php 
	  				$down_payment = 12500;
	  				echo "-" . number_format($down_payment, 2); 
	  			?>
	  		</td>
	  	</tr>
	  	<tr>
	  		<td colspan="5" align="right">Over All Down:</td>
	  		<td align="right" colspan="5" align="center" style="font-weight: bold;">
	  			<?php 
	  				$over_all_down = $deposits + $down_payment;
	  				echo "-" . number_format($over_all_down, 2); 
	  			?>
	  		</td>
	  	</tr>
	  	<tr>
	  		<td colspan="5" align="right">Total Remaining:</td>
	  		<td align="right" colspan="5" align="center" style="font-weight: bold;">
	  			<?php 
	  				$remaining_pays = $total_price - $over_all_down;
	  				echo number_format($remaining_pays, 2); 
	  			?>
	  		</td>
	  	</tr>
	  </table>
    </div>
    
    <footer class="styles">
     <p>&copy; <?php echo date("Y"); ?> - kingpauloaquino@mail.com | +63 916.593.4729 / +63 947.474.6282</p>
    </footer>
  </div>
</body>
</html>
