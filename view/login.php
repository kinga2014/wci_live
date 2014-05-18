
<style>

	.col-right .ads-form .ads-input button {
		
		padding: 10px;
		margin-top: 20px;
		border: 0px;
		width: 100px;
		height: 40px;
		color: #fff;
		font-size: 0.8em;
		font-weight: normal;
		background-color: #1fa2e4;
		
	}
	
	.col-right .ads-form .ads-input button {
		float: left;
	}
	
	.col-right .ads-form .ads-input #aloaders {
		margin-top: 27px;
		float: left;
	}
	
	.col-right .ads-form .ads-input #aloaders img {
		margin-left: 5px;
		margin-top: 5px;
		float: left;
	}
	
	.col-right .ads-form .ads-input #aloaders p {
		margin-left: 5px;
		float: left;
	}
	
	.col-right .ads-form .ads-input #aloaders .m_top {
		margin-top: -8px;
		color: #ed1125;
	}
	
	
</style>

<script language="javascript">

        $(document).ready(function() {
        	
        	var height = window.innerHeight;
        	var less_footer = height - 85;
        	
        	$( ".col-left" ).attr({
			  style: "height: " + less_footer + "px;"
			});
			
			$( ".col-right" ).attr({
			  style: "height: " + less_footer + "px;"
			});
			
			$( "#aloaders" ).hide();
			
			$('#btnLogin').click(function() {
				
				var dt = dtLocal("");
				var username = $('#txtUsername').val();
				var password = $('#txtPassword').val();
				
				if(username == "") {
					alert("Whoops,. Please check you user name.");
					return false;
				}
				
				if(password == "") {
					alert("Whoops,. Please check you password.");
					return false;
				}
				
				if(password.length < 6) {
					alert("Whoops,. Your password must be at least 6 characters long. Please try another.");
					return false;
				}
				
				clear_cache();
				
				var url = "controller/login.php";
				var data = "dt="+dt+"&username="+username+"&password="+password;
				do_login_worx("GET", url, data, "#aloaders", "#atext", username);
			});
			
			function do_login_worx(type, url, data, loader, results, username) {
				$(document).ready(function(){
					$.ajax({
						type: type,
						url: url,
						data: data,
						cache: false,
						beforeSend: function () { 
							$(loader).show();
						},
						success: function(result) {
							
							$( "#imgId" ).hide();
							
							if (result.indexOf("Successful") !=-1) {
								
								var redirect = "member/login_process.php?username="+username;
								clean_history(redirect);
							}
							
							$( "#atext" ).attr({
							  class: "m_top"
							});
						}
					});
				});
			}
			
			function clear_cache() { localStorage.clickcount = 0; localStorage.cho = ""; }
			function clean_history(url)
			{
			  	var Backlen = history.length;   
			  	history.go(-Backlen);
			  	clear_cache();
			  	Redirect(url);
			}
			
        });
        
    </script>

<div class="col-left float-left" ></div>
<div class="col-right float-right" >
	
	<div class="ads-form">
		
		<h3>User Account</h3>
		
		<div class="ads-input">
			<p>Username</p>
			<input type="text" id="txtUsername" placeholder="Username" />
		</div>
		
		<div class="ads-input">
			<p>Password</p>
			<input type="password" id="txtPassword" placeholder="Password" />
		</div>
		
		<div class="ads-input">
			<input type="checkbox" id="txtRememberMe" /> <span>Keep me signed in</span>
		</div>
		
		<div class="ads-input">
			<button id="btnLogin">Sign in</button>
			<div id="aloaders">
				<img id="imgId" src="<?php echo $Assets->path("images", "486.gif", $IsLive); ?>" style=" height: 16px;" />
				<p id="atext">Please wait...</p>
			</div>
		</div>
		
		<br /><br /><br /><br />
		<div class="ads-input">
			<a href="#">Can't access your account?</a>
		</div>
		
		<br />
		<div class="ads-input">
			Don't have WECONX account? <a href="#">Sign up now</a>
		</div>
		
	</div>
	
</div> 






