<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'O que é Web?';
	include_once('../header.php');
?>
<body>
	<?php include_once('../menu.php'); ?>
	<div class="container">
		<div class="menupost">
			<ol>
				<li><a href="#historia">História</a></li>
				<li><a href="#linguagens">Tecnologias para programação web</a></li>
			</ol>
		</div>
		<center><img src="../imgs/web.png" width="200px" height="200px" /></center>
		<p>A World Wide Web (termo inglês que, em português, se traduz literalmente por "Teia mundial"), também conhecida como Web ou WWW, é um sistema de documentos em hipermídia (hipermédia) que são interligados e executados na Internet.</p>

		<p>Os documentos podem estar na forma de vídeos, sons, hipertextos e figuras. Para consultar a informação, pode-se usar um programa de computador chamado navegador para descarregar informações (chamadas "documentos" ou "páginas") de servidores web (ou "sítios") e mostrá-los na tela do usuário (ecrã do utilizador). O usuário (utilizador) pode então seguir as hiperligações na página para outros documentos ou mesmo enviar informações de volta para o servidor para interagir com ele. O ato de seguir hiperligações é, comumente, chamado "navegar" ou "surfar" na Web.</p>

		<a name="historia"><h3>História</h3></a>
		<p>As ideias por trás da Web podem ser identificadas ainda em 1980, no CERN- Organização Europeia para a Investigação Nuclear (Suíça1 ), quando Tim Berners-Lee2 construiu o ENQUIRE. Ainda que diferente da Web atualmente, o projeto continha algumas das mesmas ideias primordiais, e também algumas ideias da Web semântica. Seu intento original do sistema foi tornar mais fácil o compartilhamento de documentos de pesquisas entre os colegas.</p>

		<p>A 21 de março de 1989, Tim Berners-Lee escreveu uma proposta de gerenciamento de informação3 , que referenciava o ENQUIRE e descrevia um sistema de informação mais elaborado. Com a ajuda de Robert Cailliau, ele publicou uma proposta4 mais formal para a World Wide Web no final de 1990.</p>

		<a name="linguagens"><h3>Tecnologias para programação web</h3></a>
		<table style="width:100%">
			<tr>
				<td>Front-end</td>
				<td>Back-end</td>
				<td>Database</td>
			</tr>
			<tr>
				<td>JavaScript</td>
				<td>C</td>
				<td>MySQL</td>
			</tr>
			<tr>
				<td>Flash</td>
				<td>C++</td>
				<td>PostgreSQL</td>
			</tr>
			<tr>
				<td>HTML5</td>
				<td>Java</td>
				<td>MariaDB</td>
			</tr>
			<tr>
				<td></td>
				<td>Python</td>
				<td>Microsoft SQL Server</td>
			</tr>
			<tr>
				<td></td>
				<td>Go</td>
				<td>Oracle Database</td>
			</tr>
			<tr>
				<td></td>
				<td>PHP</td>
				<td>BigTable</td>
			</tr>
			<tr>
				<td></td>
				<td>Perl</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td>Ruby on Rails</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td>ASP.NET</td>
				<td></td>
			</tr>
		</table>
	</div>
</body>
<?php include_once('../footer.php') ?>
</html>
