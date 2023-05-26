<?php

  $nomes = ["Alexander", "Kelvin", "Sara", "Joaquim"];

  $a = 10;

  foreach($nomes as $nome) {
    echo "O nome do índice atual é $nome <br>";
    if($nome == "Alexander") {
      echo "Opa $a <br>";
    }
  }