<?php
	function verifyLogin($login, $senha) {
		$myfile = fopen("include/usuarios.txt", "r") or die("Unable to open file!");
		while(!feof($myfile)) {
			$linha = explode(" -- ", fgets($myfile));
			if(trim($linha[0]) === $login and trim($linha[1]) === md5($senha)) {
				fclose($myfile);
				return true;
			}
		}
		fclose($myfile);
		return false;
	}

	function validarCadastro($login, $senha, $senha1) {
		$erros = array();
		if($login == "")
			$erros[] = "Login é obrigatório.";
		if($senha == "")
			$erros[] = "Senha é obrigatório";
		if($senha1 == "")
			$erros[] = "Repita a Senha é obrigatório.";
		if(!ctype_alnum ( $login ))
			$erros[] = "Login deve conter somente caracteres alfanúmericos.";
		if($senha != $senha1)
			$erros[] = "As senhas não são iguais.";

		$myfile = fopen("include/usuarios.txt", "r") or die("Unable to open file!");
		while(!feof($myfile)) {
			$linha = explode(" -- ", fgets($myfile));
			if($linha[0] === $login) {
				$erros[] = "Já existe uma pessoa cadastrada com esse login!";
				break;
			}
		}

		return $erros;
	}

	function validarLogin($login, $senha) {
		$erros = array();
		if($login == "")
			$erros[] = "Login é obrigatório.";
		if($senha == "")
			$erros[] = "Senha é obrigatório";
		if(!ctype_alnum ( $login ))
			$erros[] = "Login deve conter somente caracteres alfanúmericos.";

		return $erros;
	}

	function cadastrar($login, $senha) {
		$myfile = fopen("include/usuarios.txt", "a") or die("Unable to open file!");
		fwrite($myfile, $login . " -- " . md5($senha) . "\n");
		fclose($myfile);
	}


?>