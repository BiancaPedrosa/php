<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php");

$nome = $_GET["nome"];
$preco = $_GET["preco"];

if(insereProduto($conexao, $nome, $preco))  
    header("Location: produto-lista.php?status=inserido");
else    
    echo mysqli_error($conexao);

include("rodape.php"); 
?>