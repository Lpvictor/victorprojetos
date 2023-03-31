<?php require_once 'php_action/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Cadastro usuário</title>
</head>
<style type="text/css">


</style>
<body>
<h1>Cadastrar usuário</h1>
<form action="php_action/cadastrar2.php" method="post" class = "form-group">
<table cellspacing="0" cellpadding="0">
<tr>
<th>Nome</th>
<td><input class = "form-control" type="text"
name="nome" placeholder="Nome de usuário"></td>
</tr>
<tr>
<th>senha</th>
<td><input class = "form-control" type="password"
name="senha" placeholder="Crie uma senha"></td>
</tr>

<tr>
<td><button type="submit" class = "btn btn-alert">Cadastrar</button></td>
<td><a href="index.php"><button type="button"
class="btn btn-info">Voltar</button></a></td>
</tr>
</table>
</form>
</body>
</html>

