<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset= utf-8 pt-br" />
	<title> Lista de Produtos </title>
	<link href="./css/estilo.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,800" rel="stylesheet">
</head>
 
<body>
<div id="all">
        
	<div id="php"></div>
	
	<div id="menu">
		<a href="index.php">Destaques</a>
		<a href="empresa.php">A Empresa</a>
		<a href="produtos.php">Produtos</a>
		<a href="contato.php">Contato</a>
	</div>
	
	<div id="content"> 
		
		<div style="text-align:center;"id="text">
                    
                    <h1>Cadastrar Produto</h1>

			<form action="cadastrar-exec.php" method="POST">
				Nome: <br>
				<input type="text" name="nom">
				<br><br>

				Descricao: <br>
				<textarea name="des" rows="4" cols="20"></textarea>
				<br><br>

				Valor: <br>
				<input type="number" name="val">
				<br><br>

				<button type="submit">Cadastrar</button>
			</form>
                    
			<?php
			include('./inc/inc.mensagens.php');
			?>
		</div>
		
		<div id="news">
			<h2>Última Notícias</h2>
			Maecenas est diam, tincidunt non tempor at, interdum eget leo. <br />
			<a href="http://www.terra.com.br" target="_blank">leia +</a>
			<br /><br />
			Maecenas est diam, tincidunt non tempor at, interdum eget leo. <br />
			<a href="http://www.g1.com.br" target="_blank">leia +</a>
			<br /><br />
			Maecenas est diam, tincidunt non tempor at, interdum eget leo. <br />
			<a href="http://www.clicrbs.com.br" target="_blank">leia +</a>
			<br /><br />
		</div>
		
		<br class="limpar_flutuacao" />
	</div>
	
	<div id="footer">
		© Copyright 2021
	</div>

</div>
</body>
</html>