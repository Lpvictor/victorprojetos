<?php require_once 'php_action/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
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
<body>
<div class="tabelaCliente">
<a href="create.php"><button type="button" class="btn btn-success">Cadastrar Cliente</button></a>
<a href="create2.php"><button type="button" class="btn btn-success">Cadastrar Compra</button></a>
<a href="compra.php"><button type="button" class="btn btn-success">Compras</button></a>
<table class = "table table-bordered">
<thead>
<tr>
<th>Nome</th>
<th>Telefone</th>
<th>CPF</th>
<th>Endereço</th>
<th>Idade</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM cliente";
$result = $connect -> query($sql);
if($result -> num_rows > 0){
while($row = $result -> fetch_assoc()){ 
    

echo "<tr>
<td>".$row["nome"]."</td>
<td>".$row["telefone"]."</td>
<td>".$row["cpf"]."</td>
<td>".$row["endereco"]."</td>
<td>".$row["idade"]."</td>";
}
}else{
echo "<tr><td colspan='5'><center>Sem Dados a 
apresentar</center></td></tr>";
}
?>
</tbody>
</table>
</div>
</body>
</html>