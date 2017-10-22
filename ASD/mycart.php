<?php include 'top.php'?>
<html>
<head>
<title>STS</title>
<link rel='stylesheet' href= 'select.css'>
<link rel='stylesheet' href= 'font-awesome.css'>
</head>
<body>


<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";
$recordsCount = 0;

//echo($_SESSION['userid']);
?>
<h2>My Cart</h2>
<?php
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select c.SERVICE_CODE,s.SERVICE,c.PROBLEM_DESCRIPTION from cart c, mst_service_code s where c.service_code = s.service_code and 
userid = '".$_SESSION['userid']."'";

?>
<form name="items" action="bookOrder.php" method="post">
<table class='responstable'>

<?php

$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
       
		echo("<TR>");
		echo("<TH>Service Code</TH>");
		echo("<TH>Service </TH>");
		echo("<TH>Problem Description</TH>");
		echo("<TH>Action</TH>");
		echo("</TR>");
		while($row = $result->fetch_assoc()) 
		{			
				echo("<TR><TD><input type='text' value='".$row['SERVICE_CODE']."' disabled/></TD>");
				echo("<TD>".$row['SERVICE']."</TD>");
				echo("<TD>".$row['PROBLEM_DESCRIPTION']."</TD>");
				echo("<TD><a href='removeItem.php?serviceCode=".$row['SERVICE_CODE']."'>Remove</a></TD></TR>");
				$recordsCount +=1;


		}
	
	}

$conn->close();
?>
<tr>
<?php

if($recordsCount > 0)
{
	?>
		<td colspan=4><input type="submit" value="Book Order"></input></td>
<?php
}
	else
	{
		echo "<td colspan=4>Add items to cart for order booking</td>";
	}
?>
</tr>
</table>


</body>
</html>