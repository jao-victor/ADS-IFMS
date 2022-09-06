<nav class="navbar navbar-expand-sm bg-light navbar-light">

  <ul class="navbar-nav">

	<?php

		include ("secoes/variaveis.php");

		foreach($secoes as  $assecoes){
    			echo "<li class='nav-item active'> <a class='nav-link' href='index.php?secao={$assecoes['secao']}'>{$assecoes['descricao']}</a> </li>";
		}
 	?>
</nav>
