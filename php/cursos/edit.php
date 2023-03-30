<?php
require_once 'php_action/db_connect.php';
session_start();

if($_SESSION['id_aluno']){
$id_aluno = $_SESSION['id_aluno'];
$sql = "SELECT * FROM aluno WHERE id_aluno = '$id_aluno'";
$result = $con->query($sql);
$data = $result->fetch_assoc();
$con->close();
?>
<html>
<head>
<style type="text/css">
fieldset{
width: 50%;
margin: auto;
margin-top:100px;
}
table tr th{
margin-top: 20px;
}
</style>
<title></title>
</head>
<body>
<fieldset>
<legend>Edição de Aluno</legend>
<form action="php_action/update.php" method="post">
<table cellspacing='0' cellpadding="0">
<tr>
<th>Nome</th>
<td><input type="text" name="nome" placeholder="Mudar nome"
value="<?php echo $data['nome']?>"></td>
</tr>
<tr>
<th>Email</th>
<td><input type="email" name="email"
placeholder="Mudar email" value="<?php echo $data['email']?>"></td>
</tr>
<tr>
<th>Senha</th>
<td><input type="password" name="senha"
placeholder="Mudar senha" value="<?php echo $data['senha']?>"></td>
</tr>

<td><button type="submit">Salvar Alterações</button></td>
<td><a href="site.php"><button
type="button">Voltar</button></a></td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>
<?php
}
?>