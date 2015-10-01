<?php

//print_r(PDO::getAvailableDrivers());   //will print the available drivers

try {
	$handler = new PDO('mysql:host=127.0.0.1;dbname=ivc_schedules', 'root', 'tbontbtitQ1');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage(); //gets the specific error message
	die(); //will kill the rest of the page
}

echo "The rest of our page.";