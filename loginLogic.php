<?php 

	include_once('config.php');

	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM perdoruesit WHERE username=:username";

		$prep = $con->prepare($sql);
		$prep->bindParam(':username',$username);
		$prep->execute();
		$data = $prep->fetch();

		if ($data == false) {

			echo "User with that username doesn't exist";

			// header("Location: signup.php");

		}else if(password_verify($password, $data['password'])){

			$_SESSION['username'] = $data['username'];
			$_SESSION['emri'] = $data['emri'];
			$_SESSION['user_id'] = $data['id'];

			header("Location: dashboard.php");

		}else{

			echo "Password incorrect";

		}


	}






 ?>