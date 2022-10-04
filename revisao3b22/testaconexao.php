<?php
	include "cabecalho.php";
?>
	 <form id="form" action="registraConexao.php" method="post">
		<h2>Teste sua conexão MySQL-PHP</h2>
		<div  class="form-group">
			<label for="servidor">Servidor</label>
			<input type="text" class="form-control" name="servidor" value="localhost">
		</div>
		<div class="form-group">
			<label for="usuario">Usuário</label>
			<input type="text" class="form-control" name="usuario" value="root">
		</div>
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="text" class="form-control" name="senha" value="ifsp">
		</div>
		<div class="form-group">
			<label for="banco">Banco de Dados</label>
			<input type="text" class="form-control" name="bd" value="bd_aluno">
		</div>
		<input class="btn btn-lg btn-block btn-primary" type="submit" id="testeButton" value = "TESTAR">
		
	</form>
</div>
</div>
</body>
</html>