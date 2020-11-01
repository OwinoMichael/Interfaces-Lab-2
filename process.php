<?php
if(!isset($_SESSION)){
    session_start();
}



    include_once 'connect.php';	
    include_once 'user.php';
    //include_once 'register.php';
if(isset($_POST['register'])){
   $First_name = $_POST['first_name'];
   $Second_name = $_POST['second_name'];
   $Email = $_POST['email'];
   $City = $_POST['City'];
   $pass_word = $_POST['Password'];

   $con = new Dbh();
   $pdo = $con->connect();

   //we want to register 



   $user = new User();
   //set the member variable
   $user->setFirstName($First_name);
   $user->setSecondName($Second_name);
   $user->setEmail($Email);
   $user->setCity( $City);
   $user->setPassword($pass_word);

   echo $user->register($pdo);
}
if (isset($_POST['login'])) {
    
    //if(empty($_POST["email"]) || empty($_POST("Password"))){
      //  $message ='<label>All fields are required</label>';
        
    //}
    //else{
        $Email = $_POST["email"];
        $Pass = $_POST["password"];
    
        $con = new Dbh();
        $pdo = $con->connect();


        $user = new User();
        $user->setEmail($Email);
        $user->setEnterPassword($Pass);
        $details = $user->login($pdo);
        //echo $user->login($pdo);
        header("Location: Front.php");
        //}
        $_SESSION['id'] = $details['id'];
        $_SESSION['firstname'] = $details['first_name'];
        $_SESSION['second_name'] = $details['second_name'];
        $_SESSION['email'] = $details['user_email'];
        $_SESSION['city'] = $details['city'];
        

    header("Location: Front.php");
}

if (isset($_POST['change'])) {
        $userPass = password_hash($_POST["old_password"], PASSWORD_DEFAULT);
        $newPass = password_hash($_POST["new_password"], PASSWORD_DEFAULT);
        $NewPass = $_POST['verify_password'];
    
        $con = new Dbh();
        $pdo = $con->connect();

        if(password_verify($confirm, $newPass)){
            $user = new User();
            $user->setUserPass($password);
            $user->setNewPassword($newPassword);

            $message = $user->changePassword($pdo);
            echo $message;
            
        }else {
            echo "Passwords don't match";
        }
    }
?>
