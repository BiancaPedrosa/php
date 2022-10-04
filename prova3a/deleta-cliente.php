<?php include("cabecalho.php");
      include("conecta.php");
      session_start();
      $query = "delete from clientes where id = '". $_SESSION['id']. "'";
      if ($conexao->query($query)==true)
            echo "<p>cliente excluido</p>";
      else 
            echo "<p>cliente nao excluído</p>";

      echo "<a href='sair.php'>Sair</a>";

?>
