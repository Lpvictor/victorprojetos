
<!DOCTYPE html>
<html>
<head>
<title>Cadastrar Compra</title>
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
<legend>Cadastrar Compra</legend>
<form action="php_action/create2.php" method="post" class = "form<0x02group">
<table cellspacing="0" cellpadding="0">
<tr>
    
Cliente: <select name= 'idcliente'>
<?php
require_once 'php_action/db_connect.php';


$sql = "SELECT * FROM cliente";
$result = $connect -> query($sql);
if($result->num_rows){
while ($row = $result->fetch_assoc()) {
echo "<option value = ".$row['idcliente'].">".$row['nome']."</option>";
}
}

?>
</select><br>
Produto:<br>
<?php

$sql = "SELECT * FROM produto";
$result = $connect -> query($sql);
if($result->num_rows){
while ($row = $result->fetch_assoc()) {
echo "<input type= 'checkbox' name='idproduto' value=".$row["idproduto"].">".$row['nome_prod']." = R$".$row['preco']." | Quantidade do estoque: ". max($row['qtd_prod'],0)."<br></input>";
}
}
?>

<tr>
<th>Data</th>
<td><input class = "form-control" type="date" name="data" placeholder="data"></td>
</tr>
<th>Quantidade</th>
<td><input class = "form-control" type="number" name="qtd_compra" placeholder="Selecione a quantidade"></td>
</tr>
<tr>
<td><button type="submit" class = "btn btn-alert">Salvar Dados</button></td>
<td><a href="compra.php"><button type="button"
class="btn btn<0x02>alert">Voltar</button></a></td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>