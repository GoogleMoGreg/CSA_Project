<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      font-size: 20px; 
      background-color: #1abc9c; /* Green */
      color: #fff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      margin-right: 4000px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 15px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }

  .nav-tabs{
  background-color:#fff;
  color: #000000;
  }
  .tab-content{
    background-color:#303136;
    color:#fff;
    padding:5px
  }
  .nav-tabs > li > a{
    border: medium none;
    color: #000000;
  }
  .nav-tabs > li > a:hover{
    background-color: #303136 !important;
    border: medium none;
    border-radius: 0;
    color: #fff;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a id="btn_main" href="#">Main</a></li>
        <li><a id="btn_waterSched" href="#">Water Scheduling</a></li>
        <li><a id="btn_ventMonitoring" href="#">Ventilation Monitoring</a></li>
      </ul>
    </div>
  </div>
</nav>

<script type="text/javascript">
    document.getElementById("btn_main").onclick = function () {
        location.href = "http://localhost/CSA/main.php";
    };
    document.getElementById("btn_waterSched").onclick = function () {
        location.href = "http://localhost/CSA/wateringsystem.php";
    };
    document.getElementById("btn_ventMonitoring").onclick = function () {
        location.href = "http://localhost/CSA/ventilationsystem.php";
    };
</script>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">

 <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#sunday">Sunday</a></li>
    <li><a data-toggle="tab" href="#monday">Monday</a></li>
    <li><a data-toggle="tab" href="#tuesday">Tuesday</a></li>
    <li><a data-toggle="tab" href="#wednesday">Wednesday</a></li>
    <li><a data-toggle="tab" href="#thursday">Thursday</a></li>
    <li><a data-toggle="tab" href="#friday">Friday</a></li>
    <li><a data-toggle="tab" href="#saturday">Saturday</a></li>
  </ul>

  <div class="tab-content">
    <div id="sunday" class="tab-pane fade in active">
         
        <?php
           echo 'Watering Schedule for Morning: 9:00';
          ?>
    </div>

    
    <div id="monday" class="tab-pane fade">
      <h3>monday</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    
    <div id="tuesday" class="tab-pane fade">
      <h3>tuesday</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    
    <div id="wednesday" class="tab-pane fade">
      <h3>wednesday</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    
    <div id="thursday" class="tab-pane fade">
      <h3>thurs</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    
    <div id="friday" class="tab-pane fade">
      <h3>friday</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    
    <div id="saturday" class="tab-pane fade">
      <h3>saturday</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
</footer>

</body>

</html>
