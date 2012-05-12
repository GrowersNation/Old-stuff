<?php require_once './base/ti.php' ?> 
<html> 
	<head>
		<title>Growers Nations</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		
		<link rel="stylesheet" href="style/style.css" />
		<link rel="stylesheet" href="style/overrides.css" />
		
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
		
		<script>
			var index = -1;
			
			$(document).ready(function() {
				if(index != -1) {
					$($("div[data-role='navbar'] li")[index]).children("a").addClass("ui-btn-active")
				}
			});
		</script>
	</head>
	
	<body> 
		<div data-role="page" data-add-back-btn="true">
			<div data-role="header">
				<a class="ui-btn-left" href="overview.php" data-rel="back" data-theme="b" data-icon="arrow-l">Back</a>
				<h1><?php startblock("title")?>Growers Nations<?php endblock(); ?></h1>
			</div>
			
			<div data-role="content">
				<?php emptyblock("content"); ?>
			</div>
		</div>
	</body> 
</html>