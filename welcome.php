<?php session_start();
include 'db.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

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
 .p3{
  	color: white;
  	font-weight: bold;
  	font-size: 20px;
  	margin-top: 16%;
  }
.p1{
color: white;
}
td,th{

padding: 3%;}
.p2{
font-size: 30px;
}
.a1{
	font-size: 20px;
	color: red;
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
     <p class="p3"> E-TOLL</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    	   <ul class="nav navbar-nav navbar-left">
      <li><p class="p1">Welcome <?php echo $_SESSION['username']; ?>!</p>
     </li></ul>
      <ul class="nav navbar-nav navbar-right">
        
   
           
                 <li><a href="logout.php" class="a1"><button class="btn btn-default">Logout</button></a></li>

      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-5">
<p class="p2"> Download Generated QR code</p>
<?php
    $sql="SELECT adhar, vehcileno, vehciletype FROM users WHERE adhar='".$_SESSION['username']."'";
	$result=mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($result))
	{
		$_SESSION['adhar'] = $row['adhar'];
		$_SESSION['vehicleno'] = $row['vehcileno'];
		$_SESSION['vehciletype'] = $row['vehciletype'];
	}
?>
<a href="displayqr.php" class="a1"><button class="btn btn-danger">Show QR code</button></a>
<br>
</div>
<div class="col-sm-3"></div>
</div>

</body>
</html?