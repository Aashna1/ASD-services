<?php include 'top.php'?>
<html>
<head>
<title>STS</title>
<link rel='stylesheet' href= 'loginstyle.css'>
<script>
var namepattern=/^[a-zA-Z]+$/
var phonepattern = /^\d{10}$/

var emailpattern =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.([a-zA-Z]{2,4})$/

 var emailpattern2 =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*$/

	

function validateForm()
{

 
 var x=document.forms["registration"]["firstname"];

 if (x.value=="")
   
{

  
  document.getElementById('pointfn').innerHTML="Please enter the first name.";
 
  
    x.focus();

  return false;

   }
 
 
else if(x.value.length>20)
  
 {

  x.value="";

  document.getElementById('pointfn').innerHTML="Please enter less than 20 characters.";

  x.focus();

  return false;

   }

 else if ((!namepattern.test(x.value)))
  
 {

  document.getElementById('pointfn').innerHTML="Please enter only alphabets.";

    x.value="";

  x.focus();

  x.style.border = 'Red';

  return false;

   }


 document.getElementById('pointfn').innerHTML='';





 x=document.forms["registration"]["lastname"];


 if(x.value=="")

   {

  document.getElementById('pointln').innerHTML="Please enter the Last name.";

  x.focus();

  return false;

 }
 
  else if(x.value.length>20)
 
  {

  x.value="";

  document.getElementById('pointln').innerHTML="Please enter less than 20 characters.";

  x.focus();

  return false;

 }

 else if (!namepattern.test(x.value))

   {

  x.value="";
 
 document.getElementById('pointln').innerHTML="Please enter only alphabets.";

  x.focus();

  return false;

 }

document.getElementById('pointln').innerHTML="";



 x=document.forms["registration"]["Email"];
 
x=document.registration.Email;
 if(x.value=="")

 {

  x.value="";
 
 document.getElementById('pointemail').innerHTML="Please enter the email id.";
 
 x.focus();

  return false;

 }

 else if(!emailpattern.test(x.value))

 {

  x.value="";

  document.getElementById('pointemail').innerHTML="Please enter a valid email address.";

  x.focus();

  return false;

 }

 document.getElementById('pointemail').innerHTML='';




 x=document.forms["registration"]["mobileno"];

 x=document.registration.mobileno;

 if(x.value=="")

 {

  
  x.value="";

  document.getElementById('pointcontct').innerHTML="Please enter the contact number.";

  x.focus();

  return false;

 }

 else if(isNaN(x.value))

 {

  x.value="";

  document.getElementById('pointcontct').innerHTML="Please enter only digits.";

  x.focus();

  return false;

 }

 else if(x.value.length!=10)

 {

  x.value="";

  document.getElementById('pointcontct').innerHTML="Please enter only 10 digits.(Mobile number)";

  x.focus();

  return false;

 }

 else if(!phonepattern.test(x.value))

 {

  x.value="";

  document.getElementById('pointcontct').innerHTML="Please enter a valid contact number.";
 
 x.focus();

  return false;

 }

 document.getElementById('pointcontct').innerHTML="";



var x=document.forms["registration"]["password"];

 
 
 if(x.value.length<8)

 {

	 document.getElementById('pointpass').innerHTML="please enter password above 8 digits";

	 return false;

 }
 
 document.getElementById('pointpass').innerHTML="";

	
var y=document.forms["registration"]["conpasswrd"];
	

 
 if(x.value!=y.value)

 {

	document.getElementById('pointpass1').innerHTML="Passwords dont match.";

	return false;

 }

 document.getElementById('pointpass1').innerHTML="";



}

</script>
<link rel='stylesheet' href= 'select.css'>
<link rel='stylesheet' href= 'loginstyle.css'>
</head>
<body>






<center><h2>Create your account</h2></center>

<center>
<table>
<tr>
<td>
<div class="backcolor">
<form name="registration" action="connect.php" method="POST" >
<table cellspacing="20">
<tr>
<td>First Name:</td><td><input type="text" id="firstname" name="firstname" placeholder="Enter First Name" /><span style="color:Red">*</span><i style="color:red;" id="pointfn"></i></td>
</tr>
<tr>
<td>Last Name:</td><td><input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" /><span style="color:Red">*</span><i style="color:red;" id="pointln"></i></td>
</tr>
<tr>
<td>E-mail:</td><td><input type="text" id="Email" name="Email" maxlength="100" placeholder="emailid" /><span style="color:Red">*</span><i style="color:red;" id="pointemail"></i></td>
</tr>
<tr>
<td>mobile:</td><td><input type="text" id="mobileno" name="mobileno" maxlength="10" placeholder="enter mobile number"><span style="color:Red">*</span><i style="color:red;" id="pointcontct"></i></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" id="password" name="password" placeholder="Password"><span style="color:Red">*</span><i style="color:red;" id="pointpass"></i></td>
</tr>
<tr>
<td>Confirm Password:</td><td><input type="password" id="conpasswrd" name="conpasswrd" placeholder="Confirm Password"><span style="color:Red">*</span><i style="color:red;" id="pointpass1"></i></td>
</tr>
</table>

<center><input type="submit"  value="Register" onclick="return validateForm();"><br><br> 
</center>

</td>

</tr>
</table>
</center>
</div>
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