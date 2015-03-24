<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
	if($title != '')
		$title = $title . ' - WebEasy';
	else
		$title = 'WebEasy';
  ?>
  <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<center>
		<h1>WebEasy</h1>
		<h2><?php echo $title; ?></h2>
		<div id="menu">
			<p>
				<i><a href="index.html">Página Principal</a>	
				<a href="about.html">Quem Somos?</a>	
				<a href="conteudo.html">O que oferecemos?</a>
				<a href="cadastro.php">Cadastro</a></i>
			</p>
		</div>
	</center>


