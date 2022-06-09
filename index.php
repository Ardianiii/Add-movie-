<!DOCTYPE html>
<html>
<head>
	<title>Add form</title>
	<style>
		table{
			border: 1px solid black;
			border-collapse:collapse;
		}
		th,td{
			padding: 5px 10px;
			border:1px solid black;
		}
	</style>
</head>
<body>

	<form action="add.php" method="POST">
		<label>Emri:</label><br>	
		<input type="text" name="emri"><br><br>		
		<label>Mbiemri:</label><br>	
		<input type="text" name="mbiemri"><br><br>	
		<label>Email:</label><br>		
		<input type="email" name="email"><br><br>		
		<button type="submit" name="submit">Submit</button>
	</form>

	<a href="dashboard.php">Dashboard</a>

</body>
</html>