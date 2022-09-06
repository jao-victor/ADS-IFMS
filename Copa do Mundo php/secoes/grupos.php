<h1>Grupos</h1>


<?php
	foreach($grupos as $siglas){

		echo "Grupo $siglas";

		echo "<ul class = 'list-group'>";
		foreach($selecoes as $times){
		
			if($times["grupo"] == $siglas){
				echo "<li class = class='list-group-item'> {$times['nome']}</li>";
			}


		}
		echo "</ul>";
		echo "<br>";
	}
?>

