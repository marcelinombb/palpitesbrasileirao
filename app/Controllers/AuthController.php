<?php
namespace app\Controllers;
use app\Models\User;

class AuthController
{
    public function login(){
        /*  $login = filter_input(INPUT_POST,'login',FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING); */
        $form = json_decode(file_get_contents('php://input'), true);
        $user = new User();
        $data = $user->logar($form['login'],$form['senha']);
        if (!empty($data)) {
            $_SESSION['user']['email'] = $data['email'];
            $_SESSION['user']['nome'] = $data['nome'];
            $_SESSION['user']['id'] = $data['user_id'];
            $_SESSION['user']['type'] = $data['type'];
            //print_r($data);
            echo json_encode($data);
        }
    }

    public function cadastro(){

        $form = json_decode(file_get_contents("php://input"),true);

        $nome = filter_var($form['nome'],FILTER_SANITIZE_STRING);
        $email = filter_var($form['email'],FILTER_SANITIZE_STRING);
        $senha = filter_var($form['senha'],FILTER_SANITIZE_STRING);

        $user = new User();

        $data["s"] = false;

        if($user->cadastrar($nome,$email,$senha)){
            $data['s'] = true;
        }
        echo json_encode($data);
    }
    
    public function logout(){
        session_destroy();
        $data['logout'] = true;
        echo json_encode($data);
        //header("Location:".BASE_URL);

    }
}
