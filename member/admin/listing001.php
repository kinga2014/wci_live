<?php
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
			WHERE Uid = 16;";
	$members = $Queries->Fetch_Array($sql, TRUE);
	$count = count($members);
	//var_dump($members);
?>
<script>
	function deleteItem(Id) {
		var r = confirm("Are you sure? If you click ok, this member will be deleted permanently.");
		if (r == true) {
		  x = Id+" was deleted permanently.";
		}
		else {
		   x = Id+" was canceled to deleted.";
		}
		alert(x);
	}
</script>
<div id="content">
	<h1 class="content-heading bg-white border-bottom">Tables</h1>
<div class="innerAll spacing-x2">

<!-- Widget -->
<div class="widget widget-inverse">
	<div class="widget-head">
		<h4 class="heading">Member List</h4>
	</div>
	<div class="widget-body padding-bottom-none">
		<table class="dynamicTable tableTools table table-striped checkboxs">
			<!-- Table heading -->
			<thead>
				<tr>
					<!-- <th class="text-center">
						<div class="checkbox checkbox-single margin-none">
			                <label class="checkbox-custom">
			                    <i class="fa fa-fw fa-square-o"></i>
			                    <input type="checkbox">
			                </label>
			            </div>
					</th> -->
					<th>RefNo.</th>
					<th>Group</th>
					<th>AccountNo.</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>City</th>
					<th>Province</th>
					<th>Sponsor</th>
					<th>Registered</th>
					<th>Credits</th>
					<th class="text-right">Action</th>
				</tr>
			</thead>
			<!-- // Table heading END -->
			
			<!-- Table body -->
			<tbody id="members">
			<?php
				for( $i = 0; $i < $count; $i++ ) {
					$id = $members[$i]["Id"];
					?>
						<!-- Table row -->
						<tr class="gradeX">
							<!-- <td class="text-center">
								<div class="checkbox checkbox-single margin-none">
					                <label class="checkbox-custom">
					                    <i class="fa fa-fw fa-square-o"></i>
					                    <input type="checkbox" checked="checked">
					                </label>
					            </div>
							</td> -->
							<td><?php echo $members[$i]["Rid"]; ?></td>
							<td><?php echo $members[$i]["Gid"]; ?></td>
							<td><?php echo $members[$i]["Aid"]; ?></td>
							<td><?php echo $Function->Sentence_Cap(" ", $members[$i]["Firstname"]); ?></td>
							<td><?php echo $Function->Sentence_Cap(" ", $members[$i]["Lastname"]); ?></td>
							<td><?php echo $Function->Sentence_Cap(" ", $members[$i]["Town"]); ?></td>
							<td><?php echo $Function->Sentence_Cap(" ", $members[$i]["Province"]); ?></td>
							<td><?php echo $members[$i]["Sid"]; ?></td>
							<td><?php echo $members[$i]["DateCreated"]; ?></td>
							<td><?php echo "P" . number_format($members[$i]["Credits"], 2); ?></td>
							<td class="text-right">
								<div class="btn-group btn-group-xs ">
									<a href="?edit=<?php echo $id; ?>" class="btn btn-inverse"><i class="fa fa-pencil"></i></a>
									<a href="#" onclick="deleteItem(<?php echo $id; ?>);" class="btn btn-danger"><i class="fa fa-times"></i></a>
								</div>
							</td>
						</tr>
						<!-- Table row END -->
					<?php
				}
			?>
			</tbody>
		</table>
	</div>
</div>
<!-- // Widget END -->

</div>
</div>