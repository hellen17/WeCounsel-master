<?php
session_start();
//get values
$user=$_POST['user'];
$password=$_POST['password'];


//prevent mysql injection
$mysqli = new mysqli("localhost", "root", "", "wecounsel");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$user = $mysqli->real_escape_string($_POST['user']);
$password = $mysqli->real_escape_string($_POST['password']);


//Query datbase for user
$result=$mysqli->query("select *from admin where user ='$user' and password ='$password'") or die("failed to query database" .mysqli_error());
$row=mysqli_fetch_array($result);
if($row['user']==$user && $row['password'] ==$password){
	echo "Login successful";
	$_SESSION['user']=$row['user'];
	/*$_SESSION['email']=$row['email'];*/
	$_SESSION['password']=$row['password'];
header("location: adminhome.php");
}
else{
header( "refresh:0.5; url=admin.html" );
$message = "Invalid username or password";
echo "<script type='text/javascript'>alert('$message');</script>";

}