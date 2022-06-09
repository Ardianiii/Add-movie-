<?php

	include_once('config.php');

	$user_id = $_SESSION['user_id'];
	$movie_id = $_SESSION['movie_id'];

	// var_dump($user_id);
	// var_dump($movie_id);


	$nr_tickets = $_POST['nr_tickets'];
	$date = $_POST['date'];
	$time = $_POST['time'];

	$sql = "INSERT INTO bookings(nr_tickets,date,time,user_id, movie_id)VALUES(:nr_tickets, :date, :time, :user_id, :movie_id)";

	$insertBooking = $con->prepare($sql);

	$insertBooking->bindParam(":nr_tickets",$nr_tickets);
	$insertBooking->bindParam(":date",$date);
	$insertBooking->bindParam(":time",$time);
	$insertBooking->bindParam(":user_id",$user_id);
	$insertBooking->bindParam(":movie_id",$movie_id);

	$insertBooking->execute();


	header("Location: home.php");
