<?php
require_once 'db_connect.php';
session_start();
if($_POST){
  $id_aluno=$_SESSION['id_aluno'];
$id_curso = $_POST['id_curso'];
$vagas = $_POST['vagas'];
$sql = "INSERT INTO cursar (id_cursar,id_aluno,id_curso, vagas) 
VALUES (null, '$id_aluno','$id_curso','$vagas')";

$result = $con -> query("SELECT vagas FROM cursos WHERE id_curso = '$id_curso'");
while($row = $result -> fetch_assoc()){
$vagas1 = $row['vagas'];
}
if($vagas1 == 0){
echo "<p>Este curso está indisponível no momento pois está sem vagas</p>";
echo "<a href='../cursar.php'><button type='button'>Escolher outro curso</button></a>";

}else{

if($con -> query($sql)){

echo "<p>Você entrou no curso com sucesso!</p>";
echo "<a href='../cursar.php'><button type='button'>Voltar</button></a>";
echo "<a href='../site.php'><button type='button'>Home</button></a>";
}

$sql2 = "UPDATE cursos SET vagas  = vagas - $vagas
WHERE id_curso=$id_curso";
if($con -> query($sql2)){}
$con -> close();
}
}

?>