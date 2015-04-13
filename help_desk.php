<!DOCTYPE html>
<html lang="en">
<?php
	$title = 'Help Desk';
	include_once('header.php');
?>
<body>
	<?php 
		include_once('menu.php'); 
		echo '<div class="container">';
		if($_SERVER["REQUEST_METHOD"] != "POST") {
	?>
	<form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<p>Primeiro nome: <input type="text" name="firstname" autofocus></p>
		<p>Sobrenome: <input type="text" name="lastname"></p>
		<p>Endereço completo: <input type="text" name="endereco" size="100"></p>
		<p>CPF (somente números): <input type="text" name="cpf" maxlength="11" onkeyup="formatarInteiros(this)"></p>
		<p>Sexo: <input type="radio" name="sex" value="homem" checked>Homem <input type="radio" name="sex" value="mulher">Mulher</p>
		<p>Aniversário (dd/mm/aaaa): <input type="text" name="bday" maxlength="10"></p>
		<p>Seu website: <input type="text" name="homepage"> </p>
		<p>Email: <input type="email" name="email"></p>
		<p>Senha: <input type="password" name="psw"></p>
		<p>Repita a Senha: <input type="password" name="psw1"></p>

		<p><input type="submit" value="Enviar"> <input type="reset" value="Reiniciar"></p>
	</form>
	<br />

	<?php
		} else {
			if(isset($_POST['firstname']) && $_POST['firstname'] != "") {
				echo $_POST['firstname'];
			} else {
				echo "Nome é requerido";
			}

			if(isset($_POST['lastname']) && $_POST['lastname'] != "") {
				echo "<br/ >" . $_POST['lastname'];
			} else {
				echo "<br />Sobrenome é requerido";
			}

			if(isset($_POST['endereco']) && $_POST['endereco'] != "") {
				echo "<br/ >" . $_POST['endereco'];
			} else {
				echo "<br />Endereço é requerido";
			}

			if(isset($_POST['cpf']) && $_POST['cpf'] != "") {
				echo "<br/ >" . $_POST['cpf'];
			} else {
				echo "<br />CPF é requerido";
			}

			if(isset($_POST['sex']) && $_POST['sex'] != "") {
				echo "<br/ >" . $_POST['sex'];
			} else {
				echo "<br />Sexo é requerido";
			}

			echo "<br/ >" . $_POST['bday'];
			echo "<br/ >" . $_POST['homepage'];

			if(isset($_POST['email']) && $_POST['email'] != "") {
				echo "<br/ >" . $_POST['email'];
			} else {
				echo "<br />Email é requerido";
			}

			if(!isset($_POST['psw']) && $_POST['psw'] != "") 
				echo "<br />Senha é requerida";

			if(!isset($_POST['psw1']) && $_POST['psw1'] != "") 
				echo "<br />Repita a Senha é requerido";

			if($_POST['psw1'] != $_POST['psw']) 
				echo "<br />As senhas não conferem";			
			
		}
		echo '</div>';
	?>
</body>
<?php include_once('footer.php') ?>
</html>
