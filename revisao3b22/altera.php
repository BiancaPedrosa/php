<?php
include "cabecalho.php";
include "conecta.php";

$login =  $_POST['login'];
$senha =  $_POST['senha'];

$sql = "UPDATE tb_aluno SET  senha =  md5('$senha') WHERE Ra = '$login'";
        
$resultado = mysqli_query($con,$sql);

if($resultado)
    echo '<div class="alert alert-success" role="alert">Senha alterada!!!</div>'; 
else
    echo '<div class="alert alert-danger" role="alert">Problemas na alteração!</div>';
echo '<a href="index.php">index</a>';
?>