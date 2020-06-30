<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
p{
	color:red;
	text-align:center;
	font-size:20px;
	font-weight:bold;
}
body{
    margin:0;
	padding:0;
}
.image{
	margin:0;
	padding:0;
}
#slide{
    margin-left:50px;
}
#slide1{
    margin-left:110px;
}
#slide2{
    margin-left:34px;
}
#slide3{
    margin-left:100px;
}
#slide4{
    margin-left:75px;
}
#slide5{
    margin-left:20px;
}
#out{
    margin-left:150px;
	margin-right:150px;
}
#fill{
    border:2px solid red;
	width:1000px;
	padding:10px;
	margin:20px;
	
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
}
.navbar a:hover{
	background-color:#ddd;
	color:black;
}
</style>
<body>
<div class="image">
<img src="blood4.gif" height="400" width="1530">

<div class="navbar">
    <a href="Home.php">Home</a>
   <a href="Search.php">Search</a>
   <a href="SendRequest.php">Send Request</a>
   <a href="updateprofile.php">Update Profile</a>
   <a href="LogIn.php">Log In</a>
   <a href="About.php">Contact Us</a>
   <a href="ourteam.php">Our Team</a>
</div>
<form method="POST" action="donorregbackend.php">
<div id="out">
<div id="fill">
    <div id="fillin" style="text-align:center">
	<h2 style="color:red">DONOR REGISTRATION</h2>
    <b>Donor Name</b><input type="text" placeholder="Enter Name" name="a" style="width:200px" id="slide" required></br></br>
	
    <b>Age</b><input type="number" placeholder="Enter Age" name="b" min="18" max="60" style="width:200px" id="slide1" required></br></br>
	
    <b>Mobile Number</b><input type="text" placeholder="Enter 10 digit mobile number" name="c" style="width:200px" id="slide2" required></br></br>

    <b>Blood Group</b><input list="bloodtypes" name="d" style="width:200px" id="slide" required></br></br>
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
	
    <b>Email</b><input type="email" placeholder="" name="e" style="width:200px" id="slide3" required></br></br>

    <b>Password</b><input type="password" placeholder="Enter Password" name="f" style="width:200px" id="slide4" required></br></br>
	
	<input type="submit" value="Register"></br></br>
	<p>Account already created..<a href="LogIn.php">LogIn</a></p>
	</div>
   </div>
</div>
</form>
</div>



</body>
</html>