<?php 	

	include_once('config.php');

	if (isset($_POST['submit'])) {
		
		$emri = $_POST['emri'];
		$mbiemri = $_POST['mbiemri'];
		$email = $_POST['email'];

		$sql = "INSERT INTO perdoruesit(emri, mbiemri, email) VALUES (:emri,:mbiemri,:email)";

		$newUser = $con->prepare($sql);

		$newUser->bindParam(':emri',$emri);
		$newUser->bindParam(':mbiemri',$mbiemri);
		$newUser->bindParam(':email',$email);

		$newUser->execute();

		echo "Added Succesfully";


	}



 ?>

 <a href="index.php">Home</a>