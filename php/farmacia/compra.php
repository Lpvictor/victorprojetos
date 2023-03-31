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
<div class="tabelaPedido">

<form method = "POST">
    Relatório de Cliente: <select name = 'idcliente'>
        <?php
        $sql = "SELECT * FROM cliente";
        $result = $connect -> query($sql);
        if($result -> num_rows){
        while($row = $result -> fetch_assoc()){
            echo "<option value = " . $row['idcliente'].">".$row['nome']."</option>";
        }
        }
        ?>
        </select><button type="submit" class = "btn btn-alert">Enviar</button>

<table class = "table table-bordered">
<thead>
<tr>
<th>Nome</th>
<th>Produto</th>
<th>Preço</th>
<th>Quantidade</th>
<th>Data</th>

</tr>
</thead>
<tbody>
<?php
$idcliente = $_POST['idcliente'];


$sql="SELECT cli.nome, prod.nome_prod,pe.data, pe.qtd_compra, (prod.preco * pe.qtd_compra) as valtotal 
from cliente as cli, produto as prod, pedido as pe 
where cli.idcliente=pe.idcliente and prod.idproduto=pe.idproduto and pe.idpedido=pe.idpedido and pe.idcliente = $idcliente";

$result = $connect -> query($sql);
if($result -> num_rows > 0){
while($row = $result -> fetch_assoc()){

echo "<tr>
<td>".$row["nome"]."</td>
<td>".$row["nome_prod"]."</td>
<td>"."R$".$row["valtotal"].".00"."</td>
<td>".$row["qtd_compra"]."</td>
<td>".$row["data"]."</td>";
}
}else{
echo "<tr><td colspan='5'><center>Sem Dados a 
apresentar</center></td></tr>";
}

?>

</tbody>

</table>
</form>
</div>
</body>
</html>