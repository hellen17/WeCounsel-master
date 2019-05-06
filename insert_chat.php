<?php



include('connect.php');
include('./Classes/Chats.php');
$chats = new Chats();
session_start();


$to_user_id = $mysqli->real_escape_string($_POST['to_user_id']);
$from_user_id = $_SESSION['user_Id'];
$chat_message = $mysqli->real_escape_string($_REQUEST['chat_message']);
$status = '1';

$sql = "
INSERT INTO chat_message 
(to_user_id, from_user_id, chat_message, status) 
VALUES (?,?,?,?)
";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ssss',$to_user_id, $from_user_id, $chat_message, $status);
$bool = $stmt->execute();


if($bool == true)
{
    $user_history = $chats->fetch_user_chat_history($from_user_id, $to_user_id, $mysqli);
    echo $user_history;
}


?>