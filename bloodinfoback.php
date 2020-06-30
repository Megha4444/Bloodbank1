<?php
    session_start();
$servername = "localhost";
$username = "root";
$password = "aa";
$dbname = "bloodbank";

		 $sql = "SELECT * FROM BLOODBANK";
		 $result = mysqli_query($conn,$sql);
		 
		 if(mysqli_num_rows($result)>0)
		 {
			 echo "<table style='width:100%'><thead><tr><th>Camp</th><th>Units</th></tr></thead>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["Camp"]."</td><td>".$row["Units"]."</td></tr>";
    }
    echo "</table>";
		 }
		 else{
			 echo "<p>"."NO RESULTS FOUND"."</p>";
		 }
?>