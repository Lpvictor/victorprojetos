<!DOCTYPE html>
<html>
<head>
<title>Farmácia</title>
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
<legend>Adicionar Cliente</legend>
<form action="php_action/create.php" method="post" class = "form-group">
<table cellspacing="0" cellpadding="0">
<tr>
<th>Nome</th>
<td><input class = "form-control" type="text"
name="name" placeholder="Nome"></td>
</tr>
<tr>
<th>Telefone</th>
<td><input class = "form-control" type="text"
name="telefone" placeholder="telefone"></td>
</tr>
<tr>
<th>CPF</th>
<td><input class = "form-control" type="text"
name="cpf" placeholder="cpf"></td>
</tr>
<tr>
<th>Endereço</th>
<td><input class = "form-control" type="text"
name="endereco" placeholder="endereco"></td>
</tr>
<tr>
<th>Idade</th>
<td><input class = "form-control" type="text"
name="idade" placeholder="idade"></td>
</tr>
<tr>
<td><button type="submit" class = "btn btn-alert">Salvar Dados</button></td>
<td><a href="index.php"><button type="button"
class="btn btn-info">Voltar</button></a></td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>
