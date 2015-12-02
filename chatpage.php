<?php
session_start(); 
require 'DBconnection.php';
$showchat = $db->query("SELECT username,message,created FROM globalmessage");
$showonlinepeople = $db->query("SELECT username FROM user");
//$username = trim($username,"");
//echo strlen(trim($username));
?>


<html>
        <head>
            <title>
              CHATBOOK      
            </title>             
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>            
         </head>
    <body>
        
        <div id="wrapper">
            <label> Welcome <?php echo $_SESSION['username'] ?></label>           
            <div id="chatbox">
                <?php
                    while($row = $showchat->fetch_assoc() )
                    {
                        echo $row['created']."</br>";
                        echo $row['username'].": ".$row['message']."</br>";                      
                    }
                ?>                
            </div>
            </form>
            <div id="onlinepeople">
                <?php
                   while($row = $showonlinepeople->fetch_assoc() )
                    {                        
                        echo "</br>".$row['username']."</br>";                      
                    } 
                ?>                
            </div>
            <div id="writemessage">
                
            </div>
            <div id="tabsection">
                
            </div>
            <form action="sendmessage.php" method="POST">
                <input type="text" name="message"  placeholder="Enter Text Here" >
                <input type="submit" name="sendmessage" value="Send">
            </form>   
            <form method="POST" action="logout.php">
                <button>Log Out</button>                
            </form>
            
        </div>
        
    </body>

</html>
