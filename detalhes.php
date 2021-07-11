<?php

//pegar o código enviado pelo link
if (isset($_GET['codigo']) && is_numeric($_GET['codigo'])) {
	$cod = $_GET['codigo'];

	include('./inc/inc.conex.php');
	$sql = "select * from produtos where codigo = '$cod' ";
	$result = mysqli_query($conn, $sql);

	foreach ($result as $linha) {
		$cod = $linha['codigo'];
		$nom = $linha['nome'];
		$des = $linha['descricao'];
		$val = $linha['valor'];
		$val = 'R$ '.number_format($val, 2, ',', '.');
	}
	//fim do foreach
	mysqli_close($conn);

}
else {
	php('location: produtos.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title> Detalhes do Produto </title>
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
		<h1><?php echo $nom ?></h1>
		
		<div id="text">
			<h2><?php echo $val ?></h2>
			<p><?php echo $des ?></p>
		</div>
		
		<div id="news">
			<h2>Últimas Notícias</h2>
			Maecenas est diam, tincidunt non tempor at, interdum eget leo. <br />
			<a href="http://www.terra.com.br">leia +</a>
			<br /><br />
			Maecenas est diam, tincidunt non tempor at, interdum eget leo. <br />
			<a href="http://www.g1.com.br">leia +</a>
			<br /><br />
			Maecenas est diam, tincidunt non tempor at, interdum eget leo. <br />
			<a href="http://www.clicrbs.com.br">leia +</a>
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