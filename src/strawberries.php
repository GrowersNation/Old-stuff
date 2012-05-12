<?php 
	include 'base/back-base.php'
?> 

<?php startblock("title") ?>
	Strawberries
<?php endblock()?>

<?php startblock('content') ?> 
	<div class="exampleImages">
		<img src="images/strawberries.jpg" />
		<img src="images/strawberries_2.jpg" />
		<img src="images/strawberries_3.jpg" />
	</div>
	
	<a href="#" data-role="button" data-icon="plus">Add to Plot</a>
	
	<table width="100%">
		<thead>
			<tr>
				<td>
					J
				</td>
				<td>
					F
				</td>
				<td>
					M
				</td>
				<td>
					A
				</td>
				<td>
					M
				</td>
				<td>
					J
				</td>
				<td>
					J
				</td>
				<td>
					A
				</td>
				<td>
					S
				</td>
				<td>
					O
				</td>
				<td>
					N
				</td>
				<td>
					D
				</td>
			</tr>
		</thead>
		<tbody>
			<tr class="timePeriod">
				<td>
					&nbsp;
				</td>
				<td colspan="3" id="sow">
					&nbsp;
				</td>
			</tr>
			<tr class="timePeriod">
				<td colspan="3">
					&nbsp;
				</td>
				<td colspan="4" id="cultivate">
					&nbsp;
				</td>
			</tr>
			<tr class="timePeriod">
				<td colspan="6">
					&nbsp;
				</td>
				<td colspan="4" id="harvest">
					&nbsp;
				</td>
			</tr>
		</tbody>
	</table>
	
	<h3>WikiTips</h3>
	<a href="#" data-role="button" data-icon="plus">Add WikiTip</a>
	
	<p>
		Place the strawberry plants every 35cm (13") in rows that are 75cm (30") apart.
	</p>
	
	<p>
		Pick any ripe strawberries so they don't rot on the plant. CHeck the plants every other day
		during the ripening period.
	</p>
<?php endblock() ?>