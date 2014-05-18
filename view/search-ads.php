<div id="main">
<div id="center">
	<div id="context">
		<script>
								
			$(document).ready(function() {
				$('.images_ads').hide();
				$('.images_ads').each( function(){
				    $(this).fadeIn(3000);
				});
			});
			
		</script>
		
		<!-- first big images -->
		<?php
			for ($i=1; $i <= 3; $i++) {
			?>
			<div class="img1">
				<div style="height: 245px;">
					<center>
					<a href="?ads=<?php echo $i; ?>">
						<img class="images_ads" src="<?php echo $Assets->path("images", "sample$i.png", $IsLive); ?>" style="width: 311px; height: 233px; margin-top: 5px; border-bottom: 1px solid #8e8e8e;" />
					</a>
					</center>
				</div>
				<a href="?ads=<?php echo $i; ?>">
					<span class="items_details">
						<span>House For Lease</span> <br />
						<span class="ads_by">Ads by King Paulo, Olongapo City</span>
					</span> 
					<span class="items_price"><strong>P123,000.00</strong></span>
				</a>
			</div>
			<?php
			}
		?>
		
		<?php
			for ($r=1; $r <= 2; $r++) {
				for ($c=1; $c <= 6; $c++) {
				?>
					<div class="img1_small">
						<div style="height: 122px;">
							<center>
							<a href="?ads=<?php echo $i; ?>">
								<img class="images_ads" src="<?php echo $Assets->path("images", "small$c.png", $IsLive); ?>" style="width: 147px; height: 110px; margin-top: 5px; border-bottom: 1px solid #8e8e8e;" />
							</a>
							</center>
						</div>
						<a href="#">
							<span class="items_details">
								<span>House For Lease</span> <br />
								<span class="ads_by">Ads by King Paulo, Olongapo City</span>
							</span> 
							<span class="items_price"><strong>P123,000.00</strong></span>
						</a>
					</div>
				<?php
				}
			}
		?>
		
	</div>
</div>
</div>

<div id="content2">
	<div id="main">
		<div id="column1">
			 <h3>WECONEX</h3>
			 <ul type="none">
			 	<li><a href="#"><img src="<?php echo $Assets->path("images", "weconex_icon2.png", $IsLive); ?>" width="15" /> <span>Get More</span>  </a></li>
			 	<li><a href="#"><img src="<?php echo $Assets->path("images", "weconex_icon2.png", $IsLive); ?>" width="15" /> <span>Promos</span> </a></li>
			 	<li><a href="#"><img src="<?php echo $Assets->path("images", "weconex_icon2.png", $IsLive); ?>" width="15" /> <span>Refer a Friend</span>  </a></li>
			 	<li><a href="#"><img src="<?php echo $Assets->path("images", "weconex_icon2.png", $IsLive); ?>" width="15" /> <span>Terms and Conditions</span> </a></li>
			 	<li><a href="#"><img src="<?php echo $Assets->path("images", "weconex_icon2.png", $IsLive); ?>" width="15" /> <span>Privacy Policy</span> </a></li>
			 	<li><a href="#"><img src="<?php echo $Assets->path("images", "weconex_icon2.png", $IsLive); ?>" width="15" /> <span>FAQ</span> </a></li>
			 </ul>
		</div>
		<div id="column2">
			<h3>Follow WECONEX on</h3>
			<ul type="none">
			 	<li><a href="https://www.facebook.com/weconex" target="_blank" > <img src="<?php echo $Assets->path("images", "fb.png", $IsLive); ?>" width="15" /> <span>Facebook</span> </a></li>
			 	<li><a href="https://twitter.com/weconex" target="_blank"> <img src="<?php echo $Assets->path("images", "tw.png", $IsLive); ?>" width="15" /> <span>Twitter</span> </a></li>
			 	<li><a href="https://plus.google.com/weconex" target="_blank"> <img src="<?php echo $Assets->path("images", "gplus.png", $IsLive); ?>" width="15" /> <span>Google +</span> </a></li>
			 	<li><a href="http://www.youtube.com/weconex" target="_blank"> <img src="<?php echo $Assets->path("images", "yt.png", $IsLive); ?>" width="15" /> <span>Youtube</span> </a></li>
			 	<li><a href="http://instagram.com/weconex" target="_blank"> <img src="<?php echo $Assets->path("images", "ig.png", $IsLive); ?>" width="15" /> <span>Instagram</span> </a></li>
			 	<li><a href="http://www.linkedin.com/weconex" target="_blank"> <img src="<?php echo $Assets->path("images", "ld.png", $IsLive); ?>" width="15" /> <span>Linkedin</span> </a></li>
			 </ul>
		</div>
		<div id="column3">
			<h3>Share WECONEX on</h3>
			<div id="shares">
				<ul type="none">
    			 	<li>
    			 		<a href="#" onclick="ItsBeingUpdated();" class="fb">
    			 			<img src="<?php echo $Assets->path("images", "social-facebook-box-white-icon.png", $IsLive); ?>" width="40" style="float: left;" />
							<span style=" float: left; margin-top: 10px;">Facebook</span>
						</a>
					</li>
    			 	<li>
    			 		<a href="#" onclick="ItsBeingUpdated();" class="tw">
    			 			<img src="<?php echo $Assets->path("images", "social-twitter-box-white-icon.png", $IsLive); ?>" width="40" style="float: left;" />
    			 			<span style=" float: left; margin-top: 10px;">Twitter</span>
    			 		</a>
    			 	</li>
    			 </ul>
			</div>
			
			<div id="likes">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=298970000199451";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like" data-href="http://kingworx.no-ip.biz/" data-layout="standard" data-colorscheme="dark" data-action="recommend" data-show-faces="false"></div>
				<div class="fb-like" data-href="http://kingworx.no-ip.biz/" data-layout="standard" data-colorscheme="dark" data-action="like" data-show-faces="false"></div>
			</div>
		</div>
		<div id="column4">
			<h3>Shift to Mobile?</h3>
			<ul type="none">
			 	<li>
			 		<a href="#" onclick="ItsBeingUpdated();" class="ad">
			 			<img src="http://e4.isanook.com/df/0/197/assets/imgs/App/on-google-play.png" width="138" style="float: left;" />
					</a>
				</li>
			 	<li>
			 		<a href="#" onclick="ItsBeingUpdated();" class="ap">
			 			<img src="http://e3.isanook.com/df/0/197/assets/imgs/App/available-app-store.png" width="138" style="float: left;" />
			 		</a>
			 	</li>
			 </ul>
		</div>
		<div id="alright"> <p>Copyright WECONEX <?php echo date("Y"); ?> | All Rights Reserved </p> </div>
	</div>
</div>


