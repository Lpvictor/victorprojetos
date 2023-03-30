<?php require_once 'php_action/db_connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="cc/css/bootstrap.min.css">
	
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a id="navTitle" class="navbar-brand" href="site.php"></a>
	    </div>
	  </div>
	</nav>

	<div class="container-fluid">
		<div class="form-inline">
			
			<div class="form-group">
				<form method="POST">
				<select name = 'id_produto' class="form-select" multiple aria-label="multiple select example" style="border-radius: 6px;">	
				<?php
        $sql = "SELECT * FROM produto";
        $result = $con -> query($sql);
        if($result -> num_rows){
        while($row = $result -> fetch_assoc()){
            echo "<option value = " . $row['id_produto'].">".$row['nome_prod']." | ".$row['preco']." </option>";
        }
        }
        ?>
		</select>
	</div>
		<div class="form-group">
		<button type="submit" class="btn btn-"><ion-icon name="chevron-down-circle-outline"></ion-icon>Selecionar</button>
		    </div>
			   <div class="form-group"> 
				<?php
				$id_produto = $_POST["id_produto"];
				$sql= $con ->query("SELECT nome_prod from produto WHERE id_produto = '$id_produto'");
				if($sql -> num_rows > 0){
				while($row = $sql -> fetch_assoc())
				echo '<input type="text" class="form-control" id="desc" value = "'.$row["nome_prod"].'">';
				}
				?>
			</div>
	
			<div class="form-group">
				<?php
				$sql= $con ->query("SELECT estoque from produto WHERE id_produto = '$id_produto'");
				if($sql -> num_rows > 0){
				while($row = $sql -> fetch_assoc())
				echo '<input type="number" class="form-control" id="qtd" value = "0" placeholder="Quantidade" min="0" max="'.$row["estoque"].'">';
				}
				?>
				<script type="text/javascript">
		function id( el ){
        return document.getElementById( el );
}
window.onload = function(){
        id('ma').onclick = function(){
                id('qtd').value = parseInt( id('qtd').value )+1;
                
                id('total').value = 1+id('qtd').value;
        }
        id('me').onclick = function(){
                if( id('qtd').value>0 )
                        id('qtd').value = parseInt( id('qtd').value )-1;
                
                id('total').value = 1+id('qtd').value;
        }
}       
</script>

<input type="button" class="btn btn-success" name="mais" id="ma" value="+"/>

<input type="button" class="btn btn-danger" name="menos" id="me" value="-"/>

				</div>
			<div class="form-group">
			<?php
				$sql= $con ->query("SELECT preco from produto WHERE id_produto = '$id_produto'");
				if($sql -> num_rows > 0){
				while($row = $sql -> fetch_assoc())
				echo '<input type="number" class="form-control" id="valor" placeholder="Valor" value = "'.$row["preco"].'" max="'.$row["preco"].'" min="'.$row["preco"].'">';
			}
			?>
			</div>
			<span id="btnUpdate" style="display: none;">
				<span id="inputIDUpdate"></span>
				<button onclick="updateData();" class="btn btn-success">Salvar</button>
				<button onclick="resetForm();" class="btn btn-danger">Cancelar</button>
			</span>
			<span id="btnAdd">
				<button onclick="addData();" class="btn btn-success">Adicionar</button>
				<button onclick="resetForm();" class="btn btn-defalt">Reiniciar</button>
				<button onclick="deleteList();" class="btn btn-danger">Deletar</button>
			</span>
			
		</div>

		<div id="errors" style="display: none;"></div>

		<table id="listTable" class="table">
		
		</table>
	</div>

	<nav class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<h4 class="text-center text-success">Total: <span id="totalValue">R$ 0,00</span></h4>
		</div>
	</nav>

	<script type="text/javascript" src="cc/js/config.js"></script>
	<script type="text/javascript" src="cc/js/main.js"></script>
</body>
</html>
<?php 
require_once 'php_action/db_connect.php';

session_start();
$nome_usuario=$_SESSION['nome_usuario'];
$senha=$_SESSION['senha'];

if((!isset ($_SESSION['nome_usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:site.php');
  
}

?>
<?php
