
<div id="content">
	
	<div class="bg-white">
		<h1 class="content-heading border-bottom" style="margin-left: 10px;">Manage Ads</h1>
	</div>
	
	<div class="innerAll spacing-x2">
	
	<?php 
		
		$sql = "SELECT Id, Uid, ads_title, ads_type, ads_status, ads_created
		 		FROM kpadb_user_post_ads WHERE Uid = '$uid';";
				
		// $sql = "SELECT Id, Uid, ads_title, ads_price, ads_description, locations, , ads_type, 
				// ads_img1, ads_img2, ads_img3, ads_img4, ads_img5, ads_status, ads_created
		 		// FROM kpadb_user_post_ads WHERE Uid = '1';";
				
		$result = $Queries->Fetch_Array( $sql, TRUE, FALSE );
		
		// var_dump($result);
		
		$count = count($result);
		$rows = $count / 4;
		if (strpos($rows,'.')) {
			$split = explode(".", $rows);
			$rows = $split[0] + 1;
		}
		
		$cads = 0;
		
		for ($row = 0; $row < $rows; $row++) {
			
			?><div class="row"><?php
						
						$ccount = 0;
						for ($cell = 1; $cell <= $count; $cell++) {
							if ($ccount == 5) {
								$cads = $cads +1;
								break;
							}
							?>
								<div class="col-md-3 col-sm-6">
									<div class="panel-3d" >
										<div class="front">
						
											<div class="widget text-center">
												<div class="widget-body padding-none">
													<div>
														<div class="innerAll <?php echo $result[$cads]["ads_type"] == 1 ? "bg-default" : "bg-premium"; ?>" style="height: 125px;">
															<p class="lead <?php echo $result[$cads]["ads_type"] == 1 ? "" : "text-white"; ?> strong margin-none"><?php echo $result[$cads]["ads_title"]; ?></p>
														</div>
														<div class="innerAll">
															<?php
															
																If($result[$cads]["ads_type"] == 1) {
																	?>
																	<a class="btn btn-default" href="?p=view-ads&aid=<?php echo $result[$cads]["Id"]; ?>">22 Days</a>
																	<?php
																}
																elseif ($result[$cads]["ads_type"] == 2) {
																	?>
																	<a class="btn btn-premium" href="?p=view-ads&aid=<?php echo $result[$cads]["Id"]; ?>">22 Days</a>
																	<?php
																}
																
															?>
														</div>
													</div>
												</div>
											</div>
						
										</div>
										
									</div>
								</div>
							<?php
							$ccount = $ccount +1;
							$cads = $cads +1;
						}
						
			?></div><?php
			
		}
	?>
	
	</div>
	
</div>