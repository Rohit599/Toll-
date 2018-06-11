<?php

/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php"); 
$adhaar=$_SESSION["username"];
 $query1 = "SELECT * FROM users WHERE adhar='$adhaar'";
		$query_run1=mysqli_query($con,$query1);
if(@mysqli_num_rows($query_run1)>0){
	 $row=@mysqli_fetch_assoc($query_run1);
	 $uid=$row['id'];
$rid=$row['rid'];
$_SESSION["id"]=$uid;
$_SESSION["gov"]=$row['government_official'];
}//include auth.php file on all secure pages ?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>User - Secured Page</title>
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
margin-top: 17%;
}
td,th{

padding: 1%;}
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
<?php

   
   if(isset($_POST['submit']))
{
 $To_city = mysqli_real_escape_string($con , $_POST['To_city']);
 $From_city = mysqli_real_escape_string($con , $_POST['From_city']);
 $_SESSION['tocity'] = $To_city;
 $_SESSION['fromcity'] = $From_city;
 $query_insert = "INSERT into one_time_user (rid,uid,To_city , From_city) VALUES('$rid','$uid','$To_city' , '$From_city' ) " ;
 $query_run = mysqli_query( $con , $query_insert) or die('Error in insertion');
if($query_run)
{
	$query="UPDATE users SET user_type='o' WHERE adhar='$adhaar'";
	$query_run1 = mysqli_query( $con , $query) ;
header('Location:payment_gateway.php') ;
}	
else
{
echo "<font color='white'>"."Data not submited"."</font>";	
}
}  
?>



<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<p style="color: white;">Enter Your Journey Details</p><br><br>

<form action="" method="POST">
<table border="1" width="100%">
<tr>
<td>To:</td>
<td>
<select name="To_city">
<option value="">Select City</option>
<option value="Lucknow">Lucknow</option>
<option value="Varansi">Varansi</option>
<option value="Jaunpur">Jaunpur</option>
<option value="Allahabad">Allahabad</option>
</select> 
</td> </tr>

<tr>
<td>From:</td>
<td>
<select name="From_city">
<option value="">Select City</option>
<option value="Varansi">Varansi</option>
<option value="Allahabad">Allahabad</option>
<option value="Lucknow">Lucknow</option>
<option value="Jaunpur">Jaunpur</option>
</select> 
</td></tr>
<tr>
<td colspan="2">
<input type="submit" name="submit" value="Submit" />
</td>
</tr>
</table>
</form>
</div>
<div class="col-sm-3"></div>
</div>
</body>
</html>

