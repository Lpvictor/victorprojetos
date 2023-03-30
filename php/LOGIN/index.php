<?php require_once 'php_action/db_connect.php'; ?>
<html>
    <body>
    <a href="login.php"><button style="background: white; border-radius: 5px;">Fazer Login</button></a>

    <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min
.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundl
e.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</head>
<body>
<div class="tabelaNoticia">
<a href="cadastro.php"><button type="button" class="btn btn-success">Adicionar Notícias</button></a>
<table class = "table table-bordered">
<thead>

</thead>
<tbody>
<?php
$sql = "SELECT * FROM noticias";
$result = $connect -> query($sql);
if($result -> num_rows > 0){
while($row = $result -> fetch_assoc()){
echo 
"<h1><br>".$row["titulo"] ."</h1><br><div><p>".$row["texto"]."</p></div><br>".$row["data"]."<br>".$row["hora"];
}
}else{
echo "<tr><td colspan='5'><center>Sem Dados a 
apresentar</center></td></tr>";
}
?>
</tbody>
</table>
</div>

</form>
</body>
</html>
