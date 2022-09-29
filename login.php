<?php
	require_once("bd/bd.php");

	global $login_aux;
	global $senha_aux;
	$pdo = bd::conexaobanco();

	$login = isset($_POST['email']) ? $_POST['email'] : '';
	$senha = isset($_POST['password']) ? $_POST['password'] : '';


	
	//$select = "select * from usuarios where login_usuario = " . "'$login'" . ' and senha = ' . "'$senha'";
	$select = "select * from users where usuario = " . "'$login'" . ' and senha = ' . "'$senha'";

	
	if($login != '' and $senha != '') {

		$conteudo = $pdo->prepare($select);
		$conteudo->execute();
		$result = $conteudo->fetchall();

		foreach ($result as $key => $dados) {
			$login_aux = $dados['usuario'];
			$senha_aux = $dados['senha'];
		}

			if($login != $login_aux ) {
				$login_invalido = '<p style="color: red; margin-left: 50px">Erro ao Logar Email Invalido!!!...</p>';
				if($senha != $senha_aux) {
					$senha_invalida = '<p style="color: red; margin-left: 50px">Erro ao Logar Senha Invalida!!!...</p>';
					require_once("index.php");
				}
				require_once("index.php");
			}
			else 
			{	
				session_start();			
				echo 'Logado Com Sucesso';
			}		
		
	}		
		
	  
	
		
							
?>