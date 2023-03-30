<?php
require_once 'db_connect.php';
if($_POST){
$nome = $_POST['name'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$sql = "INSERT INTO cliente (nome,telefone,cpf,endereco) 
VALUES ('$nome','$telefone','$cpf','$endereco')";
if($connect -> query($sql) === TRUE){
echo "<p> Novo cliente cadastrado com sucesso!</p>";
echo "<a href='../create.php'><button 
type='button'>Voltar</button></a>";
echo "<a href='../index.php'><button 
type='button'>Home</button></a>";
}else{
echo "Erro ".$sql. ' '.$connect -> connect_error;
}
$connect -> close();
}
?>