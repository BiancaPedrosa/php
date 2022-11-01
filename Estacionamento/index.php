<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Estacione Aqui</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://img.icons8.com/plasticine/50/000000/car--v2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
	session_start();
	?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Login
					</span>
				</div>

				<form method="POST" action="PHP\login.php" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Nome de Usuário: </span>
						<input class="input100" type="text" for="NomeUsuario" name="NomeUsuario" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Senha: </span>
						<input class="input100" type="password" name="Senha" placeholder="123">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Lembre de mim
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Esqueci minha senha
							</a>
						</div>
						
					</div>
					<?php 
					//Recuperando o valor da variável global, os erro de login.
					if(isset($_SESSION['error_autenticacao'])){
						echo $_SESSION['error_autenticacao'];
					
						unset($_SESSION['error_autenticacao']);
						
					}?>
					
					
					<div class="container-login100-form-btn">
						
						<button type="submit" name="submit" class="login100-form-btn">
							Entrar
						</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>