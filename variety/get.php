<?php
	try {		
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
	    
	    $sql = "SELECT * FROM variety ORDER BY name ASC";
	    
	    $results = array();
	    
	    foreach ($dbh->query($sql) as $row) {
		    array_push($results, $row);
        }
        
        echo json_encode($results);
    }
    catch(PDOException $e)
    {
    	echo $e->getMessage();
    }
?>