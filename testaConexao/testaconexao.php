<?php
	
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$servidor = $_POST['servidor'];
	@ $conn = mysqli_connect($servidor,$usuario,$senha); 

	if (!$conn) {
		echo 'Não foi possível conectar ao banco MySQL!';
	}
	else {
		echo ('A conexão com banco de dados foi bem sucedida!!');
	}

	mysqli_close($conn); 
?>
