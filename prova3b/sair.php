<?php include("cabecalho.php"); 
     session_start();
?>
     <div class="alert-success">
          <h2>Sessão encerrada!</h2>
          <p>Esta sessão iniciou <?php echo  date(" d/m/y h:m:s",$_SESSION["horalogin"]);?>  e terminou <?php echo date(" d/m/y h:m:s",time());?>
</p>
     </div>
<?php include("rodape.php"); ?>
