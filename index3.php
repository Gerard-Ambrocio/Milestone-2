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

  <link rel="stylesheet" type="text/css" href="css/style.css">
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
      <div class="col-lg-5 col-md-12 paragraph">
        <h1>  Station for Conversation </h1>
        <h1 class="bot"> and Open  Learning </h1>
        <p> We are Open ConverSTN, </p>
        <p> A  platform to encourage a </p>
        <p> one-to-many teaching style </p>
        <p> of learning. We believe that </p>
        <p> the most effective style is </p>
        <p> with a collaborative environment free from any social </p> 
        <p> dynamics  constraints. </p>            
      <div>
           <button class="btn btn-primary btn-lg home-btn">JOIN NOW</button>
        </div>
        
        
      </div>
      <div class="col-lg-6 col-md-12 front">
        <img class="circle"  src="img/ring.png">
        <img src="https://s-media-cache-ak0.pinimg.com/originals/33/ff/7c/33ff7c9c228c36dbc291964663e0f4a9.gif" class="ripple">
        <img src="img/headleft.png" class="head headleft" >
        <img src="img/headright.png" class="head headright" >
        
      </div>
      <div class="col-lg-1">
        
      </div>
    </div>
  </section>
  <section>
    
  </section>

</body>
</html>