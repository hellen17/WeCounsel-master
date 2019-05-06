<?php

$mysqli = new mysqli("localhost", "root", "", "wecounsel");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
date_default_timezone_set('Africa/Nairobi');

// Print host information
//echo "Connect Successfully. Host info: " . $mysqli->host_info;

?>