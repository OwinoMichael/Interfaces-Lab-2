<?php
include_once 'process.php'

?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body class="login">
    <div class="loginbox">
       <img src="logo.png" class="avatar">
    <h1>Login Here</h1>
       <form action="" method="post">
       <p>Email</p>
           <input type="email" name="email" id="email" placeholder="Enter Email">
           <p>Password</p>
           <input type="password" name="password" id="password" placeholder="Enter Password">
           <input type="submit" name="login" id="Login" value="Login"><br>
           <a href="#">Forgot your password?</a>
            <a href="register.php">Don't have an account?</a>
       </form>
    
    </div>


</body>
</html>