<?php 
	/*Arquivo de configuração principal do site, aqui serão colocadas variáveis globais e métodos para acessá-las*/

	define('WEBSITE', 'http://www.joaoemedeiros.com/');
	define('BASE', dirname(__FILE__));
	define('INCLUDE', BASE . '/functions');
	define('IMGS', BASE . '/imgs');
	define('CSS', BASE . '/css');
	define('JS', BASE . '/js');
	define('JQUERY', JS . "/jquery-2.1.3.min.js");
	define('JSAULAS', JS . "/webeasy.js");
	define('CSSPRINCIPAL', CSS . "/principal.css");

	/* Função para retornar o caminho de um JS ou CSS ou qualquer outro recurso */
	function getResource($string) {
		return WEBSITE . str_replace('/var/www/html/', '', $string);
	}

	function getPrincipal() {
		return WEBSITE . str_replace('/var/www/html/', '', BASE . '/');
	}

?>