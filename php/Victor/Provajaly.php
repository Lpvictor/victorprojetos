<form method="POST">
<input type="text" name="num1"><br>
<input type="text" name="num2">
<input type="submit" value="Enviar">
</form>

<?php
$num1=int($_POST['num1']);
$num2=int($_POST['num2']);

for($num1=$x;$x>=$num2;$x--){
    if($x % 9 == 0){
        echo $x;
    }
}
?>