<?php include 'top.php'?>
<html>
<head>
<title>ASD</title>
<link rel='stylesheet' href= 'loginstyle.css'>
<style type="text/css">
ul
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
}
a:link, a: visited
{
display: block;
front-weight:bold;
color:#FFFFFF;
background-color:#98bf21;
width:120px;
text-align:center;
padding:4px;
text-transform:uppercase;
text-decoration:none;
}
a:hover, a:active
{
background-color:#7A991A;
}
li
{
float:left;
}
</style>

<link rel='stylesheet' href= 'select.css'>
<link rel='stylesheet' href= 'font-awesome.css'>
</head>
<body>




<center><h2>Create your Professional Account</h2></center>

<center>
<table>
<tr>
<td>
<div class="backcolor">
<form name='registration' action="login.php" method="post">
<table cellspacing="20">
<tr>
<td>First Name:</td><td><input type="text" name="name" placeholder="Enter First Name" /></td>
</tr>
<tr>
<td>Last Name:</td><td><input type="text" name="name" placeholder="Enter Last Name" /></td>
</tr>
<tr>
<td>E-mail:</td><td><input type="text" name="Email" maxlength="100" placeholder="Email Id" /></td>
</tr>
<tr>
<td>Mobile no.:</td><td><input type="text" name="mobileno" maxlength="10" placeholder="enter mobile number"></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="password" placeholder="Password"></td>
</tr>
<tr>
<td>Confirm Password:</td><td><input type="password" name="conpasswrd" placeholder="Confirm Password"></td>
</tr>
<td>Qualification details:</td><td><textarea name="Descripton" id="qualification" placeholder="List Qualification"></textarea></td>
</tr>
<td>Become a Professional among, Select the service:</td><td><input type="checkbox" name="Computer Services" value="Computer Services">Computer Services<br>
<input type="checkbox" name="Electric" value="Electric">Electric Services<br>
<input type="checkbox" name="CCTV" value="CCTV">CCTV and Home Security<br>
<input type="checkbox" name="Appliance" value="Appliance">Appliance Repair<br></td>
</tr>
<td>Create a new category that best describes your service, if it doesn’t fit in our existing list.:</td><td><textarea name="Descripton" id="New Service" placeholder="List New Service if any"></textarea></td>
</tr>
</table>

<center><input type="submit" value="Register"><br><br> 
</center>

</div>
</td>

</tr>
</table>
</center>
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