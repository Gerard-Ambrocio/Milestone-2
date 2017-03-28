
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

  <style>
    .fa-circle-thin{
      font-size: 700px;
      color: #EEBC1D;
      text-shadow: 2px 2px 4px #000000;
      position: relative;
      z-index: 2;
      top: -100px;
      left: 50px;
    }
    .ripple {
      position: relative;
      top: -700px;
      left: 100px;
      z-index: 1;
    }
    .head {
      height: 300px;
      position: relative;
      z-index: 3;
    }
    .headleft {
      top: -1100px;
      left: -200px;
    }
    .headright {
      top: -1400px;
      left: 470px;

    }
  </style>
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

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
      <div class="col-lg-7">
        <i class="fa fa-circle-thin" aria-hidden="true" class="circle"></i>
        <img src="https://s-media-cache-ak0.pinimg.com/originals/33/ff/7c/33ff7c9c228c36dbc291964663e0f4a9.gif" class="ripple">
        <img src="img/headleft.png" class="head headleft" >
        <img src="img/headright.png" class="head headright" >
      </div>
    </div>
  </section>

</body>
</html>