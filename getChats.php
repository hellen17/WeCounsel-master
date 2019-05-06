<?php
include('connect.php');
include('./Classes/Chats.php');
$chats = new Chats();
session_start();


 $user_ = $chats->get_user_name("2", $mysqli);
    echo $user_;