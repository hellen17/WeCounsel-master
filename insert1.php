<?php
$connect = mysqli_connect("localhost", "root", "", "wecounsel");
if(isset($_POST["first_name"], $_POST["last_name"],$_POST["category"],$_POST["email"]))
{
 $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);
 $category = mysqli_real_escape_string($connect, $_POST["category"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $query = "INSERT INTO counselors(first_name, last_name,category,email) VALUES('$first_name', '$last_name','$category','$email')";

 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>