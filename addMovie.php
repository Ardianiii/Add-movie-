<?php 
	
	include_once('config.php');

	if(isset($_POST['submit'])){

		$movie_name = $_POST['movie_name'];
		$movie_description = $_POST['movie_description'];
		$movie_quality = $_POST['movie_quality'];
		$movie_rating = $_POST['movie_rating'];
		$movie_image = $_POST['movie_image'];


		$sql = "INSERT INTO movies(movie_name, movie_description, movie_quality, movie_rating, movie_image) VALUES (:movie_name, :movie_description, :movie_quality, :movie_rating, :movie_image)";

		$insertMovie = $con->prepare($sql);

		$insertMovie->bindParam(':movie_name', $movie_name);
		$insertMovie->bindParam(':movie_description', $movie_description);
		$insertMovie->bindParam(':movie_quality', $movie_quality);
		$insertMovie->bindParam(':movie_rating', $movie_rating);
		$insertMovie->bindParam(':movie_image', $movie_image);

		$insertMovie->execute();

		header("Location: home.php");

	}


 ?>