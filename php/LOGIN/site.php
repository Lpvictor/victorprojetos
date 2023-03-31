<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body{
background: #00CED1;
}
*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;

}
nav{
background-color: #836FFF;
padding: 10px 60px;
display: flex;
justify-content: space-between;
align-items: center;

}
nav .logo a{

text-decoration: none;
color: black;
font-size: 30px;
font-weight: 600;

}
nav ul{
display: flex;
align-items: center;
list-style: none;
padding: 10px;
}
nav li{
  margin-left: 7px;
}



</style>
<nav>
  <div class="logo">
     <a href="index.php">VR NEWS</a>
  </div> 
  <ul>
    <li><a href="cadastrar.php"><button type="button" class="btn btn-success" style="border-radius: 6px; background-color: #483D8B; color: white; padding: 5px;">Adicionar Notícias</button></a>
    <li><a href="index.php" > <button type="button" style="border-radius: 6px; background-color: #483D8B; color: white; padding: 5px;">Ver Noticias Gerais </button></a>
    <li><a href="logout.php" > <button type="button" style="border-radius: 6px; background-color: #483D8B; color: white; padding: 5px;">Sair</button></a>
  </ul>
</nav>
<?php 
require_once 'php_action/db_connect.php';

session_start();
$nome=$_SESSION['nome'];
echo "<h2>Seja bem vindo $nome</h2>";
if((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:site.php');
  }


$sql = "SELECT usu.nome, noti.titulo, noti.texto, noti.data, noti.hora 
from usuario as usu, noticias as noti 
where usu.id_usuario=noti.id_usuario and noti.id_noticia=noti.id_noticia order by hora desc";
$result = $con -> query($sql);
if($result->num_rows > 0){
while($row = $result -> fetch_assoc()){ 
echo "<h2>".$row["titulo"]."</h2>"."<p>".$row["texto"]."</p>"."<p>".$row["data"]."</p>"."<p>".$row["hora"]."</p>"."<p>"."Autor(a): ".$row["nome"]."</p>";
}}

?>

    </button></a>

    

</body>
</html>