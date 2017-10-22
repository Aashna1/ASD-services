<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";
$serviceName = $_POST['serviceName'];
$serviceCode = $_POST['serviceCode'];
$probDesc = $_POST['probDescHidn'];
$userid = $_SESSION['userid'];

//echo($serviceName);
//echo($serviceCode);
//echo($userid);

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into cart(USERID,SERVICE_CODE,PROBLEM_DESCRIPTION) values('".$userid."','".$serviceCode."','".$probDesc."')";

//echo($sql);


if ($conn->query($sql) === TRUE) 
{
	//header('Location: index.php');
	if($serviceName == 'SecurityService')
	{
		header('Location: SecurityService.php');
	}
	elseif($serviceName == 'HomeAppService')
	{
		header('Location: HomeAppService.php');
	}
	elseif($serviceName == 'ComputerService')
	{
		header('Location: ComputerService.php');
	}
	elseif($serviceName == 'ElectricalService')
	{
		header('Location: ElectricalService.php');
	}
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?> 