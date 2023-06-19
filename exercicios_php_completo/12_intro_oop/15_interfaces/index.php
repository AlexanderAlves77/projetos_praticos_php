<?php

  interface Caracteristicas {

    const nome = "Alexander";

    public function falar();

  }

  class Humano implements Caracteristicas {

    public $idade = 46;

    public function falar() {
      echo "Olá mundo! <br>";
    }

    public function dizerNome() {

      echo "Meu nome é " . self::nome . "<br>";

    }

  }

  $alexander = new Humano;

  $alexander->falar();

  $alexander->dizerNome();