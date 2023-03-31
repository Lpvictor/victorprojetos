<?php
require_once 'db_connect.php';
if($_POST){
$idcliente = $_POST['idcliente'];
$idproduto = $_POST['idproduto'];
$data = $_POST['data'];
$qtd_compra = $_POST['qtd_compra'];
$sql = "INSERT INTO pedido (idcliente,idproduto,data,qtd_compra) 
VALUES ('$idcliente','$idproduto','$data','$qtd_compra')";
if($connect -> query($sql)){
echo "<br>"."Cliente n°: ". $idcliente . "<br>". "Produto: ".$idproduto."<br>"."<br>"."Data da compra: ".$data."<br>"."Quantidade da compra: ".$qtd_compra;
echo "<p> Novo pedido cadastrado com sucesso!</p>";
echo "<a href='../create.php'><button
type='button'>Voltar</button></a>";
echo "<a href='../index.php'><button 
type='button'>Home</button></a>";
}
$sql2 = "UPDATE produto SET qtd_prod  = qtd_prod - $qtd_compra
WHERE idproduto=$idproduto";
if($connect -> query($sql2)){}
$connect -> close();

}
?>
<button onclick = "window.print()">Imprimir </button>