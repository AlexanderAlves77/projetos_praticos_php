<?php

  class Pessoa {

    function falar() {
      echo "Olá, eu sou um objeto! <br>";
    }

    function somar($x, $y) {
      echo $x + $y . "<br>";
    }

  }

  $alexander = new Pessoa;

  $alexander->falar();
  $alexander->falar();

  $kelvin = new Pessoa;

  $kelvin->falar();

  $alexander->somar(2, 2);

  $kelvin->somar(10, 12);