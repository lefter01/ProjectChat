<?php
//error_reporting(0);
require 'DBconnection.php';

//$result = $db->query("SELECT * FROM user") or die($db->error);
//print_r($result);
if($result = $db->query("SELECT * FROM user"))//if db has users
{
    if($count = $result->num_rows)//count = number of users(recordings) on db
    {
        $rows = $result->fetch_all(MYSQLI_ASSOC);//return all data as associtive array
       // print_r($rows); //prints arraw in a single line
        foreach ($rows as $row)
        {
            echo "onoma = ".$row['username']." me id = ".$row['iduser']."</br>";
        }
        echo "</br>";
        echo "<p>".$count."</p>";
        echo "</br>";
        echo '<pre>',print_r($rows),'</pre>'; 
         
          if($update = $db->query("UPDATE user SET username ='gamwse' WHERE iduser=1 "))//if db has users
            {
                echo $db->affected_rows;
            }  

        while($row = $result->fetch_assoc() )
        {
            echo "</br>".$row['username']."--->".$row['iduser'];
        }
        echo $first_name = $db->real_escape_string(trim($_GET['username']));
        $db->query("INSERT INTO user (username)"
        . " VALUES ('lefteris')");
    
    }    
}

if(isset($_GET['username']))
{
    session_start();
    echo $username = $db->real_escape_string(trim($_GET['username']));
    
    if($insert = $db->query("INSERT INTO user (username,created) VALUES ('{$_GET['username']}',NOW())"))
    {
        echo $db->affected_rows;
    }
    
    $result = $db->query("SELECT * FROM user");
    
    while($row = $result->fetch_assoc() )
        {
            echo "</br>".$row['username']."--->".$row['iduser'];
            echo $_SESSION['username'];
        }
        
}