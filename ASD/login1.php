<?php
$user='root';
$password='admin';
$db='asddb';
$con=new mysqli('localhost',$user,$password,$db);


$mobileno=$_POST['mobileno'];
$password=$_POST['password'];

 $sql = 'select count(*) as total,firstname,lastname,EMAIL,USER_TYPE,mobileno from registration where mobileno = '.$mobileno.' and password="'.$password.'"';


$query=mysqli_query($con,$sql);

$sql1=mysqli_fetch_array($query);
$d=$sql1[0]; 




if($d > 0)
{
	session_start();
	$_SESSION['userid']=$sql1['firstname'];	
	$_SESSION['userType']=$sql1['USER_TYPE'];
	$_SESSION['userMobile']=$sql1['mobileno'];
	if($sql1['USER_TYPE'] == 'E')
	{
		header('Location:myTask.php');
	}
	else
	{
		header('Location:index.php');
	}
}
else
{

	

echo "<script>alert('Invalid Username/Password')</script>";
echo "<script>window.location.href='login.php'</script>";
}





?>
