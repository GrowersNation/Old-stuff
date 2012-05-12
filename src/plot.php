<?php 
	include 'base/base.php'
?> 

<?php startblock("title") ?>
	A User
<?php endblock()?>

<?php startblock("menu") ?>
	<li><a href="overview.php">Home</a></li>
	<li><a href="plot.php" class="ui-btn-active">My Plot</a></li>
	<li><a href="wiki.php">WikiTips</a></li>
<?php endblock() ?>
	
<?php startblock('content') ?> 
	<ul data-role="listview">
		<li>
			<a href="fruit.php">
				<img src="images/potatoes.jpg" alt="Potatoes" />
				<h3>Potatoes</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/runner-beans.jpg" alt="Runner Beans" />
				<h3>Runner Beans</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/leeks.jpg" alt="Leeks" />
				<h3>Leeks</h3>
			</a>
		</li>
	</ul>
<?php endblock() ?>