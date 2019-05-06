<?php



include('connect.php');
include('./Classes/Chats.php');
$chats = new Chats();

session_start();

$user_history = $chats->fetch_user_chat_history($_SESSION['user_Id'], $_POST['to_user_id'], $mysqli);
echo $user_history;

?>
