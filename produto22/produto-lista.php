<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php"); 

    if(array_key_exists("status", $_GET) )
        echo "<p class='alert-success'>Produto ".$_GET[status]." com sucesso.</p>";
?>
<table class="table table-striped table-bordered">

    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) :
    ?>
    <tr>
        <form>
            <td><input readonly name="id" value ="<?= $produto['id'] ?>"></td>
            <td><input name="nome" value ="<?= $produto['nome'] ?>"></td>
            <td><input name="preco" value ="<?= $produto['preco'] ?>"></td>
            <td>
                <a href="remove-produto.php?id=<?=$produto['id']?>" class="text-danger">remover</a>
            </td>
            <td>
                <button type = "submit" formaction="altera-produto.php">alterar</a>
            </td>
        </form>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
