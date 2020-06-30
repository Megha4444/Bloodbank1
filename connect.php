<?php
$aa=$_POST['a'];
$bb=$_POST['b'];



if($aa==""||$bb=="")
{
echo "fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$query="select * FROM bloodbank WHERE name='$aa' AND password='$bb' ";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
$query1="INSERT INTO  bloodbank  VALUES('$aa','$bb')";
mysql_query($query1);
header( 'Location:homenew.php');
}
else
{
echo "user exists";
}
}


?>