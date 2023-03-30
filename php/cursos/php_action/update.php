<?php
require_once 'db_connect.php';
session_start();
$id_aluno = $_SESSION['id_aluno'];
if($_POST){
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $con -> query("UPDATE aluno SET nome = '$nome', email = '$email',
senha = '$senha' WHERE id_aluno = '$id_aluno'");
if($sql === TRUE){
echo "<p> Atualização realizada com sucesso!</p>";
echo "<a href='../edit.php?id_aluno=".$id_aluno."'><button
type='button'>Editar</button>";
echo "<a href='../site.php'><button
type='button'>Voltar</button>";
}
else{
echo "Erro ao atualizar os dados do aluno: ". $con->error;
}
$con->close();
}
?>
