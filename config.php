<?php 	

	session_start();

	$host = 'localhost';
	$db = 'digitalschool';
	$user = 'root';
	$password = '';


	try {

		$con = new PDO("mysql:host=$host; dbname=$db", $user, $password);
		
	} catch (Exception $e) {
		
		echo "Something went wrong";
		$e->getMessage();
	}

	






 ?>