<?php

  $time = array(
    array('nome' => "Ganso", 'time' => "Flu", "posicao" => "At" ),
    array('nome' => "Tony", 'time' => "Guarani", "posicao" => "Meia" )

  );

  echo "<table>";

  foreach ($time as $jogador) {
    echo "<tr>";
    echo "<td style='border: 1px solid'>" . $jogador["nome"] . "</td>";
    echo "<td style='border: 1px solid'>" . $jogador["time"] . "</td>";
    echo "<td style='border: 1px solid'>" . $jogador["posicao"] . "</td>";
    echo "</tr>";

  }

  echo "</table>";

?>
