<?php
$xx=$_POST['x'];
$yy=$_POST['y'];



if($xx==""||$yy=="")
{
echo "fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$query="select * FROM bloodbank2 WHERE camp='$xx' AND units='$yy' ";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
echo "error";
}
else
{
$query1="INSERT INTO  bloodbank2  VALUES('$xx','$yy')";
mysql_query($query1);
header( 'Location:bloodinfo.php');
}
}
?>
  