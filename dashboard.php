<?php

/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
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
  	.navbar{
  background-color:black  ;
 
box-shadow: 0px 0px 6px grey;
  
}
.p1{
color: white;
margin-top: 17%;

}
 .p3{
  	color: white;
  	font-weight: bold;
  	font-size: 20px;
  	margin-top: 16%;
  	  }
td{
	padding: 10%;
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
    <p class="p3 navbar-brand"> E-TOLL</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    	   <ul class="nav navbar-nav navbar-left">
      <li><p class="p1">Welcome <?php echo $_SESSION['username']; ?>!</p>
     </li></ul>
      <ul class="nav navbar-nav navbar-right">
        
   
           <li><a href="record.php" class="a1"><button class="btn btn-default">Record</button></a></li>
                 <li><a href="logout.php" class="a1"><button class="btn btn-default">Logout</button></a></li>

      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
	<table border="1" width="100%">
		<tr><td colspan="2">
	<h3 align="center">Select User</h3>
</td></tr>
<tr><td rowspan="3"><a href="one_time_freuser.php">Frequent User</a></td>
<td rowspan="3">
<a href="one_time_user.php">One time User</a></td>
</tr>
</table>
<!--<table border="1" width="100%" height="40%;">
<tr>
<td colspan="2">Select User</font></td>
<td>
<a href="payment_gateway.php">Frequent User</a></td>
<td>
<a href="one_time_user.php">One time User</a></td>
</tr>
</table>
-->
</div>
<div class="col-sm-4">
	</div>

<!-------select user Div Closed------>


</div>

</body>
</html>
