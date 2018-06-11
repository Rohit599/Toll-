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
<title>User - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery.min.js"></script>
</head>
<body>
<div class="form">
<p>Please Select The User Option</p>
<p>This is another secured page.</p>

<div class="">

<table border="1" width="100%">
<tr>
<td colspan="2"><font color="white" size="10px">Select User</font></td>
<td>
<a href="payment_gateway.php">Frequent User</a></td>
<td>
<a href="one_time_user.php">One time User</a></td>
</tr>
</table>
<a href="logout.php"><button>logout</button></a>
</div> <!-------select user Div Closed------>


</div>
</body>
</html>


