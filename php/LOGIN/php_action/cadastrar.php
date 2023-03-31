<?php 
require_once 'db_connect.php';

$sql2="SELECT usu.nome, noti.titulo, noti.texto, noti.data, noti.hora 
from usuario as usu, noticias as noti 
where usu.id_usuario=noti.id_usuario and noti.id_noticia=noti.id_noticia order by hora desc";
if($con -> query($sql2) === TRUE){}

if($_POST){ 
$id_usuario=$_POST['id_usuario'];
$titulo = $_POST['tit'];
$texto = $_POST['texto'];

$result= $con -> query("SELECT * FROM usuario where id_usuario ='$id_usuario'");

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
       
       
   $sql = "INSERT INTO noticias (id_noticia,id_usuario,titulo,texto,data,hora) 
   VALUES (0,'$id_usuario','$titulo','$texto',NOW(),CURTIME())";

if($con -> query($sql) === TRUE){
echo "<p> Nova noticia cadastrada com sucesso!</p>";
echo "<a href='../cadastrar.php'><button 
type='button'>Voltar</button></a>";
echo "<a href='../site.php'><button 
type='button'>Visualizar</button></a>";
}else{
echo "Erro ".$sql. ' '.$con -> connect_error;
}
}
$con -> close(); //fecha aplicaçao//
//testa la o cadastro de fora pra ver se tem que botar um require once
}
}
?>