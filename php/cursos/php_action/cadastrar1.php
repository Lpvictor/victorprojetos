<?php
require_once 'db_connect.php';
if($_POST){//o post oculta/evita o acesso pois esconde na url(7)//

    $nome_curso = $_POST['nome_curso'];
    $preco = $_POST['preco'];
    $vagas = $_POST['vagas'];
$sql = "INSERT INTO cursos (id_curso,nome_curso,preco,vagas) 
VALUES (null, '$nome_curso','$preco','$vagas')"; //tem que estar na mesma ordem do bd(9)//
if($con -> query($sql) === TRUE){
echo "<p> Novo curso cadastrado com sucesso!</p>";

echo "<a href='../cadastrar1.php'><button type='button'>Voltar</button></a>";

echo "<a href='../site1.php'><button type='button'>Home</button></a>";
}else{
echo "Erro ".$sql. ' '.$con -> connect_error;
}
$con -> close();//fecha a aplicação//
}
?>