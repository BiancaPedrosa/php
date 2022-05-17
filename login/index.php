﻿<?php include "cabecalho.php";
?>
	<body>
	<div id="login">
        <h3 class="text-center text-white pt-5">Login Boostrap</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
					<form method="post"  class="form">
						<div class="form-group">
							<label class="text-info">Login</label>
							<input type="email" name="login" size="70" maxlength="70" class="form-control" />
						</div>
						<div class="form-group">
							<label class="text-info">Senha</label>
							<input class="form-control" type="password" name="senha" maxlength="50" />
						</div>
						<div class="form-group">
							<input class="btn btn-info btn-md" type="submit" value="Entrar" formaction="autentica.php"/>
							<input class="btn btn-info btn-md" type="submit" value="Cadastrar" formaction="cadastra.php"/>
							<input class="btn btn-info btn-md" type="submit" value="Alterar" formaction="form-altera.php"/>
							<input class="btn btn-info btn-md" type="submit" value="Excluir" formaction="exclui.php"/>

						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>