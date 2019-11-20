<?php
define("ROOT_PATH", dirname(__FILE__));
session_start();
if (isset($_SESSION['login'])) {
    header("Location: View/template.php");
    //echo "<script>alert('o erro deu certo')</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="View/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="View/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="View/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="View/assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <form method="post" action="Controller/loginController.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="bounce animated infinite illustration" style="color: rgb(4,2,2);"><i class="icon ion-ios-football" data-bs-hover-animate="bounce"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="login" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="senha" placeholder="Senha"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(25,153,37);">Login</button></div><a class="forgot" href="View/cadastro.php">Cadastre-se</a>
        </form>
    </div>
    <script src="View/assets/js/jquery.min.js"></script>
    <script src="View/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="View/assets/js/bs-animation.js"></script>
</body>

</html>
