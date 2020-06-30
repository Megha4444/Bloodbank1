<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
$u=$_POST['d'];
$v=$_POST['e'];
$w=$_POST['f'];
if($x==""||$y==""||$x==""||$u==""||$v==""||$w=="")
{
echo "fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$query="select * FROM bloodbank4 WHERE name='$x' AND age='$y'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
$query="INSERT INTO  bloodbank4  VALUES('$x','$y','$z','$u','$v','$w')";
mysql_query($query);


header('location:login.php');
}
else{
echo "user exists";
}
}

?>
