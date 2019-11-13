<?php 

include_once "../Model/login.class.php";

// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];

// new <class> cria uma instância da classe
$log = new Login();

/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */

$row = mysqli_fetch_assoc($log->logar($login,$senha));

if($row)
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:../View/niuindex.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
header('location:../index.php?mo=t');
   
  }
?>