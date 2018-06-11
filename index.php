<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<html>
<head>
<title>Welcome home</title>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link rel="icon" href="/zealicon/assets/images/2.jpg" type="image/jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.navbar{
  background-color: #DFEBF2  ;
  height: 13%;
box-shadow: 0px 0px 6px grey;
  
}
  </style>
</head>
<body>


 <nav class="navbar navbar-dafault">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="but1 navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    <a class="navbar-brand" href="#"><img src="assets/images/i.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <form class="navbar-form navbar-right" action="login1.php" method="post" style="margin-top: 1.2%;">
      <div class="form-group" >
      <input class="form-control" type="text" placeholder="Enter your Email" name="luser" required>
    </div>
      <div class="form-group">
      <input class="form-control" type="password" placeholder="Enter your password" name="lpass" required>
    </div>
      <button type="submit" class="btn btn-default">Login</button>
    </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="user_register.php" class="a1"><button class="btn btn-default">Register</button></a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<p><a href="user.php">User</a></p>
<a href="logout.php">Logout</a>


<br /><br /><br /><br />
</div>
</body>
</html>
