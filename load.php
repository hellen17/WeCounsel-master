<?php
include("connect.php");
// error_reporting(0);
if(session_status() == PHP_SESSION_NONE){
	session_start();
}

$comm = $mysqli->query('select name,comment,post_time from comments WHERE group_id = '.$_SESSION['group_id']);
while($row=mysqli_fetch_array($comm)){
	$name=$row['name'];
	$comment=$row['comment'];
    $time=$row['post_time'];
?>
<div class="chats"><strong><?=$name?>:</strong> <?=$comment?> <p style="float:right"><?=date("j/m/Y g:i:sa", strtotime($time))?></p></div>
<?php
}
?>