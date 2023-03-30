<?php require_once 'php_action/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
        <style>
           body{
            background-color: #98ff98;
           }
           div{
            background-color: rgba(147, 112, 219, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 10px;
            
           }
            input{
            padding: 15px;
            border: none;
            width: 90%;
            border-radius: 5px;
            outline: none;
            font-size: 15px;
           }
            button{
            background-color: #483D8B;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 5px;
            color: white;
            font-size: 15px;
           }
           button:hover{
            background-color: #A020F0;
           }
            
        </style>

    </head>
<body>
    <div>
<h1>Cadastrar curso</h1>
<form action="php_action/cadastrar1.php" method="post" class = "form-group">

<input class = "form-control" type="text" name="nome_curso" placeholder="Nome do curso"><br>

<br><input class = "form-control" type="number" name="preco" placeholder="Valor do curso"><br>

<br><input class = "form-control" type="number" name="vagas" placeholder="Quantas vagas o curso terá"><br>

<br><button type="submit" class = "btn btn-alert">Cadastrar Curso</button><br>

<br><a href="site1.php"><button type="button" class="btn btn-info">Voltar</button></a>
</form>
        </div>
</body>
</html>