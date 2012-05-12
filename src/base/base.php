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
	</head>
	
	<body> 
		
		<div data-role="page">
			<div data-role="header">
				<h1><?php startblock("title")?>Growers Nations<?php endblock(); ?></h1>
				<a class="ui-btn-right" href="userOptions.php" data-rel="dialog" data-theme="b" data-icon="gear" data-mini="true" data-iconpos="notext"></a>
			</div>
			
			<div data-role="navbar">
				<ul>
					<?php emptyblock("menu"); ?>
				</ul>
			</div>
			
			<div data-role="content">
				<?php emptyblock("content"); ?>
			</div>
		</div>
	</body> 
</html>