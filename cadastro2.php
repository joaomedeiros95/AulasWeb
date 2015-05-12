<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Cadastro de usuários';
	include_once('header.php');
?>
<body>
	<?php include_once('menu.php'); ?>
	<div class ="container">
		<form name="form" action="obrigado.php" method="get">
			<p>Primeiro nome: <input type="text" name="firstname" autofocus></p>
			<p>Sobrenome: <input type="text" name="lastname"></p>
			<p>Endereço completo: <input type="text" name="endereco" size="100"></p>
			<p>CPF (somente números): <input type="text" name="cpf" maxlength="11"></p>
			<p>Sexo: <input type="radio" name="sex" value="homem" checked>Homem <input type="radio" name="sex" value="mulher">Mulher</p>
			<p>Aniversário (dd/mm/aaaa): <input type="text" name="bday" maxlength="10"></p>
			<p>Seu website: <input type="url" name="homepage"> </p>
			<p>Email: <input type="email" name="email"></p>
			<p>Senha: <input type="password" name="psw"></p>
			<p>Repita a Senha: <input type="password" name="psw1"></p>

			<p><input type="submit" value="Enviar" onclick="validarFormulario()"> <input type="reset" value="Reiniciar"></p>
		</form>
	</div>
</body>
<?php include_once('footer.php') ?>
</html>
