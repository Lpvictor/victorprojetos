<?php
require_once 'db_connect.php';
if($_POST){//o post oculta/evita o acesso pois esconde na url(7)//
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
$senha = $_POST['senha'];
$sql = "INSERT INTO usuario (id_usuario,nome,senha) 
VALUES (null, '$nome','$senha')"; //tem que estar na mesma ordem do bd(9)//
if($con -> query($sql) === TRUE){
echo "<p> Novo cliente cadastrado com sucesso!</p>";
echo "<a href='../cadastrar2.php'><button 
type='button'>Voltar</button></a>";
echo "<a href='../index.php'><button 
type='button'>Home</button></a>";
}else{
echo "Erro ".$sql. ' '.$con -> connect_error;
}
$con -> close();//fecha a aplicação//
}
?>