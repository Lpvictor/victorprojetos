<?php
echo "Cupom: ";
echo rand(1000,9999);
$material = array(
"Tv Samsumg 32" =>1500.00, "Ventilador" =>100.00 , "Liquidificador" =>90.00, "Cafeteira"=>150.00);
echo '<form method="post">';
?>

<?php
foreach($material as $k => $v){
echo $k.' <input type="radio" name="material[]" value = "'.$key.$value.'">';
}
echo '<form>';
?>
<form method="POST">
<input type="submit" value="Gerar Código de boleto"/><br>
<input type="text" name="nome">Nome do cliente<br>
<input type="date" name="data"><br>
<input type="checkbox" name="prod">
</form>

