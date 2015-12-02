<?php
$db = new mysqli('localhost','root','root','chatproject');
if($db->connect_errno)
{    
    echo $db->connect_error;
    echo '</br>';
    die('we well be back soon');
  
}

