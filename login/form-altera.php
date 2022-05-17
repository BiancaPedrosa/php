<?php
include "cabecalho.php";

$login =  $_POST['login'];
$senha =  $_POST['senha'];
if(!$login || !$senha)
{
    die( "Faltam dados usuário e/ou senha!");
}
@ $con = mysqli_connect('localhost', 'root', 'root');
if (!$con)
{
     die("Falha na conexão ao BD");
}
mysqli_select_db($con,'banco');
$sql = "SELECT  login, senha
            FROM tabela
                WHERE login = '$login' AND senha=md5('$senha')";
        
$resultado = mysqli_query($con,$sql) or die("Erro no banco de dados!");
$num_resultados = mysqli_num_rows($resultado);
if($num_resultados==1)
{	
?>
<form method="post"  class="form">
     <div class="form-group">
          <label class="text-info">Login</label>
          <input type="email" name="login" size="70" maxlength="70" class="form-control" value=<?php echo $login; ?> readonly />
     </div>
     <div class="form-group">
          <label class="text-info">Nova Senha</label>
          <input class="form-control" type="password" name="senha" maxlength="50" />
     </div>
     <div class="form-group"></div>
          <input class="btn btn-info btn-md" type="submit" value="Alterar" formaction="altera.php"/>
     </div>
</form>
<?php 
}
?>