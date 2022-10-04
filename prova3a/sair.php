<?php include("cabecalho.php"); 
     session_start();
?>
     <div class="alert-success">
          <h2>Sessão encerrada!</h2>
          <p>Foi um prazer atender você  <?php echo $_SESSION["nome"];?></p>
     </div>
<?php include("rodape.php"); ?>
