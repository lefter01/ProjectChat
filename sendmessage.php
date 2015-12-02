<?php
require 'DBconnection.php';
session_start();

//initialisation of parameters to send to database
$message = trim($_POST['message']);
//$username = $_SESSION['username'];
if(strlen($message)>0)
{
    $insert = $db->query("INSERT INTO globalmessage (username,message,created) VALUES ('{$_SESSION['username']}','{$message}',NOW())");
}
header("Location: chatpage.php");
