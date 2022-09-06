<h1> Seleções </h1>



<table class="table">


    <thead>
      <tr>
        <th>Seleção</th>
        <th>Grupo</th>
        <th>Títulos</th>
      </tr>
    </thead>

    <tbody>

<?php

	foreach($selecoes as $times){

		echo "<tr>";
        	echo	"<td>{$times['nome']}</td>";
        	echo	"<td>{$times['grupo']}</td>";
        	echo	"<td>{$times['titulos']}</td>";
        	echo "</tr>";

	};
?>

    </tbody>

  </table>
