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
    margin-left:100px;
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
    margin-left:50px;
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
<img src="blood1.jpg" height="400" width="1530">

<div class="navbar">
    <a href="Home.php">Home</a>
   <a href="Search.php">Search</a>
   <a href="SendRequest.php">Send Request</a>
   <a href="Donateinfo.php">Donate</a>
   <a href="updateprofile.php">Update</a>
   <a href="Home.php">Log Out</a>
   <a href="About.php">Contact Us</a>
   <a href="ourteam.php">Our Team</a>
</div>
<form method="POST" action="sendrequestback.php">
<div id="out">
<div id="fill">
    <div id="fillin" style="text-align:center">
	<h2 style="color:red">BLOOD REQUEST</h2>
    <b>Bank name</b><input type="text" list="banknames" placeholder="Enter bank's name" name="a" style="width:200px" id="slide4" required></br></br>
	 
	 <datalist id="banknames">
     <option>Jeevan Jyoti Blood Bank</option>
     <option>Ama Blood Bank</option>
	 <option>Hemocell Pvt Ltd </option>
	 <option>Rama Devi Medical Center</option>
	 </datalist>

    <b>Blood Group</b><input list="bloodtypes" name="b" style="width:200px" id="slide4" required></br></br>
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
	
	<b>Units</b><input type="number" placeholder="No of Units needed" name="c" style="width:200px" id="slide1" required></br></br>
	
    <b>Mobile Number</b><input type="text" placeholder="Enter 10 digit mobile number" name="d" style="width:200px" id="slide2" required></br></br>
	
    <b>Email</b><input type="text" placeholder="Enter Email" name="e" style="width:200px" id="slide3" required></br></br>
	
	<input type="submit" value="Submit" name="sub"></br></br>
	</div>
   </div>
</div>
</form>
</div>

</body>
</html>