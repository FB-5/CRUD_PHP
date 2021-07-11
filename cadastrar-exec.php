<?php

//pegar os dados que vieram do formulário pelo método POST
$nom = $_POST['nom'];
$des = $_POST['des'];
$val = $_POST['val'];

//DEVERÍAMOS fazer vários testes pra confirmar se os dados estão corretos e etc

//conexão com o banco de dados
include('./inc/inc.conex.php');

//executa um SQL e obtem o resultado
$sql = "insert into produtos (nome, descricao, valor) 
		values ('$nom', '$des', $val)";
$result = mysqli_query($conn, $sql);

//manipula o resultado 
if ($result) {
	//ok
	$destino = './produtos.php';
}
else {
	//bug
	$destino = './cadastrar.php?cod=12';
}

//fecha a conexão com o banco
mysqli_close($conn);


//direciona para a página correta
php("location: $destino");
?>