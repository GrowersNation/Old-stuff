<?php
	$hostname = 'localhost';
	$username = 'z28open_grower';
	$password = 'kullahvaj';
	
	try {
    	$dbh = new PDO("mysql:host=$hostname;dbname=z28open_grower", $username, $password);
    	/*** echo a message saying we have connected ***/
    	echo 'Connected to database';
    }
	catch(PDOException $e)
    {
    	echo $e->getMessage();
    }
?>