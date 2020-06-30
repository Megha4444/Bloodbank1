<?php
$p=$_POST['a'];
$q=$_POST['b'];
$r=$_POST['c'];
$s=$_POST['d'];
$t=$_POST['e'];
if($p==""||$q==""||$r==""||$s==""||$t=="")
{
echo "fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$query="select * FROM bloodbank6 WHERE bankname='$p' AND bloodgroup='$q'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
$query="INSERT INTO  bloodbank6  VALUES('$p','$q','$r','$s','$t','$u')";
mysql_query($query);


header('location:Result.php');
}
else{
echo "user exists";
}
}

?>
