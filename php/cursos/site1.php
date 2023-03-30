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
button {
        border-radius: 6px; 
        background-color: #483D8B; 
        color: white; 
        padding: 5px;
        border: none;
}
           button:hover{
            background-color: #A020F0;
           }

</style>
<nav>
  <div class="logo">
     <a href="site1.php">Página de administrador</a>
  </div> 
  <ul>
    <li><a href="cadastrar1.php"><button type="button" class="btn btn-success">Cadastrar curso</button></a>
    <li><a href="listarAlunos.php" > <button type="button">Lista de alunos cadastrados</button></a>
    <li><a href="listarCursos.php" > <button type="button">Lista de cursos</button></a>
    <li><a href="listaCurso.php" > <button type="button">Lista de alunos por curso</button></a>
    <li><a href="logout.php" > <button type="button">Sair</button></a>
    
  </ul>
</nav>
<?php 
require_once 'php_action/db_connect.php';

session_start();
$email=$_SESSION['email'];
echo "<h2>Seja bem vindo $email</h2>";
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:site1.php');
  }
  

?>

    

    

</body>
</html>