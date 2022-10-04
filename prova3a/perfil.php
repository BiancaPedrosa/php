<?php
    include "cabecalho.php";
    include "conecta.php";
    session_start();

    $login =  $_POST['login'];
    $senha =  $_POST['senha'];

    $sql = "select * from clientes  where id='$login' and senha = '$senha'";
    $resultado = $conexao->query($sql);
    if ($resultado->num_rows==0) die("login incorreto");
    else{
        $cliente = $resultado->fetch_assoc();
        $_SESSION['nome']=$cliente["nome"];
        $_SESSION['id']=$cliente["id"];
    }
?>
<form>
    <p>login: <?= $cliente['id'] ?></p>
    <p>nome: <?= $cliente['nome'] ?></p>
    <p>telefone: <?= $cliente['telefone'] ?></p>
    <td>
        <button type = "submit" formaction="deleta-cliente.php">apagar perfil</a>
    </td>
</form>