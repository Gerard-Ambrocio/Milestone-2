
<!-- // 	$users = [
// 		['username'=>'gerard','password'=>'password'],
// 		['username'=>'test','password'=>'password'],
// 		['username'=>'newuser','password'=>'12345']
// 		];

// $fp = fopen('users.json', 'w');
// fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
// fclose($fp);

 -->


<?php

function display_content(){
	echo "<div class='row text-center login-page'>
				<h1 class='login-head'>LOGIN</h1>
			</div>
			<div class='row' id='display'>
				<div class='col-xs-12 col-sm-6'>";
					display_content1();
			echo "</div>		
				<div class='col-xs-12 col-sm-6'>";
				   display_content2();
			echo "</div>
			</div>";
}

function display_content1(){
	login();
	if(isset($_SESSION['role'])){
		echo $_SESSION['role'];
	}
	echo "

  
  <form class='form-horizontal' method='POST' action='login.php'>
    <div class='form-group'>
      <label class='control-label' for='username'> Username:</label>
      <div class=''>
        <input type='text' class='form-control' id='username' name='username'>
      </div>
    </div>
    <div class='form-group'>
      <label class='control-label' for='password'>Password:</label>
      <div class=''>          
        <input type='password' class='form-control' id='password' name='password'>
      </div>
    </div>    
    <div class='form-group'>        
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='login' value='login' class='btn btn-md btn-primary'>LOGIN</button>
        <a href='register.php'>Forgot your password?</a>
      </div>
    </div>
  </form>";
}

function display_content2(){

	echo "
	


		<div class='col-lg-12 new-customer'>
			<h3 class='customer-head'>New Customer?</h3>
			<p>Create an account with us and you'll be able to:</p>
			<ul>
				<li>Check out faster</li>
				<li>Save multiple shipping addresses</li>
				<li>Access your order history</li>
				<li>Track new orders</li>
				<li>Save items to your wish list</li>
			</ul>
		</div>
		<div class='col-lg-offset-1 col-lg-10' id='create'>
	        <a type='btn' name='register' value='register' class='btn btn-md btn-primary' href='register.php'>CREATE ACCOUNT</a>
	        
	    </div>
	";

}






function login(){

	//$string = file_get_contents("users.json");
	//$users = json_decode($string, true);

	$message = "";
	
	if(isset($_SESSION['message'])){
		$message = "<div class='alert alert-success'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include('connection.php');
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$sql = "SELECT * FROM users WHERE username = '$username'
		AND password = '$password'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)){
			extract(mysqli_fetch_assoc($result));
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $role;
			$_SESSION['user_id'] = $user_id;
			header('location:index.php');				
		}
	}




	// if (isset($_POST['login'])) {
	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];
	// 	$flag = false;

	// 	foreach ($users as $user) {
	// 		if ($username == $user['username'] && 
	// 			$password == $user['password']){
	// 			// echo "login successful!";
	// 			$flag = true;
				
	// 			$_SESSION['username'] = $user['username'];
	// 			$_SESSION['role'] = $user['role'];
				
//echo "<script>window.location.href='index.php'</script>";
					// header('Location: index.php');
				// if ($_SESSION['role'] == 'admin') {
				// 	header('Location: index.php');
				// }else{
				// 	header('Location: index.php');
				// }
				// // else {
				// 	
				// }
	// 		}  
				
			
			
	// 	}
	// 	if ($flag == false){
	// 			echo "<p>Username or Password Invalid</p>";
	// 		}	
	// }
}
	


require_once('template.php');

?>

