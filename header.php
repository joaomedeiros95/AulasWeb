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
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/webeasy.js"></script>
</head>