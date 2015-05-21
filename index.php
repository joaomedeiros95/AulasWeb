<!DOCTYPE html>
<html lang="en">
<?php
	$title = ''; 
	include_once('header.php'); 
?>
<body>
	<?php include_once('menu.php'); ?>
	<div class="container">
		<h2>Artigos</h2>
		<ul>
			<li>
				<a href="#" id="o-que-e-web" onclick="mostrarPost(this)">
					O que é Web? (Aqui um exemplo de como será a navegação nos posts)
				</a>
				<div id="o-que-e-web-p" class="postHidded">
					<?php include_once('posts/o-que-e-web.php'); ?>
				</div>
			</li>
			<li>
				<a href="#" id="tecnologias" onclick="mostrarPost(this)">
					Tecnologias
				</a>
				<div id="tecnologias-p" class="postHidded">
					<?php include_once('posts/tecnologias.php'); ?>
				</div>
			</li>
			<li>
				<a href="#" id="metodos" onclick="mostrarPost(this)">
					Métodos
				</a>
				<div id="metodos-p" class="postHidded">
					<?php include_once('posts/metodos.php'); ?>
				</div>
			</li>
		</ul>
	</div>
</body>
<?php include_once('footer.php') ?>
</html>
