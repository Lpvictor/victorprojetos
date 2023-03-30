<?php require_once 'php_action/db_connect.php';
session_start(); 

$nome_usuario = $_POST['nome_usuario'];
$senha = $_POST['senha'];


$result = $con->query("SELECT * FROM usuario WHERE senha = '$senha' AND nome_usuario = '$nome_usuario'");
while ($row = mysqli_fetch_assoc($result)){
    $id_usuario = $row['id_usuario'];
}
if(mysqli_num_rows($result) > 0){
    $_SESSION['id_usuario'] = $id_usuario;
    $_SESSION['nome_usuario'] = $nome_usuario;
    $_SESSION['senha'] = $senha;
    
header('location:site.php');
}
    else{   
       unset ($_SESSION['nome_usuario']);
       unset ($_SESSION['senha']);
       
       header('location:index.php');
    }
   
   






?>