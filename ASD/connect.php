
<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "asddb";
$con = new mysqli($servername, $username, $password, $dbname);


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$Email=$_POST['Email'];
$mobileno=$_POST['mobileno'];
$password=$_POST['password'];
$userType=$_POST['selectUserType'];

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

	 $sql="insert into registration(firstname,lastname,Email,mobileno,password,user_type) values ('$firstname','$lastname','$Email','$mobileno','$password','$userType')";
$query=mysqli_query($con,$sql);

//header('Location: index.php');

echo "<script>window.location.replace('index.php')</script>";
}





?>
