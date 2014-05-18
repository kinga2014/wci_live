<div id="selectedSearcheds" class="modal hide fade">
	<div id="modal-inner">
		
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
		<img src="<?php echo $Assets->path("images", "close.png", $IsLive); ?>" />
	  </button>
	  
	  <div class="modal-header">
	    <h3>Contact Us</h3>
	  </div>
	  
	  <div class="modal-body">
	  	
			<div id="contact-modal-column1"> <br />
				<p style="margin-left: 40px; font-weight: bold;">You can email us by using the form below.</p>
		  		<table border="0" cellpadding="1" cellspacing="0" width="90%" align="center">
		  			<tr>
		  				<td style="width: 50%;">
		  					<span>*</span>Your Full Name:<br />
		  					<input type="text" name="txtName" id="txtName" placeholder="Full Name" />
		  				</td>
		  				<td rowspan="5" align="center">
		  					<img src="<?php echo $Assets->path("images", "mail.png", $IsLive); ?>" alt="information" title="" style="width: 230px;" id="mailto">
		  				</td>
		  			</tr>
		  			<tr>
		  				<td>
		  					<span>*</span>Your Email:<br />
		  					<input type="text" name="txtEmail" id="txtEmail" placeholder="Email" />
		  				</td>
		  			</tr>
		  			<tr>
		  				<td>
		  					<span>*</span>Subject:<br />
		  					<input type="text" name="txtSubject" id="txtSubject" placeholder="Subject" />
		  				</td>
		  			</tr>
		  			<tr>
		  				<td>
		  					<span>*</span>Your Mesage:<br />
		  					<textarea id="txtMessage" name="txtMessage" placeholder="Message" rows="3"></textarea>
		  				</td>
		  			</tr>
		  			<tr>
		  				<td>
		  					Supporting Documents:<br />
		  					<div class="custom_file_upload">
								<input type="text" class="file" name="file_info" id="file_info" readonly >
								<div class="file_upload">
									<input type="file" id="file_upload" name="file_upload">
								</div>
							</div>
		  				</td>
		  			</tr>
		  		</table>
		  	</div>
		  	
			<div id="contact-modal-column2">
				<div class="rows1">
		  			<img src="<?php echo $Assets->path("images", "info.png", $IsLive); ?>" alt="information" title="" style="width: 230px;">
		  		</div>
		  		
		  		<div class="rows2">
		  			<br />
		  			<p>
			  			<span style="font-weight: 600; margin-bottom: 0px;">READ THIS FIRST:</span> 
			  			This form is exclusively for technical support issues and advertising concerns with regarding to the use of <span style="font-weight: 600; margin-bottom: 0px;">WECONEX</span>.
			  		</p>
			  		<p>
			  			Please <span style="margin-bottom: 0px;">DO NOT</span> contact us asking about the details of particular posted advertisement. For concerns like those, please contact the advertisement owner directly throught their advertisment page.
			  		</p>
			  		
			  		<button id="btnGoMessage">Leave a Message</button>
		  		</div>
		  		
		  	</div>
		  	
	  </div>
	  
	  <div class="modal-footer" style="font-size: 14px; font-weight: 600;">
	        <!-- <a href="#" class="btn">Submit</a> -->
	        <button id="btnSubmit" class="btn">Submit</button>
	  </div>
	  
	</div>
</div>

<script>

	$(document).ready(function(){
		$("#contact-modal-column2").show();
		$("#contact-modal-column1").hide();
		$("#btnSubmit").hide();
		
		$( "#file_upload" ).change(function() {
			var infos =  $(this).val();
		  	$("#file_info").val(infos);
		});
		
		$("#btnGoMessage").click(function() {
			$("#contact-modal-column1").show();
			$("#contact-modal-column2").hide();
			$("#btnSubmit").show();
		});
		
	});
	
	$(document).ready(function () {
        $('#selectedSearcheds').modal('toggle');
    });
</script>

















