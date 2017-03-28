<?php

function display_content(){
	register();
	echo "
	<div class='register-box'>
	<h1 class='register-head text-center'>NEW ACCOUNT </h1>
		<form class='form-horizontal' method='POST' action='register.php' id='register-form'>
    <div class='form-group'>
      <label class='control-label' for='username'> Username:</label>
      <div class=''>
        <input type='text' class='form-control' id='username' name='username' required>
      </div>
    </div>
    <div class='form-group'>
      <label class='control-label' for='password'>Password:</label>
      <div class=''>          
        <input type='password' class='form-control' id='password' name='password' required>
      </div>
    </div>
      <div class='form-group'>
      <label class='control-label' for='pw2'> Confirm Password:</label>
      <div class=''>          
        <input type='password' class='form-control' id='pw2' name='pw2' required>
      </div>
    </div> 
    </div>
      <div class='form-group'>
      <label class='control-label' for='firstname'> First Name:</label>
      <div class=''>          
        <input type='text' class='form-control' id='firstname' name='firstname' required>
      </div>
    </div>  
    </div>
      <div class='form-group'>
      <label class='control-label' for='lastname'> Last Name:</label>
      <div class=''>          
        <input type='text' class='form-control' id='lastname' name='lastname' required>
      </div>
    </div>   
    </div>
      <div class='form-group'>
      <label class='control-label' for='email'> Email:</label>
      <div class=''>          
        <input type='email' class='form-control' id='email' name='email' required>
      </div>
    </div>      
     </div>
      <div class='form-group'>
      <label class='control-label' for='image'> Profile picture:</label>
      <div class=''>          
        <input type='text' class='form-control' id='image' name='image' required>
      </div>
    </div>      


    <div class='form-group'>        
      <div class='col-sm-offset-2 col-sm-10'>
        <button type='submit' name='register' value='register' class='btn btn-md btn-primary'>CREATE ACCOUNT</button>
      <div>
    </div>
  </form>
  </div>
  </div>
	";
}





function register(){




		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include('connection.php');		
		if($_POST['password']==$_POST['pw2']){
			$username = $_POST['username'];
			$password = sha1($_POST['password']);
			// $password = $_POST['password'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$image = $_POST['image'];
			$sql = "INSERT INTO users (username,password,role,first_name,last_name,email,image) VALUES ('$username','$password','regular','$firstname','$lastname','$email','$image')";
			$result = mysqli_query($conn,$sql);

			if($result){
			
				
				header('location:login.php');
				$_SESSION['message'] = "Registration Successful";
			}
		}
	}

	// if (isset($_POST['register'])) {
	// 	$new_user = ['username' => $_POST['username'],
	// 				 'password' => $_POST['password']];
		


	// if ($_POST['password'] == $_POST['confirmpw']){
	// 		$new_user['role'] = 'regular';
	// 	}//password confirm
	// 	if ($_POST['username'] == "" || $_POST['password'] == "") {
			
	// 	}//ifblack
		
	// 	else{
	// 	$string = file_get_contents("users.json");
	// 	$users = json_decode($string, true);

	// 	$users[] = $new_user;
	// 	//array_push($users, $new_user);


	// 	$fp = fopen('users.json', 'w');
	// 	fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
	// 	fclose($fp);	

	// 	echo "<script>window.location.href='login.php'</script>";





		// 	}//else
	
		// }


		// }//POST register
		// if (isset($_POST['back'])){
		// echo "<script>window.location.href='login.php'</script>";

	}//function register


require_once('template.php');

?>