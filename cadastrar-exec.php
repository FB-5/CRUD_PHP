<?php

//pegar os dados que vieram do formul�rio pelo m�todo POST
$nom = $_POST['nom'];
$des = $_POST['des'];
$val = $_POST['val'];

//DEVER�AMOS fazer v�rios testes pra confirmar se os dados est�o corretos e etc

//conex�o com o banco de dados
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

//fecha a conex�o com o banco
mysqli_close($conn);


//direciona para a p�gina correta
php("location: $destino");
?>