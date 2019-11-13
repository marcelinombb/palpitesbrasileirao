<?php
include_once "connect.class.php";

class Login extends connect{
    public function logar($login, $senha){
        $conn = parent::conn();
        $query = "SELECT * FROM `users` WHERE `email` = '$login' AND `senha`= '$senha'";

        return mysqli_query($conn,$query);
    }
}
?>