<?php 

require('connection.php');

$id = $_GET['id'];
$sql = "DELETE FROM speaker_categories WHERE id='$id'";
mysqli_query($conn,$sql);

header('location:accounts.php');

 ?>