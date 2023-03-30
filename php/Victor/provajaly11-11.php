<?php
$prod=array("Gasolina"=>4.99,"Etanol"=>3.99,"Diesel"=>3.78);

?>
<form method="POST">
Nome do Cliente:<input type="text" nome="cliente"><br>
Quantidade de litros:<input type="text" nome="qtd"><br>
<input type="submit" value="Enviar"> 
</form>
<?php

foreach($prod as $nome =>$valor){
    echo'<input type=" " name=prod[] value='.$nome.'>'.$valor.'</input>';
}
$cliente=$_POST['cliente'];


file_put_contents('comprador.txt', $cliente."\n",FILE_APPEND);
$qtd=$_POST['qtd'];
?>


