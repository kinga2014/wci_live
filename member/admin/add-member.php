
<div id="content"><h1 class="content-heading bg-white border-bottom">Add Member</h1>
<div class="innerAll spacing-x2">
	<!-- Widget -->
	<div class="widget widget-inverse">
		<div class="widget-body">
			<p>There are various form elements contained in FLAT PLUS, custom select controls, custom checkbox &amp; radio controls, custom input controls with &amp; without appended / prepended elements (icons, dropdowns, dropups, groups), toggle (on/off) buttons, icons &amp; many more.</p>
		</div>
	</div>
	<!-- // Widget END -->
	
	<!-- <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script> -->
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
	});
	
	</script>
	
	<?php 
		
		if(isset($_GET["edit"])) {
			$id = $_GET["edit"];
			$sql = "SELECT 
					Id, Uid, Rid, Gid, Aid, Lastname, Firstname, Town, Province, Sid, Mobile, DateCreated, Status,
					
					((SELECT CASE
					WHEN SUM(Amount) > 0 THEN SUM(Amount) 
					ELSE 0 END AS Credit FROM ptxt_wallet WHERE Uac = Mobile AND Type = 26) 
					- 
					(SELECT CASE 
					WHEN SUM(Amount) > 0 THEN SUM(Amount) 
					ELSE 0 END AS Debit FROM ptxt_wallet WHERE Uac = Mobile AND Type = 27)
					) AS Credits
					
					FROM ptxt_gold_member_list
					WHERE Id = $id;";
			$members = $Queries->Fetch_Array($sql, TRUE);
			$count = count($members);
		}
		else {
			$newRefID = "";
			$random1 = rand(0, 9999999999);
			$random2 = rand(0, 9999999999);
			$random = substr($random1, 1, 6) . substr($random2, 2, 4);
			$sql = "SELECT * FROM ptxt_gold_member_list WHERE Uid = $UserId AND Rid = '$random';";
			$result_refif = $Queries->Select($sql);
			if ($result_refif == 0) {
				$newRefID = $random;
			}
			else {
				$random1 = rand(0, 9999999999);
				$random2 = rand(0, 9999999999);
				$random = substr($random1, 1, 6) . substr($random2, 2, 4);
				$result_refif = $Queries->Select($sql);
				if ($result_refif == 0) {
					$newRefID = $random;
				}
				else {
					?> <script> location.reload(); </script> <?php
				}
			}
		}
		
	?>
	
	<!-- Widget -->
	<div class="widget widget-inverse">
		<!-- Widget -->
		<div class="widget row widget-inverse">
			
			<!-- Widget heading -->
			<div class="widget-head">
				<h4 class="heading">Add Member</h4>
			</div>
			
			<!-- // Widget heading END -->
			<div class="widget-body">
				<form class="form-horizontal" role="form">
					<div class="form-group">
					    <label class="col-sm-2 control-label">Reference No.</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtRefNo" value="<?php echo $newRefID; ?>" placeholder="Reference No." readonly>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Group</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtGroup" placeholder="Group">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Account No.</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtAccount" placeholder="Account No. [ should be the mobile number ]" maxlength="11">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Firstname</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtFirstname" placeholder="Firstname">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Lastname</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtLastname" placeholder="Lastname">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">City</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtCity" placeholder="City">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Province</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtProvince" placeholder="Province">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Sponsor</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtSponsor" placeholder="Sponsor">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Credits</label>
					    <div class="col-sm-10">
					       <input type="text" class="form-control" id="txtCredits" placeholder="Credits [ should be with decimal point, I.e. 100.00 ]">
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





