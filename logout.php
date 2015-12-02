<?php
require 'DBconnection.php';
session_start();

echo $_SESSION['username'];
//$insert = $db->query("INSERT INTO user (username,created) VALUES ('{$username}',NOW())"); //try to insert the new username 
$db->query("DELETE FROM user WHERE username = '{$_SESSION['username']}'");
session_destroy();
header("Location: index.php");
