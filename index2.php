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
	<link rel="stylesheet" type="text/css" href="css/style.css">

	
</head>
<body>

	<nav class="navbar navbar-fixed-top navbar-default"> 
	  <div class="container-fluid">
	    <div class="navbar-header row">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="#" id="brand"><span id="O" >◎</span>pen ConverSTN </a>
	 	
	


	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	       
	        <li><a href="#">ConverSTN</a></li>
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
						            <li><a href='#'>Account</a></li>
						            <li><a href='#'>Wishlist</a></li>
						            <li><a href='#'>Recipes</a></li>
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
	<section class="falsenav">		
	</section>

	<section class="home container-fluid">
	<div class="row">
		<div class="col-lg-5 paragraph">
			<h1>  Station for Conversation and Open Learning </h1>
			<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br> sed do   eiusmod
					tempor incididunt ut labore et dolore <br> magna aliqua. Ut enim  ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p><strong> We believe we have the solution </strong></p>
			
		</div>
		<div class=".col-lg-7">
		<i class="fa fa-circle-thin" aria-hidden="true" id="circle"></i>
			<img src="img/headleft.png" class="head" id="headleft" >
			<img src="https://s-media-cache-ak0.pinimg.com/originals/33/ff/7c/33ff7c9c228c36dbc291964663e0f4a9.gif" id="ripple" style="border:0">
			<img src="img/headright.png" class="head" id="headright" >
		</div>
	</div>

	</section>

	<section class="content">
		




	</section>


	<footer class="container-fluid">
	<div class="row">
		<div class="col-lg-4">		
		<a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
		<a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
		<a href=""><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
		<a href=""><i class="fa fa-tumblr-square" aria-hidden="true"></i></a>
		<a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
		</div>
	</div>
	</footer>

</body>
</html>