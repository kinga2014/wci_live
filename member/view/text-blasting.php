
<div id="content"><h1 class="content-heading bg-white border-bottom">Text Blasting</h1>
<div class="innerAll spacing-x2">
	<!-- Widget -->
	<div class="widget widget-inverse">
		<div class="widget-body">
			<p>There are various form elements contained in FLAT PLUS, custom select controls, custom checkbox &amp; radio controls, custom input controls with &amp; without appended / prepended elements (icons, dropdowns, dropups, groups), toggle (on/off) buttons, icons &amp; many more.</p>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script> -->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"> 
  	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  	
	<script type="text/javascript">
	
	$(function() {
		//autocomplete
		$("#txtGroup").autocomplete({
			source: "../controller/autocomplete.php?uid=<?php echo $UserId; ?>&t=group",
			minLength: 1
		});	
		
		//autocomplete
		$("#txtCity").autocomplete({
			source: "../controller/autocomplete.php?t=cities",
			minLength: 1
		});	
		
		//autocomplete
		$("#txtProvince").autocomplete({
			source: "../controller/autocomplete.php?t=provinces",
			minLength: 1
		});	
	});
	
	
	$( document ).ready(function() {
	  	Numbers_Only("#txtCredits", true);
	  	Numbers_Only("#txtAccount", false);
	  	
	  	$("#txtGroup").show();
		$("#fupload").hide();
		$('#chkUpload').click(function(){
		    if (this.checked) {
		        $("#txtGroup").hide();
		    	$("#fupload").show();
		    }
		    else
			{
			    $("#txtGroup").show();
		   		$("#fupload").hide();
			}
		});
		
		$( "#chkUpload" ).tooltip();
	});
	
	
	</script>
	
	<!-- Widget -->
	<div class="widget widget-inverse">
		<!-- Widget -->
		<div class="widget row widget-inverse">
			
			<!-- Widget heading -->
			<div class="widget-head">
				<h4 class="heading">Text Blasting</h4>
			</div>
			
			<!-- // Widget heading END -->
			<div class="widget-body">
				<form class="form-horizontal" role="form">
					<div class="form-group">
					    <label class="col-sm-2 control-label">Group</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtGroup" placeholder="Group">
					       <input type="file" id="fupload" />
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">&nbsp;</label>
					    <div class="col-sm-10">
					       <input type="checkbox" id="chkUpload" title="File text should be like this [09171234567]" /> Upload [Text file contains list of number]
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Message 1 of 2</label>
					    <div class="col-sm-10">
					       <!-- <input type="text" class="form-control" id="txtAccount" placeholder="Account No. [ should be the mobile number ]" maxlength="11"> -->
					       <textarea class="form-control" style="height: 120px;"></textarea>
					       <span>160 characters</span>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Message 2 of 2</label>
					    <div class="col-sm-10">
					       <!-- <input type="text" class="form-control" id="txtAccount" placeholder="Account No. [ should be the mobile number ]" maxlength="11"> -->
					       <textarea class="form-control" style="height: 120px;"></textarea>
					       <span>160 characters</span>
					    </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
					       <button type="submit">Submit</button>
					    </div>
					</div>
				</form>
			</div>
			
		</div>
		<!-- // Widget END -->
		
	</div>
	<!-- // Widget END -->
	
	</div>
</div>	





