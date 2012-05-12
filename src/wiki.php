<?php 
	include 'base/base.php'
?> 

<?php startblock("title") ?>
	WikiTips: Explore All
<?php endblock()?>

<?php startblock("menu") ?>
	<li><a href="overview.php">Home</a></li>
	<li><a href="plot.php">My Plot</a></li>
	<li><a href="wiki.php" class="ui-btn-active">WikiTips</a></li>
<?php endblock() ?>
	
<?php startblock('content') ?> 
	<ul data-role="listview">
		<li>
			<a href="#">
				<img src="images/fruit.jpg" alt="Fruit" />
				<h3>Fruit</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/vegetables.jpg" alt="Vegetables" />
				<h3>Vegetables</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/grain.jpg" alt="Grain" />
				<h3>Grain</h3>
			</a>
		</li>
	</ul>
<?php endblock() ?>