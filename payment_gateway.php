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
</head>
<body>
<div class="">
<p style="color: black;">Payment Gateway</p><br>
<center><p style="color: white;">This is another secured page.</p></center>
<br>
<a href="welcome.php">Next</a>

</body>
</html>
<!--<script>
    setTimeout(function(){
       window.location.href = 'frequent_user.php';
    }, 4000);
</script>
-->