<?php
include_once "app/config/config.php";
session_start();
if (isset($_SESSION['user'])) {
    header("Location:".BASE_URL."/app/Views/template.php");
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="app/Views/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/Views/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="app/Views/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="app/Views/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="app/Views/assets/css/style.css">
</head>

<body>
    <div class="login-clean" id="content">
        <form method="post" id="form-login">
            <h2 class="sr-only">Login Form</h2>
            <div class="bounce animated infinite illustration" style="color: rgb(4,2,2);"><i class="icon ion-ios-football" data-bs-hover-animate="bounce"></i></div>
            <div class="form-group"><input required class="form-control" type="email" id="login" placeholder="Email"></div>
            <div class="form-group"><input required class="form-control" type="password" id="senha" placeholder="Senha"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" onclick="entrar()" style="background-color: rgb(25,153,37);">Login</button></div>
            <a class="forgot" href="#" onclick="cadastroForm()">Cadastre-se</a>
        </form>
    </div>
    <script src="app/Views/assets/js/jquery.min.js"></script>
    <script src="app/Views/assets/js/script1.js"></script>
    <script src="app/Views/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="app/Views/assets/js/bs-init.js"></script>

</body>
</html>