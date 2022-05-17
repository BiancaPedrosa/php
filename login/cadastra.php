<?php
include "cabecalho.php";
include "conecta.php";

$login =  $_POST['login'];
$senha =  $_POST['senha'];

$sql = "INSERT INTO tabela(login, senha) VALUES ('$login', md5('$senha'))";
        
$resultado = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));

if($resultado){	
    echo '<div class="alert alert-success" role="alert">Cadastrado!!!</div>';
}
else{ 
    echo '<div class="alert alert-danger" role="alert">Problemas no cadastro!</div>';
}
?>
