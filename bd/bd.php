<?php

	class bd 
	{
		public static function conexaobanco() 
		{
			try
			{
				$usuario = 'sa';
				$password = 'unifai2022';
				$host = 'localhost';
				$table = 'usuarios';
				$driver = 'sqlsrv';


				$pdo = new PDO("$driver:Server=$host;Database=$table",$usuario,$password); // fizemos conexao

				return $pdo;
			}
			catch(PDOException $e) {
				echo 'Erro ao Se Conectar com o Banco ' , $e;
			}
		}
	} // bd
;