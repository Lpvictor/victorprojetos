<?php
require_once 'db_connect.php';
if($_POST){//o post oculta/evita o acesso pois esconde na url(7)//
$nome = $_POST['name'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$idade= $_POST['idade'];
$sql = "INSERT INTO cliente (nome,telefone,cpf,endereco, idade) 
VALUES ('$nome','$telefone','$cpf','$endereco','$idade')"; //tem que estar na mesma ordem do bd(9)//
if($connect -> query($sql) === TRUE){
echo "<p> Novo cliente cadastrado com sucesso!</p>";
echo "<a href='../create.php'><button 
type='button'>Voltar</button></a>";
echo "<a href='../index.php'><button 
type='button'>Home</button></a>";
}else{
echo "Erro ".$sql. ' '.$connect -> connect_error;
}
$connect -> close();//fecha a aplicação//
}
?>