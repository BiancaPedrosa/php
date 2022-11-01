<?php
session_start();
$UsuarioAdmin= $_POST['NomeUsuario'];
$Senha = $_POST['Senha'];


//conectando ao mysql e ao bd
include("conexão.php");

mysqli_select_db($db,'estacionamento');
$sql="select NomeUsuario, Senha from tabela_admin where NomeUsuario = '$UsuarioAdmin' AND Senha = '$Senha'";
$result= mysqli_query($db,$sql) or die ("Erro no banco de dados");
$num_results = mysqli_num_rows($result);

if($num_results>0){
   

include('página_de_entrada_admin.php');

}
else{
    $_SESSION["error_autenticacao"]="<div><p style=' font-family: 'Trirong', serif;color: #FF6356;'><img src='https://img.icons8.com/plasticine/50/000000/error.png' style='vertical-align: middle;'/> Nome de usuário ou senha incorreta!</p></div>";  
    header('location:../index.php');
      
}


?>