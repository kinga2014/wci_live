<?php
    
	if(IsSet($_GET["aid"])) {
		$ads_id = $_GET["aid"];
	}

?>

<div id="content"><h1 class="content-heading bg-white border-bottom">Manage Ads</h1>
<div class="innerAll spacing-x2">
	<!-- Widget -->
	<!-- <div class="widget widget-inverse">
		<div class="widget-body">
			<p>There are various form elements contained in FLAT PLUS, custom select controls, custom checkbox &amp; radio controls, custom input controls with &amp; without appended / prepended elements (icons, dropdowns, dropups, groups), toggle (on/off) buttons, icons &amp; many more.</p>
		</div>
	</div> -->
	<!-- // Widget END -->
	
	<!-- Widget -->
	<div class="widget widget-inverse">
		<!-- Widget -->
		<div class="widget row widget-inverse">
			
			<!-- Widget heading -->
			<div class="widget-head">
				<h4 class="heading">Post Ads</h4>
			</div>
			
			<script>
			
				function nCodes(Id, IsDateTime) {
					var dt = dtLocal(Id);
					
					var nCode = dt.replace('-', '').replace('-', '').replace(' ', '').replace(':', '').replace(':', '').replace(' ', '');
					if(IsDateTime) {
						nCode = dt;
					}
					return nCode;
				}
				
				var types = '1';
				var adsFor = '1';
				var dtCode = nCodes('', false);
				$(document).ready(function() {
					
					$( "#fmUpload" ).attr({
					  src: "uploads.php?type=1&uuid="+dtCode
					});
					
					$( "#itemForSwaps" ).hide();
					
					$('#ddlFor').change(function() {
						var value = $(this).val();
						if(value == "2" || value == "3") {
							$( "#itemForSwaps" ).slideDown(1000);
						}
						else {
							$( "#itemForSwaps" ).slideUp(1000);
						}
					});
					
					$('#ddlType').change(function() {
						
						var value = $(this).val();
						dtCode = dtCode = nCodes('', false);
						
						if(value == "1") {
							
							types = '1';
							$( "#fmUpload" ).attr({
							  src: "uploads.php?type=1&uuid="+dtCode
							});
							
						}
						else {
							
							types = '2';
							$( "#fmUpload" ).attr({
							  src: "uploads.php?type=2&uuid="+dtCode
							});
						}
					});
					
					
					$('#ddlFor').change(function() {
						 adsFor = $(this).val();
					});
				});	
				
				// posting free ads
				
				function post_ads_validation() {
					var uid = "<?php echo $uid; ?>";
					var dTime = nCodes('', true);
					var imgcode = dtCode;
					var title = document.getElementById("txtTitle").value;
					var price = document.getElementById("txtPrice").value;
					var desc = document.getElementById("txtDesc").value;
					var loc = document.getElementById("txtLocation").value;
					var itemForswap = document.getElementById("txtForSwap").value;
					
					if(title == "") {
						$( "#txtTitle" ).attr({
						  style: "background-color: #ffcccc;"
						});
					    return false;
					}
					
					if(adsFor == 2 || adsFor == 3) {
						if(itemForswap == "") {
							$( "#txtForSwap" ).attr({
							  style: "background-color: #ffcccc;"
							});
						    return false;
						}
					}
					
					if(price == "")
					{
						$( "#txtPrice" ).attr({
						  style: "background-color: #ffcccc;"
						});
					    return false;
					}
					
					if(desc == "")
					{
						$( "#txtDesc" ).attr({
						  style: "background-color: #ffcccc;"
						});
					    return false;
					}
					
					if(loc == "")
					{
						$( "#txtLocation" ).attr({
						  style: "background-color: #ffcccc;"
						});
					    return false;
					}
					
					var type = "GET";
					var url = "controller/ads_controller.php";
					var data = "uid="+uid+"&dt="+dTime+"&mcode="+imgcode+"&title="+title+"&tfor="+adsFor+"&ifor="+itemForswap+"&price="+price+"&desc="+desc+"&loc="+loc+"&type="+types;
					do_post_ads_worx(type, url, data);
				}
				
				function do_post_ads_worx(type, url, data) {
					$(document).ready(function(){
						$.ajax({
							type: type,
							url: url,
							data: data,
							cache: false,
							beforeSend: function () { 
								$('#loader').show();
							},
							success: function(returns) { 
								if (returns.indexOf("Your ads has been successfully submited.") !=-1) {
									alert(returns);
									location.reload();
								}
								else {
									alert(returns);
								}
							}
						});
					});
				}
				
				$(document).ready(function() {
					$('#btnPostAds').click(function() {
						post_ads_validation();
					});
				});	
			
			</script>
			
			<!-- // Widget heading END -->
			<div class="widget-body">
				<form class="form-horizontal" role="form">
					<div class="form-group">
					    <label class="col-sm-2 control-label">Title</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtTitle" placeholder="What are you selling or offering">
					    </div>
					</div>
					
					<div class="form-group">
					    <label class="col-sm-2 control-label">Tag</label>
					    <div class="col-sm-10">
					       <select id="ddlFor" class="form-control">
					       		<option selected="true" value="1">For Sale</option>
					       		<option value="2">For Swap</option>
					       		<option value="3">For Sale/Swap</option>
					       		<option value="4">Want to Buy</option>
					       </select>
					    </div>
					</div>
					
					<div class="form-group" id="itemForSwaps">
					    <label class="col-sm-2 control-label">Item to Swap</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtForSwap" placeholder="Item to Swap">
					    </div>
					</div>
					
					<div class="form-group">
					    <label class="col-sm-2 control-label">Price</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtPrice" placeholder="Price (25000.00)" onkeydown="return Numerics(event, 'txtGroup');" >
					    </div>
					</div>
					
					<div class="form-group">
					    <label class="col-sm-2 control-label">Description</label>
					    <div class="col-sm-10">
					       <textarea class="form-control" style="height: 120px;" id="txtDesc" placeholder="Description"></textarea>
					    </div>
					</div>
					
					<div class="form-group">
					    <label class="col-sm-2 control-label">Location</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtLocation" placeholder="Location">
					    </div>
					</div>
					
					<div class="form-group">
					    <label class="col-sm-2 control-label">Type</label>
					    <div class="col-sm-10">
					       <select id="ddlType" class="form-control">
					       		<option selected="true" value="1">Free [ 5 Images ]</option>
					       		<option value="2">Premium [ 10 Images ]</option>
					       </select>
					    </div>
					</div>
					
					<div class="form-group" id="pnl-photo">
					    <label class="col-sm-2 control-label">Photo</label>
					    <div class="col-sm-10">
					    	<iframe src="uploads.php?type=1&uuid=0001" class="form-control" id="fmUpload" style="height: 398px;"></iframe>
					    </div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
					       <a href="#" id="btnPostAds">Submit</a>
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





