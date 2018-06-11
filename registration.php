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
 
  	.navbar{
  background-color: black;
 height: 13%;
box-shadow: 0px 0px 6px grey;
  
}
 .p3{
  	color: white;
  	font-weight: bold;
  	font-size: 20px;
  	margin-top: 16%;
  }
 input[type="text"],[type="password"],[type="email"] { width: 80%; font-size: 18px; border: 1px solid black; }

  </style>
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
  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" class="a1"><button class="btn btn-default">Login</button></a></li>
      </ul>
    </div>
  </div>
</nav>


<?php
	
	
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$adhar = stripslashes($_REQUEST['adhar']);
		$adhar = mysqli_real_escape_string($con,$adhar);
		$phone = stripslashes($_REQUEST['phone']);
		$phone = mysqli_real_escape_string($con,$phone);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$vehcileno = stripslashes($_REQUEST['vehcileno']);
		$vehcileno = mysqli_real_escape_string($con,$vehcileno);
		$vehciletype = stripslashes($_REQUEST['vehciletype']);
		$vehciletype = mysqli_real_escape_string($con,$vehciletype);
		$address = stripslashes($_REQUEST['address']);
		$address = mysqli_real_escape_string($con,$address);
			
		  $query1 = "SELECT * FROM rto WHERE adhaar='$adhar' and vehicle_no='$vehcileno' and vehicle_type='$vehciletype'";
		$query_run1=mysqli_query($con,$query1);
if(@mysqli_num_rows($query_run1)>0){
	 $row=@mysqli_fetch_assoc($query_run1);
	 $id=$row['id'];
	 $g=$row['government_official'];
$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (rid,username, password, email, adhar, phone, vehcileno,vehciletype, address, trn_date,government_official) VALUES ('$id','$username', '".md5($password)."', '$email', '$adhar', '$phone', '$vehcileno', '$vehciletype', '$address', '$trn_date','$g')";
        $result = mysqli_query($con,$query);
        $_SESSION["username"]=$adhar;
?>
<script> window.location.replace('sucess.php');
</script>	
<?php
	
 }
 else{
?>
<script> window.location.replace('fail.php');
</script>	
<?php

		}
 }
?>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class = "login_page" style="padding-top: 2%">
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post" class="form-horizontal">
	  <div class="form-group" >
<input type="text" name="username" placeholder="Name"  required />
</div>
  <div class="form-group" >
<input type="text" name="adhar" placeholder="Adhaar No ex= xxxx xxxx xxxx" maxlength='14' required />
</div>  <div class="form-group" >
<input type="text" name="phone" placeholder="Contact No." required />
  </div><div class="form-group" >
<input type="text" name="vehcileno" placeholder="Vehicle No." required />
</div>  <div class="form-group" >
<select name="vehciletype">
  <option value="Bus">Bus</option>
  <option value="Car">Car</option>
  <option value="Truck">Truck</option>

</select>
</div>  <div class="form-group" >
<input type="text" name="address" placeholder="Address" required /></div>
  <div class="form-group" >
<input type="email" name="email" placeholder="Email" required />
</div>  <div class="form-group" >
<input type="password" name="password" placeholder="Password" required />
</div>  <div class="form-group" >
<button type="submit" class="btn btn-danger">REGISTER</button></div>
</form>
</div>
</div>
</div>
<div class="col-sm-4"></div>
</div>
</body>
</html>