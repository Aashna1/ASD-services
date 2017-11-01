<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";
$userid = $_SESSION['userid'];
$assignmentNo = $_POST['assignmentNo'];
$orderNo=$_POST['orderNo'];


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE ORDER_ASSIGNMENT SET STATUS = 'COMPLETED' WHERE ASSIGNMENT_NO = ".$assignmentNo;

$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {

   $updateSqlStr = "call CLOSE_ORDER(".$orderNo.")";

   if($conn->query($updateSqlStr) === TRUE) {
	   // do nothing
   }
	// in all case fwd to mytask page
   header('Location: myTask.php');
} else {
    header('Location: index.php');
}

$conn->close();
?> 