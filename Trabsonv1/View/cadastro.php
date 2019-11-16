<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
    <form action="../Controller/cadastroController.php" method="post">
    <label>Nome </label>
    <input type="text" name="nome" required><br>
    <label>Email </label>
    <input type="email" name="email" required><br>  
    <label>Senha </label>
    <input type="password" name="senha" required><br>
    <input type="submit" value="Cadastrar" style="margin-top:2px">
    
    </form>
</body>
</html>