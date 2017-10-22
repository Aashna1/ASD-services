<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";
$userid = $_SESSION['userid'];


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select count(*) as ITEMCOUNT from cart where userid ='".$userid."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	
    
	while($row = $result->fetch_assoc()) {
	
				
				echo($row['ITEMCOUNT']);
				


    }
	
}
else
{
	echo('0');
}
$conn->close();
?> 