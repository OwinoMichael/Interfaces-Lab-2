<?php
include "account.php";
   if(!isset($_SESSION)) {
       session_start(); 
   }

class User implements Account {
    public $firstName;
    public $secondName;
    public $email;
    public $password;
    public $newPassword;
    public $enterPassword;
    public $city;
    
    
    public function __construct(){       
        }

        //getters and setter
        public function setFirstName($fn){
            $this->firstName = $fn;
        }

        public function getFirstName(){
            return $this->firstName;
        }
        
        public function setSecondName($sn){
            $this->secondName =$sn;
        }

        public function getSecondName(){
            return $this->secondName;
        }

        public function setEmail($el){
            $this->email = $el;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword($ps){
            $this->password =$ps;
        }

        public function getPassword(){
            return $this->password;
        }
    
        public function setNewPassword($np){
            $this->NewPassword =$np;
        }

        public function getNewPassword(){
            return $this->NewPassword;
        }
        
        public function setEnterPassword($ep){
            $this->EnterPassword =$ep;
        }

        public function getEnterPassword(){
            return $this->EnterPassword;
        }

        public function setCity($city){
            $this->city = $city;
        }

        public function getCity(){
            return $this->city;
        }

    
    
    

    public function login( $pdo ) {
        
        
       // $hashPassword = password_hash($this->getPassword(), PASSWORD_DEFAULT);
        try {
         
          //  $STH = $pdo -> query( "SELECT  email, password FROM user username='$username' AND password='$passwrod_hash'" );
         // $STH->setFetchMode( PDO::FETCH_ASSOC );
            $stm = $pdo->prepare("SELECT  user_password FROM user WHERE user_email = ?");
            $stm->execute([$this->email]);
            $result = $stm->fetch();
            $this->password = $result['user_password'];
            
            if (password_verify($this->enterPassword, $this->password)) {
                    $stmt = $pdo->prepare("SELECT * FROM user WHERE user_email = ? AND user_password = ?");
                    $stmt->execute([$this->email, $this->password]);
                    $result = $stmt->fetch();
                    $stmt = null;
                    echo 'Login successfull';
                return $result;
                } else {
                    echo 'Invalid password.';
                }

        } catch( PDOException $ex ) {
            echo $ex->getMessage();
        }
        
        /* $stm = $pdo->prepare("SELECT * FROM user WHERE user_email = :user_email AND user_password = :user_password");
         
         $stm->execute(
             array(
                 'user_email' => $_POST["email"],
                 'user_password' => $_POST["password"]
             )
         );
         $result = $stm->fetch();
         $count = $stm->rowCount();
         $stm = null;
         if($count>0){
             echo 'success login';
         } */
    }

    public function register ($pdo) {
    
         //has the password
            $hashedPassword = password_hash($this->getPassword(), PASSWORD_DEFAULT);
            //prepare a statement
            try{
                //prepare a querry
                $stm = $pdo->prepare("insert into user (first_name, second_name, user_email, user_password, city) values(?,?,?,?,?)");
                $stm->execute([$this->getFirstName(),$this->getSecondName(),$this->getEmail(),$hashedPassword,$this->getCity()]);
                $stm = null;
                return "Registration was succesiful";
            }catch (PDOException $ex){
                return $ex->getMessage();
                //in production return a generic message, but log the specific     
       
        
        }
    }
    

    public function changePassword($pdo ) {
        try {
                $stmt = $pdo->prepare("UPDATE users SET user_password = ? WHERE user_id = ? AND user_password = ?");
                $stmt->execute([$this->newPassword, $this->password]);
                $result = $stmt->fetch();
                $stmt = null;
                return "Password has been changed";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }      

        public function logout ($pdo) {
            session_destroy();
            setcookie( session_name(), session_id(), 1, '/' );
        }   

}
    ?>