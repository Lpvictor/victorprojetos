
<form method="post" name="valor">Número<input type="text" name="valor">
    <input type="submit" value="Enviar">
</form>
<?php
function num($valor){
    echo ceil($valor);
}
num ($_POST['valor']);
?>

