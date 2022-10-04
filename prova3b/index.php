<?php include "cabecalho.php";
?>
	<body>
			<h3 >Acesse o cardápio</h3>
			<form method="post"  class="form" action="autentica.php">
				
					<label class="text-info">Login</label>
					<input type="text" name="login"/><br>
			
			
					<label class="text-info">Senha</label>
					<input  type="text" name="senha" /><br>
			
		
					<input  type="submit" value="Entrar"/>
			
			</form>
		
	</body>
</html>
<?php include "rodape.php";
?>