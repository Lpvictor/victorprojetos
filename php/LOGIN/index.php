<?php require_once 'php_action/db_connect.php'; ?>
<html>
    <body>

<style type="text/css">
body{
background: #008B8B;
}
*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;

}
nav{
background-color: #00CED1;
padding: 10px 60px;
display: flex;
justify-content: space-between;
align-items: center;

}
nav .logo a{
text-decoration: none;
color: black;
font-size: 30px;
font-weight: 600;

}
nav ul{
display: flex;
align-items: center;
list-style: none;
padding: 10px;
}
nav li{
  margin-left: 7px;
}
</style>
<nav>
  <div class="logo">
     <a href="index.php">VR NEWS</a>
  </div> 
  <ul>
    <li><a href="login.html"><button type="button" class="btn btn-info" style="border-radius: 6px; background-color: #483D8B; color: white; padding: 5px; border: none; height: 50px; width: 100px;cursor:pointer;">Fazer Login</button></a>
  </ul>
</nav>
</head>
<body>
<div class="tabelaNoticia">
<table class = "table table-bordered">
<thead>

</thead>
<tbody>
<?php
$sql = "SELECT usu.nome, noti.titulo, noti.texto, noti.data, noti.hora from usuario as usu, noticias as noti where usu.id_usuario=noti.id_usuario and noti.id_noticia=noti.id_noticia order by hora desc";
$result = $con -> query($sql);
if($result -> num_rows > 0){
while($row = $result -> fetch_assoc()){
    echo "<br><h2>".$row["titulo"]."</h2>"."<p>".$row["texto"]."</p>"."<p>".$row["data"]."</p>"."<p>".$row["hora"]."</p>"."<p>"."Autor(a): ".$row["nome"]."</p>";
}}
else{
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