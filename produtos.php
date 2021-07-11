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
		/
		<a href="cadastrar.php">Cadastrar Produto</a>
	</div>
	
	<div id="content"> 
		<h1>Lista de Produtos</h1>
		
		<div id="text">
			
			<?php
			include('./inc/inc.conex.php');
			$sql = "select * from produtos ";
			$result = mysqli_query($conn, $sql);
			
			foreach ($result as $linha) {
				$cod = $linha['codigo'];
				$nom = $linha['nome'];
				$des = $linha['descricao'];
				$val = $linha['valor'];
				$val = 'R$ '.number_format($val, 2, ',', '.');
				
				//trecho de HTML DENTRO do código PHP				
				echo "<div id=\"prolist\">
						<img src=\"./img/php.jpg\" />
						<h4> $nom </h4>
						<h5> $val </h5>
						$des
						<br/><br/>
						<a href=\"detalhes.php?codigo=$cod\">Ver Detalhes</a>
					</div>";
				//fim do trecho de HTML
			}
			//fim do foreach
			mysqli_close($conn);
			?>

		</div>
		
		<div id="news">
			<h2>Últimas Notícias</h2>
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