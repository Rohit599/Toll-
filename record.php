<?php
session_start();
require('db.php');
?>
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

padding: 3%;}
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
    	   <ul class="nav navbar-nav">
      <li><p class="p1">Welcome <?php echo $_SESSION['username']; ?>!</p>
     </li></ul>
      <ul class="nav navbar-nav navbar-right">
        
   
           <li><a href="dashboard.php" class="a1"><button class="btn btn-default">User Toll</button></a></li>
                 <li><a href="logout.php" class="a1"><button class="btn btn-default">Logout</button></a></li>

      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-7">
<table border="2" width="100%">
<tr>
<th>Name</th><th colspan="2">Email</th><th>Phone</th><th>Vehicle Type</th><th>Vehicle Number</th>
<th>Address</th><th>Adhaar Number</th></tr>

<?php


if (isset( $_SESSION['userId'] )){
		
		//$id = $_GET['id'];
		$idPickedFromSession = $_SESSION['userId'];
    
		$select="SELECT * FROM  users WHERE id = $idPickedFromSession ; ";
		//var_dump()
		$display = mysqli_query($con, $select) or die ("unable to select");
		//var_dump( $display );
		while( $row = mysqli_fetch_assoc( $display ) )
		{
			?>
			<tr>
			<td><?php echo $row['username'];?></td>
			<td colspan="2"><?php echo $row['email'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['vehciletype'];?></td>
			<td><?php echo $row['vehcileno'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['adhar'];?></td>
			</tr>
			<?php
		}
} 
?>
</table>
</div>
<div class="col-sm-3">
</div>
</div>

</body>
</html>
