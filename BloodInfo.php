<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
table,th,td{
	text-align:center;
	border:2px solid red;
	border-collapse:collapse;
	padding:5px;
}
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
#box{
    margin-left:150px;
	margin-right:150px;
}
#fill{
    border:2px solid red;
	width:1000px;
	padding:10px;
	margin:20px;
	text-align:center;
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
}
.navbar a:hover{
	background-color:#ddd;
	color:black;
}
#out{
	margin-top:30px;
	  margin-left:150px;
	margin-right:150px;
}
</style>
<body>

<div class="image">
<img src="blood1.jpg" height="400" width="1530">
<form method="POST" action="bloodinfoback.php">
<div class="navbar">
   <a href="HomeNew.php">Home</a>
   <a href="UpdateProfile.php">Update Profile</a>
   <a href="Search.php">Search</a>
   <a href="Sendrequest.php">Send Request</a>
   <a href="About.php">Contact Us</a>
   <a href="Home.php">Logout</a>
   <a href="ourteam.php">Our Team</a>
</div>
</br>
</div>
<div id="out">
<h1 style="text-align:center;color:red">Blood Donation Request Submitted Successfully!</h1></br>

</br>
</div>
</form>
</body>
</html>