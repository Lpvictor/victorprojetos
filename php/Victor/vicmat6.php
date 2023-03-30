<form method="post" name="valor">Número<input type="text" name="valor">
    <input type="text" name="valor2">
    <input type="submit" value="Enviar">
</form>
<?php
function num($valor, $valor2){
    echo pow($valor,$valor2);
}
num($_POST['valor'],$_POST['valor2']);
?>