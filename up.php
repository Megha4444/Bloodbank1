<?php

$y=$_POST['b'];
$z=$_POST['c'];

if($y==""||$z=="")
{
echo "fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$query="select * FROM bloodbank4 WHERE  age='$y' AND phone='$z' ";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
$query1="UPDATE bloodbank4 SET age='$y'  WHERE phone='$z'  ";
mysql_query($query1);
header('Location:profileupdated.php');
}
else
{
echo "mismatch";
}
}

?>