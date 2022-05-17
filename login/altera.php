<?php
include "cabecalho.php";

$login =  $_POST['login'];
$senha =  $_POST['senha'];
if(!$login || !$senha)
{
    die( "Faltam dados usuário e/ou senha!");
}

$sql = "UPDATE tabela SET  senha =  md5('$senha') WHERE login = '$login'";
        
$resultado = mysqli_query($con,$sql) or die(mysqli_error($con));

if($resultado)
{	
?>
<div class="alert alert-success" role="alert">
    Senha alterada!!!
</div> 
<?php 
}
else
{ 
?>
<div class="alert alert-danger" role="alert">
    Problemas na alteração!
</div>
<?php
 }
?>