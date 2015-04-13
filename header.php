<head>
	<?php 
	include_once 'config.php';
	if($title != '')
		$cabecalho = $title . ' - WebEasy';
	else
		$cabecalho = 'WebEasy';
	?>
	<title><?php echo htmlspecialchars($cabecalho, ENT_QUOTES, 'UTF-8'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		echo '<script src= ' . getResource(JQUERY) . '></script>';
		echo '<script src= ' . getResource(JSAULAS) . '></script>';
		echo '<link type="text/css" rel="stylesheet" href="' . getResource(CSSPRINCIPAL) . '">';
	?>

	<!-- Favicon do site -->
	<link rel="shortcut icon" href= <?php echo getResource(BASE) . '/favicon.ico' ?> />
	<link rel="icon" href= <?php echo getResource(BASE) . '/favicon.ico' ?> type="image/x-icon" />
	
</head>