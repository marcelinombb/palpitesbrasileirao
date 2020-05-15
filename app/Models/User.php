<?php

namespace app\Models;

use \PDO;

class User{
    private $conn;
    public function __construct(){
        $this->conn = Connect::conn();
    }

    public function logar($login, $senha){
        $query = "SELECT user_id,email,nome,type FROM users WHERE email = :email AND senha= :senha";
        $stt = $this->conn->prepare($query);
        $stt->bindValue(":email",$login,FILTER_VALIDATE_EMAIL);
        $stt->bindValue(":senha",$senha,FILTER_SANITIZE_STRING);
        if ($stt->execute()) {
           return $stt->fetch(PDO::FETCH_ASSOC);
        } else {  
            return  0;
        }
    }

    public function cadastrar($nome, $email, $senha){              
        $query = "INSERT INTO users (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stt = $this->conn->prepare($query);
        $stt->bindValue(":nome",$nome,FILTER_SANITIZE_STRING);
        $stt->bindValue(":email",$email,FILTER_VALIDATE_EMAIL);
        $stt->bindValue(":senha",$senha,FILTER_SANITIZE_STRING);
        if($stt->execute()){
            return true;
        }
        return false;
    }
}
    