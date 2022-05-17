<?php
include "cabecalho.php";
include "conecta.php";

$login =  $_POST['login'];
$senha =  $_POST['senha'];

$sql = "SELECT  login, senha FROM tabela
        WHERE login = '$login' AND senha=md5('$senha')";
        
$resultado = mysqli_query($conexao,$sql) or die("Erro no banco de dados!");
$num_resultados = mysqli_num_rows($resultado);
if($num_resultados==1)
{	
?>
<div id="login">
     <h3 class="text-center text-white pt-5">Login Boostrap</h3>
     <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
					<form action= "altera.php"method="post"  class="form">
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
                    </div>
               </div>
            </div>
     </div>
</div>
<?php 
}
?>