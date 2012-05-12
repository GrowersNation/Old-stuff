<?php 
	include 'base/back-base.php'
?> 

<?php startblock("title") ?>
	Berries
<?php endblock()?>

<?php startblock('content') ?> 
	<ul data-role="listview">
		<li>
			<a href="strawberries.php">
				<img src="images/strawberries.jpg" alt="Strawberries" />
				<h3>Strawberries</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/blackberries.jpg" alt="Blackberries" />
				<h3>Blackberries</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/gooseberries.jpg" alt="Gooseberries" />
				<h3>Gooseberries</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/cranberries.jpg" alt="Cranberries" />
				<h3>Cranberries</h3>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/blackberries.jpg" alt="Blackberries" />
				<h3>Blueberries</h3>
			</a>
		</li>
	</ul>
<?php endblock() ?>