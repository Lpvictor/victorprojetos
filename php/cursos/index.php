<?php require_once 'php_action/db_connect.php'; ?>
<html>
    <body>

<head>
<script type="text/javascript" src="bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="bootstrap-5.2.3/dist/css/bootstrap.min.css"></link>

</head> 
<nav>
  <div class="logo">
     <a class="breadcrumb-item"href="index.php">Cursos</a>
  </div> 
  <ul>
    <a href="login.html"><button type="button" class="btn btn-dark">Fazer Login</button></a>
    <a href="cadastrar.php"><button type="button" class="btn btn-warning">Cadastre-se</button></a>  
</ul>
</nav>
</head>
<body>
<div class="tabelaCursos">
<table class = "table table-bordered">
<thead>

</thead>
<tbody>
    <?php
    echo "<h1>Cadastre-se em nosso site e entre para um curso já!</h1>"
    ?>
</tbody>
</table>
</div>

</form>
</body>
</html>