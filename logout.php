<!DOCTYPE html>
<html>
<head>
	<title>logout function</title>
</head>
<body>

<?php
	session_start();
	session_destroy();
	header('Location: login.php');


?>


</body>
</html>