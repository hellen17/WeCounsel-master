<?php
$connect = mysqli_connect("localhost", "root", "", "wecounsel");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM counselors WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>