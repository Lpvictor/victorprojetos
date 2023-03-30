<form method="post">Número<input type="text" name="valor">
<input type="submit" value="Enviar">
</form>
<?php
function num($valor){
 echo floor($valor);
}
num($_POST['valor']);
?>