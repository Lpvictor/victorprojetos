<html>
<body>
<form method = "POST" action="edit1.php">
    <h1>Selecione o curso que deseja atualizar<h1>
        <?php
        require_once "php_action/db_connect.php";
        echo "<select name='altcurso'>";
        $result = $con -> query("SELECT * FROM cursos");

        if($result -> num_rows > 0){
while($row = mysqli_fetch_assoc($result)){
echo "<label>Mudar</label>";
echo "<option>".$row['nome_curso']."</option>";


}

        }
        echo "</select>";

        ?>
        <br><input type="submit" value="Selecionar">
    </form>
      
</body>

</html>    