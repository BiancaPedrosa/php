<?php
include "cabecalho.php";
include "conecta.php";
session_start();
$login =  $_POST['login'];
$senha =  $_POST['senha'];
$sql="";
if ($login == $senha)
{
    $sql = "SELECT  Ra,Senha FROM tb_aluno WHERE Ra = '$login'";
}
else{
    $sql = "SELECT  Ra, senha FROM tb_aluno WHERE Ra = '$login' AND senha=md5('$senha')";
    
}
$resultado = mysqli_query($con,$sql);
$num_resultados = mysqli_num_rows($resultado);
if($num_resultados==1){	
    if ($login == $senha) 
         header("location: form-altera.php?login=$login");
    else 
        echo '<div class="alert alert-success" role="alert">Bem Vindo !!</div>';
}
else { 
echo '<div class="alert alert-danger" role="alert">Usuário ou Senha inválida!</div>';
 }
?>
