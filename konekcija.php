<?php
	
	$server = 'localhost';
	$username = 'root';
	$password = 'root';
	$database = 'fitnes';
	
	//spajanje na bazu
	try {
		$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
	} catch (PDOException $e) {
		die("Spajanje nije uspjelo: " . $e->getMessage());
	}
	
?>