<?php
$mm=$_POST['a'];




if($mm=="")
{
echo "fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
$query="select * FROM bloodbank5 WHERE bloodgroup='$mm' ";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
echo "error";
}



else{
$query1="INSERT INTO  bloodbank5  VALUES('$mm')";
mysql_query($query1);
header( 'Location:Entries.php');
}


}


?>