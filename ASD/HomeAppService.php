<?php include 'top.php'?>
<html>
<head> </head>
<body>

<link rel='stylesheet' href= 'select.css'>
<link rel='stylesheet' href= 'loginstyle.css'>
</head>
<body>


<form name="serviceForm" action="addToCart.php" method="post">
<table class='responstable'>
<input type="hidden" id="serviceName" name="serviceName" value="HomeAppService"/>
<input type="hidden" id="serviceCode" name="serviceCode" />
<input type="hidden" id="probDescHidn" name="probDescHidn" />

<script language="JavaScript">
function doSubmit(serviceCode,count)
{
	document.getElementById("serviceCode").value = serviceCode;
	document.getElementById("probDescHidn").value = document.getElementById("probDesc" + count).value;
	document.serviceForm.submit();
}

</script>
<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";
$isLoggedIn = false;

if($_SESSION['userid'] != '')
{
	$isLoggedIn = true;
}

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from mst_service_code where service_code like 'HA%'";

$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
       
		echo("<TR>");
		echo("<TH>Service Code</TH>");
		echo("<TH>Service </TH>");
		echo("<TH>Service Charge</TH>");
		echo("<TH>Problem Description</TH>");
		echo("<TH>Action</TH>");
		echo("</TR>");
		$counter = 1;
		while($row = $result->fetch_assoc()) 
		{			
				echo("<TR><TD>".$row['SERVICE_CODE']."</TD>");
				echo("<TD>".$row['SERVICE']."</TD>");
				echo("<TD> Rs. ".$row['SERVICE_CHARGE']."/-</TD>");
				$serviceCode = $row['SERVICE_CODE'];
			
				if($isLoggedIn)
				{
					echo("<TD><TEXTAREA cols=30 id='probDesc".$counter."' name='probDesc".$counter."'></TEXTAREA></TD>");
					echo("<td><input type='button' id=btn".$counter." name=btn".$counter." value='Add to cart' onClick='doSubmit(\"$serviceCode\",\"".$counter."\")'></td>");
				}
				else
				{
					echo("<TD><TEXTAREA cols=30 disabled></TEXTAREA></TD>");
					echo("<td><input type='button' value='Add to cart' disabled></td>");
				}

				$counter += 1;


		}
	
	}

$conn->close();
?> 

</form>
<table>


<div align="center" style="background-color:black; color:white;"><h3>©2017,All Rights Reserved. ASD Services Pvt.Ltd.</h3></div>
<table width="100%">
<tr>
<td width="90%"></td>
<td align="right"><img src="Fbicon.png"  height="20" width="25" ></td>
<td align="right"><img src="Twitter.png"  height="20" width="25" ></td>
<td align="right"><img src="Linkedin.png"  height="20" width="25" ></td>
<td align="right"><img src="instagram.jpg"  height="20" width="25" ></td>
</tr>
</table>

</body>
</html>

