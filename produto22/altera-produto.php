<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php");

$id = $_GET['id'];
$nome=$_GET['nome'];
$preco=$_GET['preco'];

alteraProduto($conexao, $id, $nome, $preco);

header("Location: produto-lista.php?status=alterado");

?>
