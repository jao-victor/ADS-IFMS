<?php

	$secao = isset($_GET["secao"])? $_GET["secao"] . ".php": "home.php";

	if(file_exists("secoes/" . $secao)){
		include "secoes/" . $secao;
	}

?>
