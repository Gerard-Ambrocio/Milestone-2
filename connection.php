<?php

 	$host = 'localhost';
 	$username = 'root';
 	$password = '';
 	$database = 'MILESTONE-2';
 	$conn = mysqli_connect($host, $username, $password, $database);
 	if ((!$conn)) {
 		die("connection failed:".mysqli_connect_error());
 	}else {
 		// echo ("Connected successfully");
 	}

 	// $sql = "SELECT * FROM songs";
 	// $result = mysqli_query($conn, $sql);
 	// echo "<br>";
 	// print_r($result);

 	// while ($row = mysqli_fetch_assoc($result)) {
 	// 	print_r ($row);
 	// 	echo "<br>";
 	// }
 	// while ($row = mysqli_fetch_assoc($result)) {
 	// 	echo $row['id']."".$row['title']."<br>";
 	// }
?>