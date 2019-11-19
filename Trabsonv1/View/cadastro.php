<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(&quot;assets/img/CIMG0016.JPG&quot;);"></div>
            <form method="post" action="../Controller/cadastroController.php">
                <h2 class="text-center"><strong>Criar uma conta</strong>.</h2>
                <div class="form-group"><input type="text" class="form-control" name="nome" placeholder="Nome" /></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input type="password" class="form-control" name="senha" placeholder="Senha" /></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(25,153,37);">Cadastrar</button></div><a class="already" href="../index.php">Você já tem uma conta ? entre &nbsp;aqui.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>