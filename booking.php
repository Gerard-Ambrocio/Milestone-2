



<?php
	
	session_start();
	include('connection.php');
	if(isset($_GET['id'])){
		$talk_id = $_GET['id'];
		$sql = "SELECT * FROM speaker_categories WHERE id ='$talk_id'";
		extract(mysqli_fetch_assoc(mysqli_query($conn,$sql)));
		$user_id_session = $_SESSION['user_id'];
		$result = "SELECT *  FROM bookings WHERE user_id = '$user_id_session' AND speaker_categories_id = '$talk_id'";
	
		if($user_id != $user_id_session){

				$query = "SELECT * FROM bookings WHERE user_id = '$user_id_session' AND speaker_categories_id = '$id'";
				$r = mysqli_query($conn,$sql);
				if(mysqli_num_rows($r)){
					$_SESSION['message'] = "Already booked";
				} else {

					$sql = "INSERT INTO bookings (user_id, speaker_categories_id) values ('$user_id_session','$id')"; 
							
					//echo $sql;
					mysqli_query ($conn, $sql);

					$sql1 = "SELECT * FROM speaker_categories WHERE id ='$id";
					extract(mysqli_fetch_assoc(mysqli_query($conn,$sql1)));
					--$slots;


					$sql2 = "UPDATE speaker_categories SET slots='$slots' WHERE id='$id'";  
					extract(mysqli_fetch_assoc(mysqli_query($conn,$sql2)));

				}





		
		}else{
			$_SESSION['message'] = "SAME ACCOUNT";
		}
	}

	header('location:categories.php');

?>