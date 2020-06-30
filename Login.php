<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
#fill{
    border:2px solid red;
	width:1000px;
	padding:10px;
	margin:20px;
}
#out{

    margin-left:150px;
	margin-right:150px;
}
#side{
    margin-left:50px;
}
#side1{
    margin-left:50px;
}
</style>
</head>
<body>

<div class="image">
<img src="blood1.jpg" height="400" width="1530">

<div class="navbar">
   <a href="Home.php">Home</a> 
   <a href="LogIn.php">Log In</a>
   <a href="About.php">Contact Us</a>
   <a href="ourteam.php">Our Team</a>
</div>
<form method="POST" action="connect.php">
    <div id="out">
    <div id="fill" style="text-align:center">
   <h2 style="color:red">BLOOD DONOR LOGIN</h2>
   <b>USERNAME</b>
   <input type="text" name="a" placeholder="Enter username" id="side" autocomplete:on autofocus></br></br>
   <b>PASSWORD</b>
   <input type="password" name="b" id="side1" ></br></br>
   <input type="submit" value="Log In"></br></br>
   <P>NOT REGISTERED AS DONOR?</p>
   <p><a href="DonorRegistration.php">SIGN UP</a> HERE</P>
   </div>
</div>
</form>
</div>



</body>
</html>