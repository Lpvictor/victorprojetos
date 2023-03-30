<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body{
background: #98ff98;
}
*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;

}
nav{
background-color: #9370db;
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
     <a href="site.php">Cursos</a>
  </div> 
  <ul>
    <li><a href="cursar.php"><button type="button" class="btn btn-success" style="border-radius: 6px; background-color: #483D8B; color: white; padding: 5px;border:none;">Comece um curso</button></a>
    <li><a href="logout.php" > <button type="button" style="border-radius: 6px; background-color: #483D8B; color: white; padding: 5px; border:none;">Sair</button></a>
  </ul>
</nav>
<?php 
require_once 'php_action/db_connect.php';

session_start();
$email=$_SESSION['email'];
$senha=$_SESSION['senha'];

if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:site.php');
  
}
$sql = "SELECT alu.nome, cur.nome_curso, cur.preco
  from aluno as alu, cursos as cur, cursar as curs
  where alu.id_aluno=curs.id_aluno and cur.id_curso=curs.id_curso and email='$email'";
  $result = $con -> query($sql);
  
  if($result->num_rows > 0){
  while($row = $result -> fetch_assoc()){ 
    
    echo "<h2>Cursando: </h2>";
    echo "<tr>
    <td>Nome do aluno: ".$row["nome"]."</td><br>
    <br><td>Está cursando: ".$row["nome_curso"]."</td><br>
    <br><td>Pagando o valor de: "."R$".$row["preco"]." por mês</td>
    </tr>";
    }
    }else{
    echo "<tr><td colspan='5'><center>Sem Dados a 
    apresentar</center></td></tr>";
}

?>
<br><a href="edit.php"><button style="border-radius: 6px; background-color: #483D8B; color: white; padding: 5px;border:none;">Editar informações</button></a>

    

</body>
</html>