<?php require_once 'php_action/db_connect.php';

session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];


$result = $con->query("SELECT * FROM usuario WHERE nome = '$nome' AND senha= '$senha'");

if(mysqli_num_rows ($result) > 0 ){
$_SESSION['nome'] = $nome;
$_SESSION['senha'] = $senha;
header('location:site.php');

}else{
  unset ($_SESSION['nome']);
  unset ($_SESSION['senha']);
  header('location:index.php');

  }
?>