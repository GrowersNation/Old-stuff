<?php 
	include 'base/no-title-base.php'
?> 

<?php startblock('content') ?> 
	<img id="logo" alt="Growers Nation Logo" src="images/gn_logo_new.jpg" />
	
	<h2>Making Growers of the nations</h2>
	<p>
		Use the form below to search for your location, and see what you can grow.
	</p>
	
	<form action="overview.php">
		<label for="location">Where are you?</label>
		<input type="text" name="location" id="Location" />
		
		<input type="submit" value="Tell me what to grow" />
	</form>
<?php endblock() ?>