<?php
include_once "connect.class.php";

class User extends Connect{
    public function logar($login, $senha){
        $conn = parent::conn();
        $query = "SELECT * FROM public.users WHERE email = '$login' AND senha= '$senha'";
        $stt = $conn->prepare($query);
        $data;
        if ($stt->execute()) {
            while ($result = $stt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $result;
            }
            return $data;
        } else {
            return  0;
        }
    }

    public function cadastrar($nome, $email, $senha){
        $nome = filter_var($nome,FILTER_SANITIZE_STRING);
        $email = filter_var($email,FILTER_SANITIZE_STRING);
        $senha = filter_var($senha,FILTER_SANITIZE_STRING);
        $conn = parent::conn();
        $query = "INSERT INTO public.users (nome, email, senha, tipo) VALUES ('$nome', '$email', '$senha', false)";
        $stt = $conn->prepare($query);
        if($stt->execute()){
            return 'ok';
        }
        return 'n ok';
    }
}
?>