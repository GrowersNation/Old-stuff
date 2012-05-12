<?php 
	include 'base/back-base.php'
?> 

<?php startblock("title") ?>
	Fruit
<?php endblock()?>

<?php startblock('content') ?> 
	<ul data-role="listview">
		<li>
			<a href="#">
				<img src="images/apples.jpg" alt="Apples" />
				<h3>Apples</h3>
			</a>
		</li>
		
		<li>
			<a href="berries.php">
				<img src="images/berries.jpg" alt="Berries" />
				<h3>Berries</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/citrus.jpg" alt="Citrus" />
				<h3>Citrus</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/stone-fruit.jpg" alt="stone-fruit" />
				<h3>Stone Fruit</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/tomatoes.jpg" alt="Tomatoes" />
				<h3>Tomatoes</h3>
			</a>
		</li>
	</ul>
<?php endblock() ?>