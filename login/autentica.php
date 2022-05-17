<?php
include "cabecalho.php";
include "conecta.php";

$login =  $_POST['login'];
$senha =  $_POST['senha'];

$sql = "SELECT  login, senha FROM tabela
        WHERE login = '$login' AND senha=md5('$senha')";
        
$resultado = mysqli_query($conexao,$sql) or die("Erro no banco de dados!");
$num_resultados = mysqli_num_rows($resultado);
if($num_resultados==1)
    	echo '<div class="alert alert-success" role="alert">Bem Vindo !!!</div> ';
else
    echo '<div class="alert alert-danger" role="alert">Usuário ou Senha inválida!</div>';
?>
