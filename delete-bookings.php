<?php 

require('connection.php');

$id = $_GET['id'];
$sql = "DELETE FROM bookings WHERE id='$id'";
mysqli_query($conn,$sql);

header('location:account.php');

 ?>