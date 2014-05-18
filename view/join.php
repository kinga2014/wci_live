
<style>

	.col-right .ads-form .ads-input button {
		
		padding: 10px;
		margin-top: 8px;
		border: 0px;
		width: 100px;
		height: 40px;
		font-size: 0.8em;
		font-weight: normal;
	}
	
	.col-right .ads-form .ads-input button {
		float: left;
	}
	
	.col-right .ads-form .ads-input #aloaders {
		margin-top: 15px;
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
			$( '#aSuccess' ).hide();
			$( '#aNSuccess' ).hide();
			
			$('#btnJoin').click(function() {
				
				var dt = dtLocal("");
				var fname = $('#txtFname').val();
				var lname = $('#txtLname').val();
				var email = $('#txtEmail').val();
				var mobile = $('#txtMobile').val();
				var username = $('#txtUsername').val();
				var password1 = $('#txtPassword1').val();
				var password2 = $('#txtPassword2').val();
				
				if(fname == "") {
					alert("Whoops,. Please check you first name.");
					return false;
				}
				
				if(lname == "") {
					alert("Whoops,. Please check you last name.");
					return false;
				}
				
				if(email == "") {
					alert("Whoops,. Please check you email address.");
					return false;
				}
				
				var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
				var valid = emailRegex.test(email);
				if (!valid) {
				   	alert("Whoops,. Email address is not valid.");
					return false;
				 }
				
				if(mobile == "" || mobile.length != 11) {
					alert("Whoops,. Invalid mobile number.");
					return false;
				}
				
				if(Prefixe(mobile) == 4)
				{
					alert("Whoops,. Mobile prefixe is not valid.");
					return false;
				} 
				
				if(username == "") {
					alert("Whoops,. Please check you user name.");
					return false;
				}
				
				if(password1 == "") {
					alert("Whoops,. Please check you password.");
					return false;
				}
				
				if(password1 != password2) {
					alert("Whoops,. Password and Re-type password did not match.");
					return false;
				}
				
				if(password1.length < 6) {
					alert("Whoops,. Your password must be at least 6 characters long. Please try another.");
					return false;
				}
				
				var url = "weconx/controller/registration.php";
				var data = "dt="+dt+"&fname="+fname+"&lname="+lname+"&email="+email+"&mobile="+mobile+"&username="+username+"&password="+password1;
				do_reg_worx("GET", url, data, "#aloaders", "#atext");
			});
			
			function do_reg_worx(type, url, data, loader, results) {
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
							$(results).html(result);
						}
					});
				});
			}

        });
        
    </script>

<div class="col-left float-left"></div>
<div class="col-right float-right" >
	
	<div class="ads-form">
		
		<h3>Basic information</h3>
		
		<div class="ads-input">
			<p class="ads-form-label">First Name</p>
			<input type="text" id="txtFname" placeholder="First name" />
		</div>
		
		<div class="ads-input">
			<p>Last Name</p>
			<input type="text" id="txtLname" placeholder="Last name" />
		</div>
		
		<div class="ads-input">
			<p>Email</p>
			<input type="text" id="txtEmail" placeholder="Email address" />
		</div>
		
		<div class="ads-input">
			<p>Mobile</p>
			<input type="text" id="txtMobile" maxlength="11" placeholder="Mobile number Ex.[ 09191234567 ]" onkeydown="return Numerics(event, 'txtMobile', false);" />
		</div>
		
		<h3>User Account</h3>
		
		<div class="ads-input">
			<p>Username</p>
			<input type="text" id="txtUsername" placeholder="Username" />
		</div>
		
		<div class="ads-input">
			<p>Password</p>
			<input type="password" id="txtPassword1" placeholder="Password" />
		</div>
		
		<div class="ads-input">
			<p>Re-type Password</p>
			<input type="password" id="txtPassword2" placeholder="Re-type password" />
		</div>	
		
		<div class="ads-input">
			<button id="btnJoin">Join</button>
			<div id="aloaders">
				<img id="imgId" src="<?php echo $Assets->path("images", "486.gif", $IsLive); ?>" style=" height: 16px;" />
				<p id="atext">Please wait...</p>
			</div>
			
		</div>
	</div>
	
</div> 






