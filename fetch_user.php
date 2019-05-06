<?php


include('connect.php');
include('Classes/Chats.php');
$chats = new Chats();

session_start();

$query = "
SELECT * FROM users 
WHERE user != '".$_SESSION['user']."' 
";

$statement = $mysqli->prepare($query);

$statement->execute();

$result = $statement->get_result();

$output = '
<table class="table table-bordered table-striped">
 <tr>
  <td>Username</td>
  <td>Status</td>
  <td>Action</td>
 </tr>
';

foreach($result as $row)
{
$status='';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = $chats->fetch_user_last_activity($row['user_Id'], $mysqli);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label label-success">Online</span>';
 }
 else
 {
  $status = '<span class="label label-danger">Offline</span>';
 }

 $unseen = $chats->count_unseen_message($row['user_Id'], $_SESSION['user'], $mysqli);
 $output .= '
 <tr>
  <td>'.$row['user'].' '.$unseen.'</td>
  <td>'.$status.'</td>
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['user_Id'].'" data-tousername="'.$row['user'].'">Start Chat</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>
