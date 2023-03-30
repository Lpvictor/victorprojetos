

       
<?php
$material = array(
"Borracha" => 2.30, "Lápis" =>0.70 , "Caderno" =>10);
echo '<form method="post">';
?>

<?php
foreach($material as $k => $v){
echo $k.' <input type="radio" name="material[]" value = "'.$key.$value.'">';
}
echo '<form>';
?>
</table>
<p> <input type="submit" value="Calcular">;
</form>
<?php
$material = $_POST['material'];

echo 'Produto:  '.$material. ' Valor:  '.$value';

?>
