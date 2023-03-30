<html>
    <head>
        
<?php
require_once "php_action/db_connect.php";

?>
<style text="css">
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
    div select{
    border-radius: 4px;
    padding: 4px;
    background-color: #836FFF;
    color: black; 

    }
    div button{
        border-radius: 6px; 
        background-color: #483D8B; 
        color: white; 
        padding: 5px;
        border: none;
    }
    button:hover{
            background-color: #A020F0;
           }

    div table tr{
    background: #836FFF;
    border-color: black;
    color: black;
    border-radius: 4px;
    text-align: center; 
    }
    div table{
        border-color: black;
    }


</style>
<div>
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
<h1>Listar alunos cadastrados</h1>
<table class = "table table-bordered">

<table class = "table table-bordered">
<thead>
<tr>
<th>Id do aluno</th>
<th>Nome</th>
<th>Email</th>


</tr>
    </div>
<?php


$sql = "SELECT * FROM aluno";
$result = $con -> query($sql);

if($result->num_rows > 0){
while($row = $result -> fetch_assoc()){ 
  
  echo "<tr>";
  echo "<td>".$row['id_aluno']."</td>";
  echo "<td>".$row['nome']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "</tr>";
  }
  }else{
  echo "<tr><td colspan='5'><center>Sem Dados a 
  apresentar</center></td></tr>";
}
?>


<h1>Listar alunos cursando</h1>
<table class = "table table-bordered">

<table class = "table table-bordered">
<thead>
<tr>
<th>Id do aluno</th>
<th>Nome</th>
<th>Email</th>
<th>Curso</th>


</tr>
    </div>
<?php


$sql = "SELECT alu.id_aluno, alu.nome, cur.nome_curso, cur.preco, alu.email
from aluno as alu, cursos as cur, cursar as curs
where alu.id_aluno=curs.id_aluno and cur.id_curso=curs.id_curso";
$result = $con -> query($sql);

if($result->num_rows > 0){
while($row = $result -> fetch_assoc()){ 
  
  echo "<tr>";
  echo "<td>".$row['id_aluno']."</td>";
  echo "<td>".$row['nome']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['nome_curso']."</td>";
  echo "</tr>";
  }
  }else{
  echo "<tr><td colspan='5'><center>Sem Dados a 
  apresentar</center></td></tr>";
}
?>
<button onclick = "window.print()">Imprimir </button>
</body>
</html>