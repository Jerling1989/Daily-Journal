<?php

	// START SESSION
	session_start();
	// INCLUDE CONNECTION.PHP SCRIPT
	include('connection.php');

	// QUERY TO UPDATE JOURNAL COLUMN WHERE USER ID IS EQUAL SESSION ID
	$query = "UPDATE users SET journal='".mysqli_real_escape_string($link, $_POST['journal'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";
	// RUN QUERY IN DATABASE
	mysqli_query($link, $query);

?>
