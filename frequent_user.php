<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>User - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery.min.js"></script>
</head>
<body>
<div class="form">
<p>User</p>
<p>This is another secured page.</p>

<div class="Frequent-User"> 

<?php
require('db.php');
?>
<table border="2">
<tr>
<th colspan="7">User Details</th><tr>
<tr>
<th>Name</th><th>Email</th><th>Contact No</th><th>Vehicle Type</th><th>Vehicle Number</th>
<th>Address</th><th>Adhaar Number</th></tr>

<?php
session_start();

if (isset($_SESSION['username'])){
		
		$username = $_SESSION['username'];
    
		$select="SELECT * FROM  users WHERE adhar='".$username."' ";
		$display=mysqli_query($con, $select) or die ("unable to select");
		while($row=mysqli_fetch_assoc($display))
		{
			?>
			<tr>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['vehciletype'];?></td>
			<td><?php echo $row['vehcileno'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['adhar'];?></td>
			</tr>
			<?php
		}
} else {
		header("Location: index.php"); // Redirect user to index.php
	}
?>
</div>
</div>
</body>
</html>
