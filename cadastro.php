<?php 
	$title = 'Cadastro';
	include_once('header.php');
?>

	<?php
		include_once 'include/functions.php';
		if($_SERVER["REQUEST_METHOD"] != "POST") {
	?>
		<form name="form" action="" method="POST">
			<p>Login: <input type="text" name="login" autofocus></p>
			<p>Senha: <input type="password" name="senha"></p>
			<p>Repita a Senha: <input type="password" name="senha1"></p>

			<p><input type="submit" value="Enviar"></p>
		</form>
	<?php
		} else {
			$login = $_POST["login"];
			$senha = $_POST["senha"];
			$senha1 = $_POST["senha1"];

			$errosCadastro = validarCadastro($login, $senha, $senha1);

			if(count($errosCadastro) > 0) {
				echo "Foram encontrados erros no seu cadastro. <br>";
				for($x = 0; $x < count($errosCadastro); $x++) {
				    echo $errosCadastro[$x];
				    echo "<br>";
				}
			} else {
				cadastrar($login, $senha);
				echo "Usuário cadastrado com sucesso.";
			}
		}
	?>


<?php include_once('footer.php') ?>
