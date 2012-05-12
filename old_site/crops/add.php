<?php
	try {
		$name = "";
		
		if($_GET['method'] == "get") {
			$name = $_GET['name'];
		}
		else {
			$name = $_POST['name'];
		}
		
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
	    
	    $stmt = $dbh->prepare("INSERT INTO crop(name) VALUES (:name)");
	    
	    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
	    
	    $stmt->execute();
    }
    catch(PDOException $e)
    {
    	echo $e->getMessage();
    }
?>