<?php include 'top.php'?>

<html>
<head>
<title>ASD</title>
<link rel='stylesheet' href= 'select.css'>
<link rel='stylesheet' href= 'loginstyle.css'>
<script>
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function ShowMSG()
{
var showmsg= getParameterByName('showmsg');
if(showmsg == 1)
alert("You have successfully registered");
}

ShowMSG();
</script>
</head>
<body>






<center><h2>Log in to your account</h2></center>
<center>
<table>
<tr >

<td>
<div class="backcolor">
<form name='registration' action="login1.php" method="post" >
<table cellspacing="20">
<tr>
<td>Mobile:</td><td><input type="text" name="mobileno" maxlength="10"></td>
</tr>
<td>Password:</td><td><input type="password" name="password"></td>
</tr>
</table>
<center><input type="checkbox" name="remember">Remember me?</input><br><br>
<input type="submit" value="Log In"><br><br></center> 
<a href="registration.php">Register</a> if you dont have an account.<br><br>
<a href="srr.html">Forgot Password

</div>
</td>

</tr>
</table>
</center>
<br><br><br><br>
<table width="100%">
<tr>
<td width="90%"></td>
<td align="right"><img src="Fbicon.png"  height="20" width="25" ></td>
<td align="right"><img src="Twitter.png"  height="20" width="25" ></td>
<td align="right"><img src="Linkedin.png"  height="20" width="25" ></td>
<td align="right"><img src="instagram.jpg"  height="20" width="25" ></td>
</tr>
</table>
</form>
 <div align="center" style="background-color:black; color:white;"><h3>©2017,All Rights Reserved. ASD Services Pvt.Ltd.</h3></div>

</body>
</html>
