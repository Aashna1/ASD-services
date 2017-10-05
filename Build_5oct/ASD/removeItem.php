<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo($_GET['serviceCode']);
//echo($_SESSION['userid']);


if($_SESSION['userid'] != '' && $_GET['serviceCode'] != '')
{
		$sql_deleteCart = "delete from cart where userid='".$_SESSION['userid']."' and SERVICE_CODE ='".$_GET['serviceCode']."'";

		if ($conn->query($sql_deleteCart) === TRUE) 
		{
			header('Location: mycart.php');
		}
}

header('Location: mycart.php');
?>