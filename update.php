<?php
$hostname = "localhost";
$username = "zencart156c";
$password = "iEMS!1311131";
$database = "zencart156c"; 
$link = new mysqli($hostname, $username, $password, $database);
$query = "SELECT * from `zencart156c`.`inflowRef`";
$result = mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result)){
	print_r($row);
	print "<br>";
	//mysqli_query($link,$update_query) or DIE ('Unable to complete query'); 
	
	//echo "<br>";
	//echo $expired_barcode;
	//echo " "; 
	//echo $expired_description;	
 	//$expired_array[$row['expired-barcode']] = $row['expired-description'];
} 
echo "<a href= 'counter-main.php'>Back to Main</a>";
?>