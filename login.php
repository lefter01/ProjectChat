<?php
require 'DBconnection.php';
session_start();

$username = trim($_POST['username']);//remove spaces at start and end
$username =$db->real_escape_string($username);//get username from session or get it from post $username = $_POST['username']
$_SESSION['username']=$username;        
$namel = strlen($username);  //check length of username      //($username !=="" ) inside if but namel>10 overwrites this

if(isset($_POST['username']))
{
        if( (!!preg_match("/^[a-zA-Z\d]+$/",$username)) && ( $namel >= 8) ) //allow only letters and numbers in username
        {           
            $insert = $db->query("INSERT INTO user (username,created) VALUES ('{$username}',NOW())"); //try to insert the new username 
            if($db->affected_rows>0)
            {
                header("Location: chatpage.php");/*redirect browser*/
            }
            else
            {
                header("Location: index.php"); /* Redirect browser */ 
            }
                
        }
        else
        {
             header("Location: index.php"); /* Redirect browser */   
        }
}
else
{
     header("Location: index.php");
}
 