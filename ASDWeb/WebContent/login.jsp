<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<script language="JavaScript">

function doSubmit()
{
	document.myForm.submit();	
}
</script>
<br>
<br>
<br>
<form method="post" action="authServlet" name="myForm">
<table>
<%
String loginStatus = "";
if(request.getAttribute("loginStatus") != null)
{
	loginStatus = (String) request.getAttribute("loginStatus");
}

if(loginStatus != null && loginStatus.equalsIgnoreCase(("invalid")))
{
	%>
	<tr><td colspan="2">Invalid User</td></tr>
	<%
}

%>
<tr>
	<td>Username</td><td><input type="text" id="username" name="username"/></td>
</tr>
<tr>
	<td>Password</td><td><input type="password" id="pwd" name="pwd"/></td>
</tr>
<tr>
	<td></td><td><input type="button" onClick="doSubmit()" value="Login"/><input type="reset"/></td>
</tr>
</table>
</form>
</body>
</html>