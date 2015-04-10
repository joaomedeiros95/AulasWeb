<!DOCTYPE html>
<html lang="en">
<?php
	$title = ''; 
	include_once('header.php'); 
	include_once 'include/functions.php';
?>
<body>
	<?php 
		include_once('menu.php');
		echo '<div class="container">';
		if($_SERVER["REQUEST_METHOD"] != "POST") {
	?>

			<form name="form" action="" method="POST">
				<p>Login: <input type="text" name="login" autofocus></p>
				<p>Senha: <input type="password" name="senha"></p>

				<p><input type="submit" value="Enviar"></p>
			</form>
		<?php
			} else {
				$login = $_POST["login"];
				$senha = $_POST["senha"];

				$errosLogin = validarLogin($login, $senha);
				if(count($errosLogin) > 0) {
					for($x = 0; $x < count($errosLogin); $x++) {
						echo $errosLogin[$x];
						echo "<br>";
					}
				} else {
					$loginCorreto = verifyLogin($login, $senha);

					if($loginCorreto)
						echo "Bem vindo ao WebEasy.";
					else
						echo "Senha ou Login incorreto.";
				}
			}
		?>
	</div>
</body>
<?php include_once('footer.php') ?>
</html>
