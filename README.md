# antosha
tetsingSite
<?php
$mysqli = new mysqli('localhost', '*****', '*****', '*****');// connection
$result= $mysqli->query("SELECT * FROM `cobzars` ORDER BY RAND () LIMIT 1");
	foreach ($result as $row){
		//echo "<ul>";
			echo $row['virsh']."<br><br>";	
			echo $row['nazva'];
			echo $row['year'];
		//echo "</ul>";
		}	
$mysqli->close();// disconnection
?>
