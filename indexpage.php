<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student Attendance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width" /><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,300,700'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css'><link rel="stylesheet" href="./css/style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
    <nav class="navbar navbar-toggleable-md fixed-top navbar-transparent" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                <a class="navbar-brand" href="indexpage.php">Online Attendance</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                <li class="active"><a class="navbar-brand" href="indexpage.php">Home</a></li>
            <li><a class="navbar-brand" href="student.php">Student Dashboard</a></li>
            <li><a class="navbar-brand" href="Faculty Login.php">Faculty Login</a></li>
            <li><a class="navbar-brand" href="Faculty Registration.php">Faculty Registration</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="page-header section-dark" style="background-image: url('http://demos.creative-tim.com/paper-kit-2/assets/img/antoine-barres.jpg')">
            <div class="filter"></div>
    		<div class="content-center">
    			<div class="container">
    				<div class="title-brand">
    					<h1 class="presentation-title">Online Attendance</h1>
    					<div class="fog-low">
    						<img src="http://demos.creative-tim.com/paper-kit-2/assets/img/fog-low.png" alt="">
    					</div>
    					<div class="fog-low right">
    						<img src="http://demos.creative-tim.com/paper-kit-2/assets/img/fog-low.png" alt="">
    					</div>
    				</div>

    				<h2 class="presentation-subtitle text-center">Management System</h2>
                    <br><br><br>
                <p>&copy; Developed by  <a href="https://www.linkedin.com/in/saipavan044"> Sai Pavan </a></p>
    			</div>
    		</div>
            <div class="moving-clouds" style="background-image: url('http://demos.creative-tim.com/paper-kit-2/assets/img/clouds.png'); ">    
        </div>
    	</div>
  </div>
</body>
  <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script><script  src="./js/script.js"></script>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
</body>
</html>
