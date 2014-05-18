<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
<script type="text/javascript">
$(function() {
	$(".meter > span").each(function() {
		$(this)
			.data("origWidth", $(this).width())
			.width(0)
			.animate({
				width: $(this).data("origWidth")
			}, 1200);
	});
});

$(document).ready(function() { 
	
$('#progress_uploads_box').hide();  //hide submit button
$('#progress_uploads').html('<center>0%</center>'); //update status text

// $('#loading-img').show(); //hide submit button

var options = { 
		target:   '#output',   // target element(s) to be updated with server response 
		beforeSubmit:  beforeSubmit,  // pre-submit callback 
		success:       afterSuccess,  // post-submit callback 
		uploadProgress: OnProgress, //upload progress callback 
		resetForm: true        // reset the form after successful submit 
	}; 
	
 $('#MyUploadForm').submit(function() { 
		$(this).ajaxSubmit(options);  			
		// always return false to prevent standard browser submit and page navigation 
		return false; 
	}); 
	
//function after succesful file upload (when server response)
function afterSuccess()
{
	//$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button
	$('#progressbox').delay( 1000 ).fadeOut(); //hide progress bar
    $('#progress_uploads_box').delay( 1000 ).fadeOut(); //hide progress bar
}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if(!$('#FileInput').val()) //check empty input filed
		{
			$("#output").html("Are you kidding me?");
			return false
		}
		
		var filename = $('#FileInput').val();
		var fsize = $('#FileInput')[0].files[0].size; //get file size
		var ftype = $('#FileInput')[0].files[0].type; // get file type
		var fextension = filename.substr((Math.max(0, filename.lastIndexOf(".")) || Infinity) + 1);
		
		//allow file types 
		switch(fextension)
        {
			case 'png':
			case 'jpeg': 
			case 'gif': 
			case 'jpg':
			case 'x-png': 
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		 
		//Allowed file size is less than 5 MB (1048576)
		var allowedFileSize = 1048576 * 50;
		if(fsize>allowedFileSize) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.");
			return false
		}
		
		alert(filename);
		$("#FileInput").hide(); 
		$("#submit-btn").hide();
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//progress bar function
function OnProgress(event, position, total, percentComplete)
{
    //Progress bar
	$('#progressbox').show();
	$('#progress_uploads_box').show(); //show submit button
	
    $('#progressbar').width(percentComplete + '%') //update progressbar percent complete
    $('#progress_uploads').width(percentComplete + '%') //update progressbar percent complete
    
    $('#statustxt').html(percentComplete + '%'); //update status text
    $('#progress_uploads').html('<center>' + percentComplete + '%</center>') //update progressbar percent complete
    
    if(percentComplete>50)
    {
        $('#statustxt').css('color','#000'); //change status text to white after 50%
    }
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

}); 
</script>
	
	<style>
		.meter { 
			height: 20px;  /* Can be anything */
			position: relative;
			margin: 60px 0 20px 1; /* Just for demo spacing */
			background: #555;
			-moz-border-radius: 25px;
			-webkit-border-radius: 25px;
			border-radius: 25px;
			padding: 10px;
			-webkit-box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
			-moz-box-shadow   : inset 0 -1px 1px rgba(255,255,255,0.3);
			box-shadow        : inset 0 -1px 1px rgba(255,255,255,0.3);
			width: 250px;
			font: 12px/20px 'Lucida Grande', Verdana, sans-serif;
			font-size: 12px;
		}
		
		.meter > span {
			display: block;
			height: 100%;
			   -webkit-border-top-right-radius: 8px;
			-webkit-border-bottom-right-radius: 8px;
			       -moz-border-radius-topright: 8px;
			    -moz-border-radius-bottomright: 8px;
			           border-top-right-radius: 8px;
			        border-bottom-right-radius: 8px;
			    -webkit-border-top-left-radius: 20px;
			 -webkit-border-bottom-left-radius: 20px;
			        -moz-border-radius-topleft: 20px;
			     -moz-border-radius-bottomleft: 20px;
			            border-top-left-radius: 20px;
			         border-bottom-left-radius: 20px;
			background-color: rgb(43,194,83);
			background-image: -webkit-gradient(
			  linear,
			  left bottom,
			  left top,
			  color-stop(0, rgb(43,194,83)),
			  color-stop(1, rgb(84,240,84))
			 );
			background-image: -moz-linear-gradient(
			  center bottom,
			  rgb(43,194,83) 37%,
			  rgb(84,240,84) 69%
			 );
			-webkit-box-shadow: 
			  inset 0 2px 9px  rgba(255,255,255,0.3),
			  inset 0 -2px 6px rgba(0,0,0,0.4);
			-moz-box-shadow: 
			  inset 0 2px 9px  rgba(255,255,255,0.3),
			  inset 0 -2px 6px rgba(0,0,0,0.4);
			box-shadow: 
			  inset 0 2px 9px  rgba(255,255,255,0.3),
			  inset 0 -2px 6px rgba(0,0,0,0.4);
			position: relative;
			overflow: hidden;
		}
		
		.meter > span:after, .animate > span > span {
			content: "";
			position: absolute;
			top: 0; left: 0; bottom: 0; right: 0;
			background-image: 
			   -webkit-gradient(linear, 0 0, 100% 100%, 
			      color-stop(.25, rgba(255, 255, 255, .2)), 
			      color-stop(.25, transparent), color-stop(.5, transparent), 
			      color-stop(.5, rgba(255, 255, 255, .2)), 
			      color-stop(.75, rgba(255, 255, 255, .2)), 
			      color-stop(.75, transparent), to(transparent)
			   );
			background-image: 
				-moz-linear-gradient(
				  -45deg, 
			      rgba(255, 255, 255, .2) 25%, 
			      transparent 25%, 
			      transparent 50%, 
			      rgba(255, 255, 255, .2) 50%, 
			      rgba(255, 255, 255, .2) 75%, 
			      transparent 75%, 
			      transparent
			   );
			z-index: 1;
			-webkit-background-size: 50px 50px;
			-moz-background-size: 50px 50px;
			background-size: 50px 50px;
			-webkit-animation: move 2s linear infinite;
			-moz-animation: move 2s linear infinite;
			   -webkit-border-top-right-radius: 8px;
			-webkit-border-bottom-right-radius: 8px;
			       -moz-border-radius-topright: 8px;
			    -moz-border-radius-bottomright: 8px;
			           border-top-right-radius: 8px;
			        border-bottom-right-radius: 8px;
			    -webkit-border-top-left-radius: 20px;
			 -webkit-border-bottom-left-radius: 20px;
			        -moz-border-radius-topleft: 20px;
			     -moz-border-radius-bottomleft: 20px;
			            border-top-left-radius: 20px;
			         border-bottom-left-radius: 20px;
			overflow: hidden;
		}
		
		.animate > span:after {
			display: none;
		}
		
		@-webkit-keyframes move {
		    0% {
		       background-position: 0 0;
		    }
		    100% {
		       background-position: 50px 50px;
		    }
		}
		
		@-moz-keyframes move {
		    0% {
		       background-position: 0 0;
		    }
		    100% {
		       background-position: 50px 50px;
		    }
		}
		
		.ptxt > span {
			color: #fff;
			background-color: #f0a3a3;
			background-image: -moz-linear-gradient(top, #dc3766, #cf2656);
			background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #dc3766),color-stop(1, #cf2656));
			background-image: -webkit-linear-gradient(#dc3766, #cf2656);
		}
		
		.nostripes > span > span, .nostripes > span:after {
			-webkit-animation: none;
			-moz-animation: none;
			background-image: none;
		}
		
		#output{
			padding: 5px;
			font: 12px/20px 'Lucida Grande', Verdana, sans-serif;
			font-size: 12px;
		}
		
		#upload-wrapper input[type=file] {
			padding: 6px;
			background: #f8f8f8;
			border-radius: 5px;
		}
		
		#upload-wrapper #submit-btn {
			border: none;
			padding: 10px;
			background: #dc3766;
			border-radius: 5px;
			color: #FFF;
		}
	</style>
</head>
<body>
<div id="upload-wrapper">
	
	<form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
		
	<input name="FileInput" id="FileInput" type="file" />
	
	<input type="submit" id="submit-btn" value="Upload" />
	
	</form> 
	<img src="http://bayani-han.com/ptxt4wrd/beta/images/294.GIF" id="loading-img" style="float: left; display:none; margin-left: 60px; margin-top: -52px;" alt="Please Wait"/> <br />
	<div id="progress_uploads_box" class="meter ptxt nostripes">
		<span id="progress_uploads">0%</span>
	</div>
	<div id="output"></div>
</div>

</body>
</html>