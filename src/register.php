<?php 
	include 'base/no-menu-base.php'
?> 

<?php startblock("title") ?>
	Join Us!
<?php endblock()?>

<?php startblock('content') ?> 
	<h1>Sign up</h1>
	
	<form>
		<label for="username">Username</label>
		<input type="text" name="username" id="username" />
		
		<label for="email">E-Mail</label>
		<input type="text" name="email" id="email" />
		
		<label for="password">Password</label>
		<input type="password" name="password" id="password" />
		
		<input type="submit" value="Sign Up" />
		
		<p class="legal">
			by clicking 'Sign Up' you're agreeing to our <a href="#">Terms of Service</a>.
	</form>
<?php endblock() ?>