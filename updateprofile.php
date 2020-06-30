<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p{
	font-size:20px;
	font-weight:bold;
	color:red;
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
	text-align:center;
    border:2px solid red;
	width:1000px;
	padding:10px;
	margin:20px;
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
#side{
	margin-left:30px;
}
</style>
</head>
<body>
<div class="image">
<img src="blood1.jpg" height="400" width="1530">

<div class="navbar">
   <a href="HomeNew.php">Home</a>
   <a href="UpdateProfile.php">Update Profile</a>
   <a href="DonateInfo.php">Donate Blood</a>
   <a href="Search.php">Search</a> 
   <a href="Sendrequest.php">Send Request</a>
   <a href="About.php">Contact Us</a>
   <a href="Home.php">Logout</a>
   <a href="ourteam.php">Our Team</a>
</div>
</br>

<form method="POST" action="up.php">
<div id="box">
     <div id="fill">
	      <b>AGE</b>
		  <input type="text" name="b" placeholder="Enter New Age" min="18" max="60" style="width:200px;margin-left:130px" required></br></br>
		  <b>MOBILE NUMBER</b>
		  <input type="text" placeholder="Enter new 10 digit Mobile number" name="c" style="width:200px;margin-left:25px" required></br></br>
	      <input type="submit" value="update" style="width:100px">
	 </div>
</div>
</div>

</body>
</html>