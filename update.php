<?php 

	include_once("config.php");


	if (isset($_POST['update'])) {
		
		$id = $_POST['id'];
		$emri = $_POST['emri'];
		$mbiemri = $_POST['mbiemri'];
		$email = $_POST['email'];

		$sql = "UPDATE perdoruesit SET emri=:emri, mbiemri=:mbiemri, email=:email WHERE id=:id";

		$prep = $con->prepare($sql);

		$prep->bindParam(':id',$id);
		$prep->bindParam(':emri',$emri);
		$prep->bindParam(':mbiemri',$mbiemri);
		$prep->bindParam(':email',$email);

		$prep->execute();

		header("Location: dashboard.php");

	}









 ?>