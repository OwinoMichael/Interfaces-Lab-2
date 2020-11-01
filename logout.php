  
<?php

    include_once 'connect.php';
    include_once 'user.php';
    session_start();

    //PDO handle
    $con = new Dbh();
    $pdo = $con->connect();

    $user = new User();
    $user->logout($pdo);
    header("Location:login.php");

?>