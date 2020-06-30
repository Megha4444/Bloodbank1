<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
p{
	font-size:30px;
	color:red;
	font-weight:bold;
	text-align:center;
}
body{
    margin:0;
	padding:0;
}
.image{
	margin:0;
	padding:0;
}
.navbar{
	overflow:hidden;
	background-color:#333;
	font-family:'PT Sans', sans-serif;
}
.navbar a{
	float:left;
	display:block;
	color:white;
	text-align:center;
	padding:14px 20px;
	text-decoration:none;

.navbar a:hover{
	background-color:#ddd;
	color:black;
}
#fill{
    border:2px solid red;
	width:1000px;
	padding:10px;
	margin:20px;
}
#out{ 


           margin-left:150px;
		   margin-right;150px;
}
#side{
          margin-left:50px;		   
}
#side1{ 
              margin-left:50px;
}			  
			  
</style>
<body>

<div class="image">
<img src="blood1.jpg" height="400" width="1530">

<div class="navbar">
   <a href="UpdateProfile.php">Update Profile</a>
   <a href="DonateInfo.php">Donate Blood</a>
   <a href="Sendrequest.php">Send Request</a>
   <a href="Search.php">Search</a>
   <a href="Home.php">Logout</a>
   <a href="ourteam.php">Our Team</a>
</div>

<h1 style="text-align:center;color:red">WELCOME TO THE BLOOD BANK</h1>
</br>
</div>
<?php

mysql_select_db("bloodbank");
 session_start();
 echo "<p>"." "." ".$_SESSION['NAME']."</p>";
?>
</body>
</html> 