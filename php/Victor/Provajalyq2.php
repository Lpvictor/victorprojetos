<form method="POST">
<input type="date" name="data1"><br>
<input type="submit" value="Enviar">
</form>
<?php
$data1=strtotime($_POST['data1']);

$diff=($data1+ 14);
echo $diff;
?>