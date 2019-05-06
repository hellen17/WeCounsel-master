<?php
$mysqli = new mysqli("localhost", "root", "", "wecounsel");

if(isset($_POST['comment']) && isset($_POST['username']))
{
  $comment=$_POST['comment'];
  $name=$_POST['username'];
  $group_id =$_POST['group_id'];
  //echo $comment." ".$name." ".$group_id." End";
  
  $query = "insert into comments (group_id, name,comment,post_time) values('$group_id','$name','$comment',CURRENT_TIMESTAMP)";
  if(mysqli_query($mysqli,$query)){
      header('chat.php');
  }else{
      echo $mysqli->error;
  }
}

?>