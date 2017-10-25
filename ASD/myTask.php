<?php include 'top.php'?>
<html>
<head>
<title>STS</title>
<link rel='stylesheet' href= 'select.css'>
<link rel='stylesheet' href= 'font-awesome.css'>
</head>
<body>

<script language="JavaScript">

function doSubmit(assignmentNo,orderNo)
{
	document.getElementById("assignmentNo").value = assignmentNo;
	document.getElementById("orderNo").value = orderNo;
	document.myForm.submit();
}

</script>

<form name="myForm" action="completeTask.php" method="post">

<input type="hidden" id="assignmentNo" name="assignmentNo" />
<input type="hidden" id="orderNo" name="orderNo" />
<h2>My Task</h2>

<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";
$userid = "";
$userMobile = "";

if($_SESSION['userid'] != '')
{
	$userid = $_SESSION['userid'];
	$userMobile = $_SESSION['userMobile'];
}

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT OA.ORDERNO,S.SERVICE,OA.STATUS,OA.ASSIGNMENT_NO,T.SLOT_TIME,OA.ASSIGNMENT_DATE,R.FIRSTNAME
FROM ORDER_ASSIGNMENT OA, MST_SERVICE_CODE S,MST_TIMESLOTS T,REGISTRATION R
WHERE OA.SERVICE_CODE = S.SERVICE_CODE AND
OA.SLOT_CODE = T.SLOT_CODE AND
OA.MOBILENO = R.MOBILENO AND
OA.MOBILENO = ".$userMobile." AND
OA.STATUS = 'ASSIGNED'
ORDER BY ASSIGNMENT_NO";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	echo("<table border=0 class='responstable'>");

	echo("<tr align='center'>");
		echo("<th>ORDERNO</th>");
		echo("<th>SERVICE NAME</th>");
		echo("<th>STATUS</th>");		
		echo("<th>ASSIGNMENT NO</th>");		
		echo("<th>TIME-SLOT</th>");
		echo("<th>ASSIGNMENT DATE</th>");
		echo("<th>USERNAME</th>");
		echo("<th>ACTION</th>");
	echo("</tr>");
   
	while($row = $result->fetch_assoc()) {
	
		echo("<tr>");
				echo("<td>".$row['ORDERNO']."</td>");
				
				echo("<td>".$row['SERVICE']."</td>");				
				echo("<td>".$row['STATUS']."</td>");				
				echo("<td>".$row['ASSIGNMENT_NO']."</td>");
				echo("<td>".$row['SLOT_TIME']."</td>");
				echo("<td>".$row['ASSIGNMENT_DATE']."</td>");
				echo("<td>".$row['FIRSTNAME']."</td>");

				echo("<td><input type=button value='Mark as Done' onClick=doSubmit('".$row['ASSIGNMENT_NO']."','".$row['ORDERNO']."')></input></td>");

        echo("</tr>");
		
    }
	echo("</table>");

} else {
    echo "0 results";
}
$conn->close();
?> 


</form>
</body>
</html>