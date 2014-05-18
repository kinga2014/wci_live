<div id="selectedSearcheds" class="modal hide fade">
	<div id="modal-inner">
		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			<img src="<?php echo $Assets->path("images", "close.png", $IsLive); ?>" />
		  </button>
		  <div class="modal-header">
		    <h3>House for lease - P100,000.00</h3>
		  </div>
		  <div class="modal-body">
			  	<script>
			  		
				  	function displayThumbnail(imgName) {
				  		$(document).ready(function() {
				  			$("#ads_img").removeAttr("src");
				  			
				  			var assets = "<?php echo $Assets->path("images", "", $IsLive); ?>";
				  			$("#ads_img").attr("src", assets+imgName);
				  		});
				  	}
				  	
			  	</script>
		  		<table border="0" width="95%" align="center">
		  			<tr>
		  				<td style="width:45%; padding: 5px;">
		  					<input type="hidden" name="txtImgSelected" id="txtImgSelected" />
		  					<img id="ads_img" src="<?php echo $Assets->path("images", "sample$item_id.png", $IsLive); ?>"; style="width: 338px; border: 1px solid #434343;" />
		  					<div id="img_thumbnail">
		  						
		  						<div id="t_cols1">
		  							<img id="tImg1" src="<?php echo $Assets->path("images", "sample$item_id.png", $IsLive); ?>"; style="width: 62px; border: 2px solid #434343;" onclick="displayThumbnail('sample<?php echo $item_id; ?>.png');" />
		  						</div>
		  						
		  						<div id="t_cols2">
		  							<img id="tImg2" src="<?php echo $Assets->path("images", "sample2.png", $IsLive); ?>" style="width: 62px; border: 2px solid #434343;" onclick="displayThumbnail('sample2.png');"  />
		  						</div>
		  						
		  						<div id="t_cols3">
		  							<img id="tImg3" src="<?php echo $Assets->path("images", "sample3.png", $IsLive); ?>" style="width: 62px; border: 2px solid #434343;" onclick="displayThumbnail('sample3.png');"  />
		  						</div>
		  						
		  						<div id="t_cols4">
		  							<img id="tImg4" src="<?php echo $Assets->path("images", "sample1.png", $IsLive); ?>" style="width: 62px; border: 2px solid #434343;" onclick="displayThumbnail('sample1.png');"  />
		  						</div>
		  						
		  						<div id="t_cols5">
		  							<img id="tImg5" src="<?php echo $Assets->path("images", "sample2.png", $IsLive); ?>" style="width: 62px; border: 2px solid #434343;" onclick="displayThumbnail('sample2.png');"  />
		  						</div>
		  						
		  					</div>
		  				</td>
		  				<td valign="top">
		  					<div style="margin-left: 10px;">
		  						<p>King Paulo Aquino</p>
			  					<p>Location: Olongapo City, Philippines</p>
			  					<p>Mobile: +63 918-123-1234</p>
			  					<p>Email: kingpauloaquino@mail.com</p>
		  					</div>
		  					
		  				</td>
		  			</tr>
		  		</table>
		  </div>
		  <div class="modal-footer" style="font-size: 14px; font-weight: 600;">
		        <a href="#" class="btn">Send SMS</a>
		        <a href="#" class="btn">Private Message</a>
		  </div>
	</div>
</div>
<script>
	$(document).ready(function () {
        $('#selectedSearcheds').modal('toggle');
    });
</script>"