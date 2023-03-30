<?php
require_once 'db_connect.php';
session_start();
if($_POST){
    $id_curso=$_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$preco = $_POST['preco'];
$vagas = $_POST['vagas'];

$sql = $con -> query("UPDATE cursos SET nome_curso = '$nome_curso', preco = '$preco',
vagas = '$vagas' WHERE id_curso = '$id_curso'");
if($sql === TRUE){
echo "<p> Atualização realizada com sucesso!</p>";
echo "<a href='../edit1.php?id_curso=".$id_curso."'><button
type='button'>Editar</button>";
echo "<a href='../site1.php'><button
type='button'>Voltar</button>";
}
else{
echo "Erro ao atualizar os dados do aluno: ". $con->error;
}
$con->close();
}
?>
