<form method="post" name="data01">Digite  uma data inicial<input type="date" name="data01"><br>
<form method="post" name="data02">Digite  uma data final<input type="date" name="data02"><br>
<form method="post" name="hora01">Digite  uma hora inicial<input type="time" name="hora01"><br>
<form method="post" name="hora02">Digite  uma hora final<input type="time" name="hora02">
<input type="submit" value="Enviar">
</form>

<?php

function data($data1, $data2, $hora1, $hora2){
$data1= new DateTime($_POST['data01']);
$data2 = new DateTime($_POST['data02']);
$datdiff = $data1 ->diff($data2);
echo $datdiff ->format('%R%a dias' . " ");



$hora1= new strtotime($_POST['hora01']);
$hora2 = new strtotime($_POST['hora02']);
$hrdiff = ($hora1-$data2)/3600 . " segundos";
echo $hrdiff;
}
data($_POST['data01'], $_POST['data02'], $_POST['hora01'], $_POST['hora02']);
?>

