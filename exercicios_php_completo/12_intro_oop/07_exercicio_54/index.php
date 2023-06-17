<?php

  class Pessoa {

    public $nome;
    public $idade;

    function andar($m) {
      echo "A pessoa andou $m metros <br>";
    }

  }

  $sara = new Pessoa;

  $sara->nome = "Sara";
  $sara->idade = 9;

  echo "O nome dele é $sara->nome e tem $sara->idade anos <br>";

  $sara->andar(20);

  $joaquim = new Pessoa;

  $joaquim->nome = "Joaquim";
  $joaquim->idade = 4;

  echo "O nome dele é $joaquim->nome e tem $joaquim->idade anos <br>";

  $joaquim->andar(30);