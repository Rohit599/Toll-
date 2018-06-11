<?php
session_start();
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
   
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/.css">
    <link rel="icon" href="/zealicon/assets/images/2.jpg" type="image/jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <style type="text/css">
  body{
  	background-image: url('assets/images/2.jpg');
  	background-repeat: no-repeat;
background-size: cover;
 
  }
  .p3{
  	color: white;
  	font-weight: bold;
  	font-size: 20px;
  	margin-top: 16%;
  }
  	.navbar{
  background-color: black;
 height: 13%;
box-shadow: 0px 0px 6px grey;
  
}
.h3{
	font-weight: bold;
	font-size: 24px;
}  </style>

</head>
<body>

<body>

<nav class="navbar navbar-dafault">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="but1 navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    <p class="p3"> E-TOLL</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <form class="navbar-form navbar-right" action="" method="post" style="margin-top: 1.2%;">
      <div class="form-group" >
      <input type="text" name="username" placeholder="Adhaar No xxxx xxxx xxxx" class="form_control" required />

    </div>
      <div class="form-group">
      <input type="password" name="password" placeholder="Password" class="form_control" required />
    </div>
      <button type="submit" class="btn btn-default">Login</button>
    </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registration.php" class="a1"><button class="btn btn-default">Register</button></a></li>
      </ul>
    </div>
  </div>
</nav>



<?php
	
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE adhar='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			$userDetail = mysqli_fetch_assoc($result);
			$_SESSION['userId'] = $userDetail['id'];
			//var_dump( $_SESSION['userId'] );die;
			header("Location: dashboard.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
			}
  ?><br><br><br><br><br>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-5">
<h1 class="h3">Ministry Of Road Transport And Highways</h1>

</div>
<div class="col-sm-3"></div>
</div>
</body>
</html>
