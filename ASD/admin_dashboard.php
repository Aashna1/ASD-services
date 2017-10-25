<?php include 'top.php'?>
<html>
<head>
<title>STS</title>
<link rel='stylesheet' href= 'select.css'>
<link rel='stylesheet' href= 'font-awesome.css'>
</head>
<body>



<h2>Admin Dashboard</h2>

<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT O.ORDERNO,O.USERID,O.ORDERDATE,I.ITEMNO,M.SERVICE,I.PROBLEM_DESC,O.STATUS FROM orderbook o, orderitems i,mst_service_code m where m.service_code = i.service_code and o.orderno = i.ref_orderno";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	echo("<table border=0 class='responstable'>");

	echo("<tr align='center'>");
		//echo("<th>SELECT</th>");
		echo("<th>ORDER NO</th>");
		echo("<th>CUSTOMER ID</th>");
		echo("<th>ORDER DATE</th>");
		echo("<th>ITEMNO</th>");
		echo("<th>SERVICE</th>");
		echo("<th>PROBLEM DESCRIPTION</th>");
		echo("<th>ORDER STATUS</th>");
	echo("</tr>");
    
	while($row = $result->fetch_assoc()) {
		echo("<tr>");
				//echo("<td><input type='checkbox' value='>".$row['ORDERNO']."'/></td>");
				echo("<td>".$row['ORDERNO']."</td>");
				echo("<td>".$row['USERID']."</td>");
				echo("<td>".$row['ORDERDATE']."</td>");
				echo("<td>".$row['ITEMNO']."</td>");
				echo("<td>".$row['SERVICE']."</td>");
				echo("<td>".$row['PROBLEM_DESC']."</td>");
				echo("<td>".$row['STATUS']."</td>");

        echo("</tr>");
    }
	echo("</table>");

} else {
    echo "0 results";
}
$conn->close();
?> 
<!--
<select width="200">
	<option value="">Employe1</option>
	<option value="">Employe2</option>
	<option value="">Employe3</option>
</select>

<input type="button" class="custombutton" onClick="doAssign()" value="Assign"/>

-->
</body>
</html>