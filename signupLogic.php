<?php 

	include_once('config.php');

	if (isset($_POST['submit'])) {
		
		$emri = $_POST['emri'];
		$mbiemri = $_POST['mbiemri'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$temp_password = $_POST['password'];
		$password = password_hash($temp_password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO perdoruesit(emri, mbiemri, username, email, password) VALUES(:emri, :mbiemri, :username, :email, :password)";

		$prep = $con->prepare($sql);

		$prep->bindParam(':emri',$emri);
		$prep->bindParam(':mbiemri',$mbiemri);
		$prep->bindParam(':username',$username);
		$prep->bindParam(':email',$email);
		$prep->bindParam(':password',$password);

		$prep->execute();

		header("Location:login.php");

	}

 ?>