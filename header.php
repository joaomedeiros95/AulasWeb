<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
	if($title != '')
		$cabecalho = $title . ' - WebEasy';
	else
		$cabecalho = 'WebEasy';
  ?>
  <title><?php echo htmlspecialchars($cabecalho, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<center>
		<h1>WebEasy</h1>
		<h2><?php echo $title; ?></h2>
		<div id="menu">
			<p>
				<i><a href="index.php">Página Principal</a>	
				<a href="about.php">Quem Somos?</a>	
				<a href="conteudo.php">O que oferecemos?</a>
				<a href="cadastro.php">Cadastro</a>
				<a href="login.php">Login</a>
				<a href="help_desk.php">Help Desk</a></i>
			</p>
		</div>
	</center>


