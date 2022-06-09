<?php 
	
	include_once("config.php");
    
	$id = $_GET['id'];

	$sql = "SELECT * FROM perdoruesit WHERE id=:id";

	$prep = $con->prepare($sql);

	$prep->bindParam(':id',$id);

	$prep->execute();

	$data = $prep->fetch();

	// var_dump($data);



 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>

	<form action="update.php" method="POST">
		<label>Emri:</label><br>
		<input type="hidden" name="id" value="<?= $data['id']; ?>">
		<input type="text" name="emri" value="<?= $data['emri'];  ?>"><br>
		<label>Mbiemri:</label><br>
		<input type="text" name="mbiemri" value="<?= $data['mbiemri'];  ?>"><br>
		<label>Email:</label><br>
		<input type="email" name="email" value="<?= $data['email'];  ?>"><br><br>
		<button type="submit" name="update">Update</button>
	</form>

</body>
</html>