<?php
$localhost = "127.0.0.1";
$username="root";
$password = "";
$dbname = "carrinho";
//criar minha conexão
$con = new mysqli($localhost,$username,$password,$dbname);
//checar a conexão
if($con -> connect_error){
die ("A conexão falhou: ".$con -> connect_error);
}
else{

}
?>