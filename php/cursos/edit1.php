<form  method="POST" action="php_action/edit1.php">
    <?php
    require_once 'php_action/db_connect.php';
    $altcurso = $_POST['altcurso'];
    $result = $con -> query("SELECT * FROM cursos WHERE nome_curso = '$altcurso'");
    if($result -> num_rows > 0){
    while($row = mysqli_fetch_assoc($result)){
    echo "<input type='hidden' name='id_curso' value=".$row['id_curso']." min =".$row['id_curso']." max=".$row['id_curso'].">";
    echo "Nome do curso: <input type='text' name = 'nome_curso' value=".$row['nome_curso']."><br>";
    echo "Valor: <input type='preco' name = 'preco' value=".$row['preco']."><br>";
    echo "Vagas: <input type='number' name = 'vagas' value=".$row['vagas']."><br>";
    }

    }
    ?>

    <br><input type="submit" value="Atualizar">
</form>


