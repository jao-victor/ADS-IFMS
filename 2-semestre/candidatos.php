<?php

  $candidatos = array ("Jerônino" , "Tonico", "Raimundo", "Frederico");

  foreach ($candidatos as $candidato) {

      echo "<h1>" . $candidato . "</h1>";

  }

  echo "<hr>";

  foreach ($candidatos as $key => $value) {

      echo "<h1>" . $key . "-" . $value . "</h1>";

  }



?>
