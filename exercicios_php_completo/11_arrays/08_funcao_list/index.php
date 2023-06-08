<?php

  $pessoa = ["Alexander", 46, "Programador", "castanhos"];

  print_r($pessoa);
  echo "<br>";

  list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

  echo "$nome <br>";
  echo "$idade <br>";
  echo "$profissao <br>";
  echo "$corDosOlhos <br>";