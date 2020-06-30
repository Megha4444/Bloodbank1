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

.navbar a:hover{
	background-color:#ddd;
	color:black;
}
</style>
<body>

<div class="image">
<img src="blood1.jpg" height="400" width="1530">

<div class="navbar">
   <a href="HomeNew.php">Home</a>
   <a href="UpdateProfile.php">Update Profile</a>
   <a href="Sendrequest.php">Send Request</a>
   <a href="Search.php">Search</a>
   <a href="Home.php">Logout</a>
   <a href="ourteam.php">Our Team</a>
   <a href="About.php">Contact Us</a>
</div>
</br>
<form method="POST" action="donatebackend.php">
<div id="box">
    <div id="fill">
	<h2 style="color:red;text-align:center">DONATE BLOOD</h2>
	 <b>CAMP</b>
	 <input type="text" list="campnames" name="x" placeholder="Enter Camp name" style="width:200px;margin-left:120px"></br></br>
	 <datalist id="campnames">
     <option>Sankalp India Foundation</option>
     <option>Lions Blood Bank</option>
	 <option>Think Foundation</option>
	 <option>Friends2Support</option>
	 <option>Athar Blood Bank</option>
	 </datalist>
	 <b>UNITS TO DONATE</b>
	 <input type="text" name="y" placeholder="Enter units to donate" style="width:200px;margin-left:20px"></br></br>
	 <input type="submit" value="submit" style="width:100px">
	</div>
</div>
</form>
</div>
</body>
</html>