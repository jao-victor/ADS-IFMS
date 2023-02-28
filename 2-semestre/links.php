<?php

$hlinks = array (
  array ("url" => "https://www.w3schools.com/", "rotulo" => "W3Schools"),
  array ("url" => "https://getbootstrap.com/", "rotulo" => "Bootstrap"),
  array ("url" => "https://www.maujor.com/", "rotulo" => "Maujor"),
  array ("url" => "https://www.php.net/", "rotulo" => "PHP")
);

  echo "<ul>";

  foreach ($hlinks as $link) {
    echo "<li>";

    echo "<a href='{$link['url']}'>" . $link['rotulo'] ."</a>";


    echo "</li>";
  }

  echo "</ul>";

?>
