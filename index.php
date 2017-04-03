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

  <link rel="stylesheet" type="text/css" href="css/styleA.css">
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">


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
            <li><a href="categories.php">ConverSTN</a></li>            
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
                        <li><a href='register.php'>REGISTER</a></li>                  
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

  <section class="home container-fluid">
      <div class="row">
      <div class="col-lg-6 col-lg-offset-1 front">
        <img class="circle img-responsive"  src="img/ring.png">
        <img src="https://s-media-cache-ak0.pinimg.com/originals/33/ff/7c/33ff7c9c228c36dbc291964663e0f4a9.gif" class="ripple img-responsive img-circle	">
        <img src="img/headleft.png" class="head headleft img-responsive" >
        <img src="img/headright.png" class="head headright img-responsive" >
        
      </div>
      
      <div class="col-lg-4  paragraph">
        <h1>  Station for Conversation </h1>
        <h1 class="bot"> and Open  Learning </h1>
        <p> We are <span class="bolder"> Open ConverSTN, </span>
         A  platform to encourage a 
         one-to-many teaching style 
         of learning.  </p>            
      <div>
           <a href="register.php"><button class="btn btn-primary btn-lg home-btn"> JOIN NOW</button></a>
      </div>   
        
    </div>

    </div>
  </section>

  <section class="about container-fluid">

    <div class="row rowa">

      <div class=" col-lg-offset-2 col-lg-4 ">
        <p>
          <span class="bolder"> You don't have to worry about being the new guy in a group. </span>
            We believe that 
         the most effective style is 
         with a collaborative environment free from any social  
         dynamics  constraints.
        </p>
      </div>
    
      <div class="col-lg-5 leftsideborder">
        <img class="talk img-responsive" src="http://zeptogroup.com/wp-content/uploads/2014/09/conversation-marketing.png">
      </div>
      
    </div>

     <div class="row rowa eye">

       <div class="col-lg-6 col-lg-offset-1 front">
          <img class='img-responsive' src="http://coacentral.org/wp-content/uploads/2015/07/eye-yellow.png">
          
        </div>
        
        <div class="col-lg-4  paragraph">        
          <p> We want you to learn and experience through someone else's eyes. <br> <span class="bolder">Be a Speaker, Be a Listener but more importantly, Be you! <span></span> </p>                            
      </div>

      <div class="row rowa">

        
      </div>



    </div>


        
  </section>

  <section>
  	<div class="container">

  	<h1 class="carousel-title bolder"> How it Works: </h1>
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
  


  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/login.png" alt="Chania" style="margin-top: 100px;">
      <div class="carousel-caption" style="margin-bottom: -110px;">
        <h3>Register</h3>
        <p>Join our Community!</p>
      </div>
    </div>


    <div class="item">
      <img src="img/speak.png" alt="Flower" style="margin-top: 50px;">
      <div class="carousel-caption">
        <h3>Connect</h3>
        <p>We will help you find where you belong! </p>
      </div>
    </div>

    <div class="item">
      <img src="img/group.png" alt="Flower">
      <div class="carousel-caption">
        <h3>Learn</h3>
        <p>Be a Speaker, Be a Listener and Be a Friend!</p>
      </div>
    </div>
  </div>


  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  </section>
 


  <footer class="footer container-fluid">
			<div class=" row">
				<div class="col-sm-5 col-sm-offset-1 footer-right">
					
					  <div class="form-inline sub">
					    <label for="email">SUBSCRIBE TO OUR NEWS LETTER</label>
					    <input type="email" class="form-control" id="email">
					    <button type="submit" class="btn btn-primary" id="emailbtn">SUBSCRIBE</button>
					  </div>

					  
					
					<p>Copyright © ◎pen ConverSTN  Inc. all rights reserved | Design by Gerard </p>
					
				</div>

					<div class='col-sm-4' id="center-footer">
						<label> FOLLOW US</label>
						
					<div class="col-lg-4 media">		
		<i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
		<i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i>
		<i class="fa fa-pinterest-square fa-3x" aria-hidden="true"></i>
		<i class="fa fa-tumblr-square fa-3x" aria-hidden="true"></i>
		<i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
		</div>
					
					</div>



		
		
		
		
					<div class="col-sm-1">
						 <a href=""><span id="O-foot">◎</span></a>
					</div>
					
			</div>
		</footer>





</body>
</html>