<?php
include_once 'process.php';

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="order.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
  <div class="loginbox">
       
       <link rel="stylesheet" type="text/css" href="register.css">
    <h1>Sign up</h1>
       <form method="post">
       
           <input type="text" name="first_name" class="" placeholder="Enter First Name">
           <input type="text" name="second_name" class="" placeholder="Enter Second Name">
           <input type="text" name="email" class="" placeholder="Enter email">
           <input type="text" name="City" class="" placeholder="City e.g. Cape Town">
           <input type="password" name="Password" class="" placeholder="Enter password">
           
           <input type="submit" name="register" id="register" value="register"><br>
            <center><a href="login.php">Already have an account?</a></center>
       </form>
    
    </div>


</body>
</html>