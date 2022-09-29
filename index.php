<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body>

			<?php
				if(isset($_POST['email']) == '') {
					$value_Email = '';
				}
				else {
					$value_Email = isset($_POST['email']) ? $_POST['email'] : '';
				}


				if(isset($_POST['password']) == '') {
					$value_password = '';
				}
				else {
					$value_password = isset($_POST['password']) ? $_POST['password'] : '';
				}
			?>

			<div class="conteudos">
				<div class="conteudo1">
					<img src="images/bg-01.jpg">
				</div>
				<div class="conteudo2">
					<div class="form">
						<div class="login">Login to Continue</div>

						<form action="login.php" method="post">

							<input type="text" name="email" id="email" placeholder = "email" value = "<?php echo $value_Email ?>">

							<div class="error" style="color: red; margin-top: 0; margin-left: 50px; width: ; margin-top: 5px; margin-bottom: 10px;">
								Erro ao Se Logar, Campo Email Obrigatorio...!!!
								
							</div>

							
								<?php 
									if(isset($login_invalido)) {
										echo $login_invalido;							
									}
								?>

							<input type="password" name="password" id="password" placeholder= "password" style="display: flex; justify-content: center;margin-left: 50px;margin-bottom: 10px;width: 450px;height: 80px;border: 1px solid #ccc;border-radius: 8px;padding-left: 20px;	font-size: 15px; background-color: #ffffff;" value = "<?php echo $value_password ?>"/>

							<div class="errorsenha" style=" display: none; color: red; margin-top: 0; margin-left: 50px; width: ; margin-top: 5px; margin-bottom: 10px; background-color: #ffffff;">
								Erro ao Se Logar, Campo Senha Obrigatorio...!!!
							</div>

								<?php 
									if(isset($senha_invalida)) {
										echo $senha_invalida;							
									}
								?>

							<div class="Remeber">	

								<div class="input">
									<input type ="checkbox" id="checkout" name="checkout">
							 		Remeber Me fagout	
								</div>
								
								<div class="password">
									Fogot Password?
								</div>

							</div>

							<div class="error" style="color: red; margin-top: 0; margin-left: 50px; width: ; margin-top: 5px;">
								<?php
								if(isset($error)) {
									echo $error;
								}
								?>	
							</div>
							<input type="submit" name="login" value="login" id="login">
						</form>
						<script type="text/javascript" src="js/validacao.js"></script> 
					</div>
				</div>
			</div>
	</body>
</html>