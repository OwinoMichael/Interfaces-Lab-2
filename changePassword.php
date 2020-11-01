<?php
include_once 'process.php';

?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="ChangePassowrd.css">
</head>
<body>
         <div class="loginbox">
       <img src="weeb.jpg" class="avatar">
    <h1>Change Password</h1>
       <form method="post">
           <p>Old Password</p>
           <input type="password" name="old_password" id="old_password" placeholder="">
           <p>New Password</p>
           <input type="password" name="new_password" id="new_password" placeholder="">
           <p>Confirm Password</p>
           <input type="password" name="verify_password" id="new_password" placeholder="">
           <input type="submit" name="change" id="changePassword" value="Change Password"><br>
           <a href="#">Dont want to change password?</a>        
       </form>
    
    </div>



</body>
</html>