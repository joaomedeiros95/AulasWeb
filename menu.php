<div id="cabecalho">
	<h1>WebEasy</h1>
	<h2><?php echo $title; ?></h2>
	<div id="menu">
		<?php 
			echo '<ul>
					<li><i><a href=' . getPrincipal() . 'index.php>Página Principal</a></li>
					<li><a href=' . getPrincipal() . 'about.php>Quem Somos?</a></li>
					<li><a href=' . getPrincipal() . 'conteudo.php>O que oferecemos?</a></li>
					<li><a href=' . getPrincipal() . 'cadastro.php>Cadastro</a></li>
					<li><a href=' . getPrincipal() . 'login.php>Login</a></li>
					<li><a href=' . getPrincipal() . 'help_desk.php>Help Desk</a></i></li>
					</ul>';
		?>
	</div>
</div>