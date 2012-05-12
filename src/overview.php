<?php 
	include 'base/base.php'
?> 

<?php startblock("menu") ?>
	<li><a href="overview.php" class="ui-btn-active">Home</a></li>
	<li><a href="plot.php">My Plot</a></li>
	<li><a href="wiki.php">WikiTips</a></li>
<?php endblock() ?>
	
<?php startblock('content') ?> 
	<div id="location-summary">
		<a class="tool-link" href="search.php">Change</a>
		<h3>EX2, Exeter, Devon, UK</h3>
		
		<dl>
			<dt>TEMP:</dt>
			<dd>High: 28&deg;C, Low: 8&deg;C<dd>
			
			<dt>SOIL:</dt>
			<dd>pH 5.5, Type: Clay, Moisture: High</dd>
		</dl>
	</div>
	
	<h2>The following food will grow well</h2>
	
	<ul data-role="listview">
		<li>
			<a href="fruit.php">
				<img src="images/fruit.jpg" alt="Fruit" />
				<h3>Fruit</h3>
				<span class="ui-li-count">32</span>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/vegetables.jpg" alt="Vegetables" />
				<h3>Vegetables</h3>
				<span class="ui-li-count">57</span>
			</a>
		</li>
		
		<li>
			<a href="#">
				<img src="images/grain.jpg" alt="Grain" />
				<h3>Grain</h3>
				<span class="ui-li-count">13</span>
			</a>
		</li>
	</ul>
<?php endblock() ?>