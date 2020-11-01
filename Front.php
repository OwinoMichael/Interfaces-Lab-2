<?php
    session_start();
    include_once "process.php";
?>



<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Front.css">
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>

<h3>
        WELCOME <?php echo $_SESSION['firstname']; ?>
    </h3>
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo">User Profile</label>
    <ul>
        <li><a class="active" href="">Home</a></li>
        <li><a href="">About</a></li>
       
        <li><a href="logout.php">Logout</a></li>
    </ul>
    </nav>
</body>
</html>