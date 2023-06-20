<?php

  class Humano {

    public function falar() {
      echo "Olá";
    }

  }

  $matheus = new Humano;

  $teste = 10;

  if(is_object($kelvin)) {
    echo "É um objeto <br>";
  } else {
    echo "Não é um objeto <br>";
  }

  if(is_object($teste)) {
    echo "É um objeto <br>";
  } else {
    echo "Não é um objeto <br>";
  }

  echo get_class($kelvin) . "<br>";

  if(method_exists($kelvin, "falar")) {
    echo "Método existe <br>";
  } else {
    echo "Método não existe <br>";
  }

  if(method_exists($kelvin, "asd")) {
    echo "Método existe <br>";
  } else {
    echo "Método não existe <br>";
  }