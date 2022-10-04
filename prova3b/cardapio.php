<?php include("cabecalho.php");
      include("conecta.php"); 
    session_start();
    
?>
<table class="table table-striped table-bordered">
<th><td>ID</td><td>Produto</td><td>
<?php
$resultado = $conexao->query( "select * from produtos");

while($produto = mysqli_fetch_assoc($resultado)) {

?>
<tr>
    <form>
        <td><input readonly name="id" value ="<?= $produto['id'] ?>"></td>
        <td><input name="nome" value ="<?= $produto['nome'] ?>"></td>
        <td><input name="preco" value ="<?= $produto['preco'] ?>"></td>
        <td>
            <button type = "submit" formaction="altera-produto.php">alterar</a>
        </td>
    </form>
</tr>
<?php
}
?>
</table>
<a href="sair.php">Sair</a>
<?php include("rodape.php"); ?>