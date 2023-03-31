<?php require_once 'php_action/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Adicionar Notícias</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min
.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundl
e.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</head>
<style type="text/css">
/*
fieldset{
margin:auto;
margin-top: 100px;
width:50%;
}
table tr th{
padding-top: 20px;
}*/
</style>
<body>
<fieldset>
<legend>Adicionar Notícias</legend>
<form action="php_action/cadastrar.php" method="post" class = "form-group">

<?php
require_once 'php_action/db_connect.php';

session_start();
$nome=$_SESSION['nome'];
$senha=$_SESSION['senha'];
$sql="SELECT * from usuario where nome='$nome' and senha ='$senha'";
$result= $con -> query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
    $id_usuario = $row['id_usuario'];
  
?>

<table cellspacing="0" cellpadding="0">

<tr>
    
<th>Título</th>
<td><input class = "form-control" type="text"
name="tit" placeholder="Titulo"></td>
</tr>
<tr>
<th>Texto</th>
<td><input class = "form-control" type="text"
name="texto" placeholder="texto da noticia"></td>
</tr>
<tr>
<td><button type="submit" class = "btn btn-info">Postar</button></td>
<td><a href="index.php"><button type="button"
class="btn btn-alert">Cancelar</button></a></td>
</tr>
</table>
<input type='hidden' name="id_usuario" value="<?php echo $id_usuario;
 
}
} ?>" >
</form>
</fieldset>
</body>
</html>