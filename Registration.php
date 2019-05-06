<?php
/* Attempt MySQL server connection. (user 'root' with no password) */
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "", "wecounsel");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 if($_SERVER['REQUEST_METHOD'] =='POST')
{
// Escape user inputs for security
$user = $mysqli->real_escape_string($_REQUEST['user']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$gender = $mysqli->real_escape_string($_REQUEST['gender']);
 
// attempt insert query execution
$sql = "INSERT INTO users (user, password, email, gender) VALUES ('$user', '$password', '$email', '$gender')";
if($mysqli->query($sql) === true){
   
    $_SESSION['message']="Your account has successfully been created";
   header("location: Services.php");
} else{
    
    $_SESSION['message']="User could not be added to the database";
}
 }
// Close connection
$mysqli->close();
?>