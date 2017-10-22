<?php include 'top.php'?>
<html>
<head>
<title>STS</title>
<link rel='stylesheet' href= 'select.css'>
<link rel='stylesheet' href= 'font-awesome.css'>
</head>
<body>



<h2>My Orders</h2>

<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";
$userid = "";

if($_SESSION['userid'] != '')
{
	$userid = $_SESSION['userid'];
}

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM orderbook o, orderitems i,mst_service_code m where m.service_code = i.service_code and o.orderno = i.ref_orderno and o.userid = '".$userid."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	echo("<table border=0 class='responstable'>");

	echo("<tr align='center'>");
		echo("<th>SELECT</th>");
		echo("<th>ORDERNO</th>");
		echo("<th>ITEMNO</th>");		
		echo("<th>ORDERDATE</th>");		
		echo("<th>SERVICE</th>");
		echo("<th>PROBLEM_DESC</th>");
		echo("<th>USERID</th>");
		echo("<th>COMMENTS</th>");
	echo("</tr>");
    $lastOrderNo = 0;
	while($row = $result->fetch_assoc()) {
	
		echo("<tr>");
				echo("<td><input type='checkbox' value='>".$row['ORDERNO']."'/></td>");
				
				if($lastOrderNo  == $row['ORDERNO'])
				{
					echo("<td> --- </td>");
				}
				else
				{
					echo("<td>".$row['ORDERNO']."</td>");
				}
				echo("<td>".$row['ITEMNO']."</td>");				
				echo("<td>".$row['ORDERDATE']."</td>");				
				echo("<td>".$row['SERVICE']."</td>");
				echo("<td>".$row['PROBLEM_DESC']."</td>");
				echo("<td>".$row['USERID']."</td>");
				echo("<td>".$row['COMMENTS']."</td>");

        echo("</tr>");
		$lastOrderNo  = $row['ORDERNO'];
    }
	echo("</table>");

} else {
    echo "0 results";
}
$conn->close();
?> 



</body>
</html>