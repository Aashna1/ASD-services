<?php
$user='root';
$password='';
$db='sts';
$con=new mysqli('localhost',$user,$password,$db);


$mobileno=$_POST['mobileno'];
$password=$_POST['password'];

 $sql = 'select count(*) as total,firstname,lastname from registration where mobileno = '.$mobileno.' and password="'.$password.'"';


$query=mysqli_query($con,$sql);

$sql1=mysqli_fetch_array($query);
$d=$sql1[0]; 
if($d > 0)
{
 session_start();
  $_session['name']=$sql1['firstname'].''.$sql1['firstname'];
	$name = $_session['name'];
    header('Location:afterlogin.php?login='.$name.'');
}
else
{

	

echo "<script>alert('nu')</script>";
echo "<script>window.location.href='login.php'</script>";
}





?>
