<?php

session_start();
if(!isset($_SESSION['username'])){
	$_SESSION['username']="";
	$_SESSION['role']="";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




	<!-- fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style-template.css">
	
</head>
<body>

		<nav class="navbar navbar-fixed-top navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
		      	<span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		      </button>
		      <a href="index.php"><span id="O">◎</span></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		    	<li><a href="#"><strong>ABOUT</strong></a></li>
		        <li><a href="categories.php">ConverSTN</a></li>
		        <li><a href="#">SCHEDULE</a></li> 	       
		        <li><a href="#">CONTACTS</a></li> 
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		      
		        <?php
			          if ($_SESSION['username'] == "") {
			          	if ($_SERVER['PHP_SELF']=='/MILESTONE 2/login.php') {
			          		echo "<li class='nav-item dropdown'>
						   		<a class='nav-link dropdown-toggle' data-toggle='dropdown'
						       	href='#' role='button' aria-haspopup='true' aria-expanded='false'>
						      	<span class='glyphicon glyphicon-log-in'></span> ACCOUNT </a>
							    <ul class='dropdown-menu'>

						            <li><a href='register.php'>REGISTER</a></li>

				        		</ul>
			       			</li>";  
			          	}else {
			          		echo "<li class='nav-item dropdown'>
						   		<a class='nav-link dropdown-toggle' data-toggle='dropdown'
						       	href='#' role='button' aria-haspopup='true' aria-expanded='false'>
						      	<span class='glyphicon glyphicon-log-in'></span> ACCOUNT </a>
							    <ul class='dropdown-menu'>
						            <li><a href='login.php'>LOGIN </a></li>				           
				        		</ul>
			       			</li>";  
			          	}
			          }else{
			          	echo " <li class='dropdown active'>
			         			<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' style='display: block;'> ".$_SESSION['username']." <span class='caret'></span></a>
						        <ul class='dropdown-menu'>
						            <li><a href='account.php'>Account</a></li>
						            <li role='separator' class='divider'></li>
						            <li><a href='logout.php'>Logout</a></li>
						        </ul>
						        </li>";
			          }
			       ?>     

		      </ul>
		    </div>
		  </div>
		</nav>

		<section class="content container-fluid">
			
			<?php display_content(); ?>







		</section>

		<footer class="footer container-fluid">
			<div class="container row">
				<div class="col-sm-5 footer-right">
					<form>				
					  <div class="form-inline sub">
					    <label for="email">SUBSCRIBE TO OUR NEWS LETTER</label>
					    <input type="email" class="form-control" id="email">
					  </div>

					  <button type="submit" class="btn btn-primary" id="emailbtn">SUBSCRIBE</button>
					</form>
					<p>Copyright © ◎pen ConverSTN  Inc. all rights reserved | Design by Gerard </p>
					
				</div>

					<div class='col-sm-5' id="center-footer">
						<h3> Follow Us</h3>
						
					<div class="col-lg-4">		
		<i class="fa fa-facebook-square" aria-hidden="true"></i>
		<i class="fa fa-google-plus-square" aria-hidden="true"></i>
		<i class="fa fa-pinterest-square" aria-hidden="true"></i>
		<i class="fa fa-tumblr-square" aria-hidden="true"></i>
		<i class="fa fa-linkedin-square" aria-hidden="true"></i>
		</div>
					
					</div>



		
		
		
		
					<div class="col-sm-2">
						 <a href=""><span id="O-foot">◎</span></a>
					</div>
					
			</div>
		</footer>



</body>


</html>