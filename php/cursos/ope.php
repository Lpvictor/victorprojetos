<?php require_once 'php_action/db_connect.php';
session_start(); 

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$result = $con->query("SELECT * FROM aluno WHERE senha = '$senha' AND email = '$email'");
while ($row = mysqli_fetch_assoc($result)){
    $id_aluno = $row['id_aluno'];
}
if(mysqli_num_rows($result) > 0){
    $_SESSION['id_aluno'] = $id_aluno;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    
header('location:site.php');
}
else{   
    $result2 = $con->query("SELECT * FROM adm WHERE senha = '$senha' AND email = '$email'");
    while ($row = mysqli_fetch_assoc($result2)){
        $id_adm = $row['id_adm'];
    }
    if(mysqli_num_rows($result2) > 0){
    
        $_SESSION['id_adm'] = $id_adm;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        
    header('location:site1.php');
    }
    else{   
       unset ($_SESSION['nome']);
       unset ($_SESSION['email']);
       unset ($_SESSION['senha']);
       
       header('location:index.php');
    }
   
   
}





?>