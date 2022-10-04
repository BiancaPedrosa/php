<?php
include "cabecalho.php";
include "conecta.php";

$login =  $_GET['login'];
	
?>
<form method="post"  class="form">
     <div class="form-group">
          <label >Login</label>
          <input type="text" name="login" size="70" maxlength="70" class="form-control" value=<?php echo $login; ?> readonly />
     </div>
     <div class="form-group">
          <label >Nova Senha</label>
          <input class="form-control" type="password" name="senha" maxlength="50" />
     </div>
     <div class="form-group"></div>
          <input class="btn btn-info btn-md" type="submit" value="Alterar" formaction="altera.php"/>
     </div>
</form>
