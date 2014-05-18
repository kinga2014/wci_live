<html>
<head>   
<link href="dropzone/css/dropzone.css" type="text/css" rel="stylesheet" />

<?php

	if ( IsSet($_GET["type"]) != null ) {
		if ( $_GET["type"] == "2" ) {
			?>
				<script src="dropzone/10/dropzone.min.js"></script>
			<?php
		}
		else {
			?>
				<script src="dropzone/5/dropzone.min.js"></script>
			<?php
		}
	}
	else {
		?>
			<script src="dropzone/5/dropzone.min.js"></script>
		<?php
	}
	
	$img_codes = "0";
	if(IsSet($_GET["uuid"])) {
		$img_codes = $_GET["uuid"];
	}
?>

</head>
<body>
<form action="upload.php?uuid=<?php echo $img_codes; ?>" class="dropzone"></form>
</body>
</html>