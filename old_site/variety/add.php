<?php
	try {
		$name = "";
		$crop = "";
		$sunlight = 0;
		$rainfall = 0;
		$humidity = 0;
		$soil = 0;
		
		if($_GET['method'] == "get") {
			$name = $_GET['name'];
			$crop = $_GET['crop'];
			$sunlight = $_GET['sunlight'];
			$rainfall = $_GET['humidity'];
			$soil = $_GET['soil'];
		}
		else {
			$name = $_POST['name'];
			$crop = $_POST['crop'];
			$sunlight = $_POST['sunlight'];
			$rainfall = $_POST['humidity'];
			$soil = $_POST['soil'];
		}
		
		$hostname = 'localhost';
		$username = 'z28open_grower';
		$password = 'kullahvaj';
		
		try {
	    	$dbh = new PDO("mysql:host=$hostname;dbname=z28open_grower", $username, $password);
	    	/*** echo a message saying we have connected ***/
	    }
		catch(PDOException $e)
	    {
	    	echo $e->getMessage();
	    }
	    
	    $stmt = $dbh->prepare("INSERT INTO variety(name, crop, sunlighthrs, rainfallmm, humidityvol, soilph) VALUES (:name, :crop, :sunlight, :rainfall, :humidity, :soil)");
	    
	    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
	    $stmt->bindParam(':crop', $crop, PDO::PARAM_INT);
	    $stmt->bindParam(':sunlight', $sunlight, PDO::PARAM_INT);
	    $stmt->bindParam(':rainfall', $rainfall, PDO::PARAM_INT);
	    $stmt->bindParam(':humidity', $humidity, PDO::PARAM_INT);
	    $stmt->bindParam(':soil', $soil, PDO::PARAM_INT);
	    
	    $stmt->execute();
	    
	    echo $name;
    }
    catch(PDOException $e)
    {
    	echo $e->getMessage();
    }
?>