<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table,th,td{
	margin-top:5px;
	text-align:center;
	border:2px solid red;
	border-collapse:collapse;
	padding:5px;
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
    margin-top:20px;
    margin-left:150px;
	margin-right:150px;
}
#fill{
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
#out{
	margin-top:30px;
	margin-left:150px;
	margin-right:150px;
}

</style>
</head>
<body>
<div class="image">
<img src="blood1.jpg" height="400" width="1530">
<div class="navbar">
   <a href="Home.php">Home</a>
   <a href="Donateinfo.php">Donate</a>
   <a href="SendRequest.php">Send Request</a>
   <a href="updateprofile.php">Update Profile</a>   
   <a href="home.php">Log Out</a>
   <a href="About.php">Contact Us</a>
   <a href="ourteam.php">Our Team</a>
</div>
</br>
<form method="POST" action="searchback.php">
<div id="box">
   <div id="fill" style="text-align:center">
   <h2 style="color:red">SEARCH BLOOD</h2></br>
   <b>SEARCH BLOOD GROUP</b><input list="bloodtypes" name="a" id="side" required></br></br>
    <datalist id="bloodtypes">
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>O+</option>
    <option>O-</option>
    <option>AB+</option>
    <option>AB-</option>
    </datalist>
<input type="submit" value="Search">

</div>
</div>
</form>
</div>
<div id="out">
</div>
</body>
</html>