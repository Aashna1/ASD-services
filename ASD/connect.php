
<?php
$user='root';
$password='';
$db='sts';
$con=new mysqli('localhost',$user,$password,$db);


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$Email=$_POST['Email'];
$mobileno=$_POST['mobileno'];
$password=$_POST['password'];

// $sql = 'select count(*) from registration where mobileno = '.$mobileno.' and password="'.$password.'"';

$sql = 'select count(*) from registration where mobileno = '.$mobileno;
$query=mysqli_query($con,$sql);

$sql1=mysqli_fetch_array($query);
$d=$sql1[0];
if($d > 0)
{
	echo "<script>alert('number already present')</script>";
    	echo "<script>window.location.href='registration.html'</script>";
exit;
}
else
{

	 $sql="insert into registration(firstname,lastname,Email,mobileno,password) values ('$firstname','$lastname','$Email','$mobileno','$password')";
$query=mysqli_query($con,$sql);
echo "<script>window.location.replace('login.html?showmsg=1')</script>";
}





?>
