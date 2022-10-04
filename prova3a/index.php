<?php include "cabecalho.php";
?>
	<body>
		<div id="login-box" class="col-md-6">
			<h3 class="text-center text-white pt-5">Acesse o seu perfil</h3>
			<form method="post"  class="form" action="perfil.php">
				<div class="form-group">
					<label class="text-info">Login</label>
					<input type="text" name="login" class="form-control" />
				</div>
				<div class="form-group">
					<label class="text-info">Senha</label>
					<input  type="text" name="senha" class="form-control" />
				</div>
				<div class="form-group">
					<input class="btn btn-info btn-md" type="submit" value="Entrar"/>
				</div>
			</form>
		</div>	
	</body>
</html>
<?php include "rodape.php";
?>