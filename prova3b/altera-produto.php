<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php");

$id = $_GET['id'];
$nome=$_GET['nome'];
$preco=$_GET['preco'];

$query = "update produtos set nome='$nome', preco='$preco' where id = $id";
if ($conexao->query($query)){
      header("Location: cardapio.php");
}
else{
      die($conexao->connect_error);
}
?>
