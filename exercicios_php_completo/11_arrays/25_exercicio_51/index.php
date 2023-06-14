<?php

  $ranking = [
    "Alexander" => 200,
    "Kelvin" => 54,
    "Sara" => 444,
    "Patrick" => 239,
    "Joaquim" => 123
  ];

  arsort($ranking);

?>

<h1>Ranking:</h1>
<ol>
  <?php foreach($ranking as $pessoa => $pontuacao): ?>
    <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
  <?php endforeach; ?>
</ol>