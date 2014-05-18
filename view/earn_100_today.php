<div id="selectedSearcheds" class="modal hide fade">
	<div id="modal-inner">
		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			<img src="<?php echo $Assets->path("images", "close.png", $IsLive); ?>" />
		  </button>
		  <div class="modal-header">
		    <h3>Earn P100 Today</h3>
		  </div>
		  
		  <script>
		  		$(document).ready(function() {
		  			$("#e_rows2").hide();
		  			$("#e_rows3").hide();
		  			
		  			$("#btn0").click(function() {
		  				$("#e_rows1").slideDown();
		  				$("#e_rows2").slideUp();
		  				$("#e_rows3").slideUp();
		  				
		  				$("#btn0").attr("class", "active");
		  				$("#btn1").removeAttr("class", "active");
		  				$("#btn2").removeAttr("class", "active");
		  			});
		  			
		  			$("#btn1").click(function() {
		  				$("#e_rows1").slideUp();
		  				$("#e_rows2").slideDown();
		  				$("#e_rows3").slideUp();
		  				
		  				$("#btn1").attr("class", "active");
		  				$("#btn2").removeAttr("class", "active");
		  				$("#btn0").removeAttr("class", "active");
		  			});
		  			
		  			$("#btn2").click(function() {
		  				$("#e_rows1").slideUp();
		  				$("#e_rows2").slideUp();
		  				$("#e_rows3").slideDown();
		  				
		  				$("#btn2").attr("class", "active");
		  				$("#btn0").removeAttr("class", "active");
		  				$("#btn1").removeAttr("class", "active");
		  			});
		  		});
		  		
		  </script>
		  
		  <div class="modal-body">
		  	<div id="e_rows1">
		  		<h3>Refer a Friend</h3>
		  		<p>… And we will give you a P100 to P150 earnings per referral.</p>
				<p>You can earn quick cash even before you make a deal on your ads.</p>
				<p>We will reward you with P100 earnings for every new subscriber who will avail our Premium Ads Combo (PAC).</p>
		  	</div>
		  	<div id="e_rows2">
				<h3>HOW IT WORKS?</h3>
				<table border="0" cellspacing="0" style="width: 100%;">
					<tr>
						<td valign="top" style="width: 30%; text-align: center;">
							<p style="margin-top: 40px; font-weight: bold;">We will give you P100</p>
							<p style="font-weight: bold;">If your friends buy our PAC.</p>
						</td>
						<td><img src="<?php echo $Assets->path("images", "flows.png", $IsLive); ?>" alt="" style="width: 320px;" /></td>
						<td valign="top" style="width: 30%; text-align: center; font-weight: bold;">
							<p style="margin-top: 170px; font-weight: bold;">Adverise weconex <br /> to your friends</p>
							<p style="font-weight: bold;">You & Your friends <br /> sign up for free.</p>
						</td>
					</tr>
				</table>
		  	</div>
		  	<div id="e_rows3">
		  		<h3>Reward Earnings Mechanics</h3>
		  		<p>
		  			<p style="font-weight: 600; margin-bottom: 0px;">Why should I refer a friend?</p>
					We are giving you an opportunity to earn aside from your deals and even before you make a deal from your ads.
					All you need is to sign up for free.
					Every time someone you have referred buys their first PAC, we will reward you with P100 earnings.
					We can also reward you up to P150 per successful referral depending on the total number of your referral.
		  		</p>
		  		<p>
		  			<p style="font-weight: 600; margin-bottom: 0px;">How to refer a friend to weconex?</p>
					There are many opportunities to refer a friend to weconex. We will give you a personal link, 
					which you can use to send invitations to friends using Twitter, Facebook or Email. 
					On your Personal Referral Page you can find your personal reference link, which you can post anywhere on 
					the internet to get people to join up.
		  		</p>
		  		<p>
		  			<p style="font-weight: 600; margin-bottom: 0px;">How to claim earnings?</p>
					You can transfer your earnings thru BPI Globe BanKO, Globe Gcash, Smart Money, etc. 
					(Please check the updated payments systems and fund transfer systems of weconex.)
		  		</p>
		  	</div>
		
		  </div>
		  <div class="modal-footer" style="font-size: 14px; font-weight: 600;">
		  		<a href="#" id="btn0" class="active">Refer a Friend!</a> |
		        <a href="#" id="btn1">How it works?</a> |
		        <a href="#" id="btn2">Reward Earnings Mechanics!</a>
		  </div>
	</div>
</div>
<script>
	$(document).ready(function () {
        $('#selectedSearcheds').modal('toggle');
    });
</script>"