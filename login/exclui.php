<?php
include "cabecalho.php";
include "conecta.php";

$login =  $_POST['login'];
$senha =  $_POST['senha'];

$sql = "DELETE FROM  tabela where login = '$login'";
        
$resultado = mysqli_query($conexao,$sql) or die(mysqli_error($con));

if($resultado)
    echo '<div class="alert alert-success" role="alert"> Excluído com sucesso!!!</div> ';
else
    echo '<div class="alert alert-danger" role="alert">Problemas na exclusão!!</div>';
?>