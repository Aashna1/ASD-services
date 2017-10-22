<?php include 'top.php'?>
<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";
$nextOrderNo = 0;
$allOk = false;
$userId = '';

if($_SESSION['userid'] != '')
{
	$userId = $_SESSION['userid'];
}


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select max(orderno)+1 as nextOrderNo from orderbook";
$result = $conn->query($sql);
if ($result->num_rows > 0) {    
	while($row = $result->fetch_assoc()) {
		$nextOrderNo = $row['nextOrderNo'];	
	}
}
else{
	$nextOrderNo = 1;
}


$sql_bookOrder = "insert into orderbook(ORDERNO,USERID,ORDERDATE,COMMENTS) values(".$nextOrderNo.",'".$userId."',SYSDATE(),'Order Confirmed');";

if ($conn->query($sql_bookOrder) === TRUE) 
{
    /* insert order item */

	$sql_orderItems = "select * from cart where userid = '".$userId."' ";
	$result = $conn->query($sql_orderItems);
	
	if ($result->num_rows > 0) {
		$itemCounter =1;
		
		while($row = $result->fetch_assoc()) {
			
			$sql_insertOrderedItems = "insert into orderitems(REF_ORDERNO,ITEMNO,SERVICE_CODE,PROBLEM_DESC) values(".$nextOrderNo.",".$itemCounter.",'".$row['SERVICE_CODE']."','".$row['PROBLEM_DESCRIPTION']."')";

			

			if ($conn->query($sql_insertOrderedItems) === TRUE) 
			{

			$itemCounter += 1;

			}

		}

		if($itemCounter > 1)
		{

		/* clean up the cart */
	
		$sql_deleteCart = "delete from cart where userid = '".$userId."'";

		if ($conn->query($sql_deleteCart) === TRUE) 
		{
			$allOk = true;
			//echo "Order Confimred, your Order No is ".$nextOrderNo." Dated ".date("d/m/Y");
		}

		}

		
	}
	
	
} 
else 
{
    echo "Error: " . $sql_bookOrder . "<br>" . $conn->error;
}




$conn->close();




?> 


<html>
<head>
<title>STS</title>
<link rel='stylesheet' href= 'select.css'>
<link rel='stylesheet' href= 'font-awesome.css'>
</head>
<body>
<form action="index.php" method="post" >
<center>
<table width=100%>
<tr align="center">
<td colspan=3>
<h2>

	<?php
	if($allOk== true)
	{
		echo "Order Confimred, your Order No is ".$nextOrderNo." Dated ".date("d/m/Y");
	}
	?>
</h2>
</td>
</tr>
<tr align="center">
	<td><input type="submit" value="Back To Home"></input></td>
</tr>
</table>
</center>
</form>
</body>
</html>