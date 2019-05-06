<?php
include('connect.php');
session_start();

if(isset($_POST['action'])){

	$name = $_FILES['filetoupload']['name'];
	$tmp_name = $_FILES['filetoupload']['tmp_name'];
	$target_fileget_dir="images/";
	$target_file=$target_fileget_dir.$name;


	if(move_uploaded_file($tmp_name, $target_file)){
		$sql="UPDATE counselors SET image='$name' WHERE user = '".$_SESSION['user']."' ";

		if($mysqli->query($sql)){
			header('location: counsellor1.php');
		}else{
			echo $mysqli->error;
		}
	}else{
		echo 'Not uploaded';
	}
	
}