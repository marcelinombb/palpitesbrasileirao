<?php
define("ROOT_PATH", dirname(__FILE__));

if(isset($_GET['mo'])){
    echo "<script>alert('o erro deu certo')</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <form method="post" action="Controller/loginController.php" id="formlogin" name="formlogin">
        <fieldset id="fie">
            <legend>LOGIN</legend><br />
            <label>NOME : </label>
            <input type="text" name="login" id="login" required/><br />
            <label>SENHA :</label>
            <input type="password" name="senha" id="senha" required/><br />
            <input type="submit" value="LOGAR  " />
        </fieldset>
    </form>
</body>

</html>