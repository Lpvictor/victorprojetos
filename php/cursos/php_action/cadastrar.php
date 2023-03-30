<?php
require_once 'db_connect.php';
if($_POST){//o post oculta/evita o acesso pois esconde na url(7)//

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $query = "SELECT * FROM aluno WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
}if(isset($_POST['email'])){
        if($row){
          echo "Este nome de usuário já está sendo utilizado";
          echo "<a href='cadastrar.php'><button>Tentar novamente</button></a>";
        }else{
    
$sql = "INSERT INTO aluno (id_aluno,nome,email,senha) 
VALUES (null, '$nome','$email','$senha')"; //tem que estar na mesma ordem do bd(9)//
}
if($con -> query($sql) === TRUE){
echo "<p> Novo cliente cadastrado com sucesso!</p>";

echo "<a href='../cadastrar.php'><button type='button'>Voltar</button></a>";

echo "<a href='../index.php'><button type='button'>Home</button></a>";
}else{
echo "Erro ".$sql. ' '.$con -> connect_error;
}
$con -> close();//fecha a aplicação//
}
?>