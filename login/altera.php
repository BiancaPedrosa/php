<?php
include "cabecalho.php";
include "conecta.php";

$login =  $_POST['login'];
$senha =  $_POST['senha'];


$sql = "UPDATE tabela SET  senha =  md5('$senha') WHERE login = '$login'";
        
$resultado = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));

if($resultado)
    echo '<div class="alert alert-success" role="alert">Senha alterada!!!</div> ';
else
  echo '<div class="alert alert-danger" role="alert"> Problemas na alteração!</div>';
?>