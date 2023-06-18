<?php

  class Humano {

    public $maos = 2;
    public $pernas = 2;

    public function falar() {
      echo "Olá, eu sou um humano <br>";
    }

  }

  class Professor extends Humano {

    public $disciplina = "Matemática";

    public function estaLecionando() {
      echo "O professor está dando aula de $this->disciplina <br>";
    }

  }

  $joaquim = new Humano;

  echo "$joaquim->maos <br>";
  $joaquim->falar();

  $sara = new Professor;

  echo "$sara->pernas <br>";
  echo "$sara->disciplina <br>";

  $sara->falar();

  $sara->estaLecionando();