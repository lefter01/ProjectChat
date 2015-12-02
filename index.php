<?php
require 'DBconnection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Online Chatting  </title>     
    </head>
    <body>     
            <div id="nickname">
                 <form action = "login.php" method = "POST" name="usernameform">            
                     <input type="text" name="username"  placeholder="Enter Your Nickname" >
                     <input type="submit" name="login" value="Log In" onclick="">
                     <label>*8 characters required (only letters and numbers)</label>
                     <label></br>Spaces at start or End , dont count as characters</label>
                 </form>     
            </div>        
    </body>
</html>





