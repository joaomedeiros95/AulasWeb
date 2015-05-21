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
		<ul class="paginaPrincipal">
			<li>
				<a href="#" id="o-que-e-web" class="post" onclick="mostrarPost(this)">
					<img src="imgs/unhide.png" class="HiddedUnHidded"/> O que é Web?
				</a>
				<div id="o-que-e-web-p" class="postHidded">
					<?php include_once('posts/o-que-e-web.php'); ?>
				</div>
			</li>
			<li>
				<a href="#" id="tecnologias" class="post" onclick="mostrarPost(this)">
                    <img src="imgs/unhide.png" class="HiddedUnHidded"/> Tecnologias
				</a>
				<div id="tecnologias-p" class="postHidded">
					<?php include_once('posts/tecnologias.php'); ?>
				</div>
			</li>
			<li>
				<a href="#" id="metodos" class="post" onclick="mostrarPost(this)">
                    <img src="imgs/unhide.png" class="HiddedUnHidded"/> Métodos
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
