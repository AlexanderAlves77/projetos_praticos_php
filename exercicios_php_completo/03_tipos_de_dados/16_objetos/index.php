<?php

  class Pessoa {

    function falar() {
      echo "Olá pessoal!";
    }

  }

  $alexander = new Pessoa();

  $alexander->nome = "Alexander";

  echo $alexander->nome;

  echo "<br>";

  $alexander->falar();
