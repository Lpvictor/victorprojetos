
<!DOCTYPE html>
<html>
<head>
<title>Cadastrar Compra</title>
<style type="text/css">

</style>
<body>

<h1>Cursar</h1>
<form action="php_action/cursar.php" method="post" class = "form<0x02group">
<tr>
Selecione o Curso que deseja fazer: <br>
<br><?php
require_once 'php_action/db_connect.php';

$sql = "SELECT * FROM cursos";
$result = $con -> query($sql);
if($result->num_rows){
while ($row = $result->fetch_assoc()) {
echo "<input type= 'checkbox' name='id_curso' value=".$row["id_curso"].">".$row['nome_curso']." = R$".$row['preco']." | Vagas disponíveis: ". max($row['vagas'],0)."<br></input><br>";
}
}

?><br>
<br><td><input type="hidden"class = "form-control" type="number" min="1" max="1" value="1" name="vagas" placeholder=""></td>
</tr>
<tr>
<td><button type="submit" class = "btn btn-alert">Começar curso</button></td>
<td><a href="site.php"><button type="button"
class="btn btn<0x02>alert">Voltar</button></a></td>
</tr>
</table>
</form>
</body>
</html>