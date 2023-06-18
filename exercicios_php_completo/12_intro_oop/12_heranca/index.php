<?php

  class Humano {

    public $idade = 46;

    public function falar() {
      echo "Olá Mundo! <br>";
    }

    private function gritar() {
      echo "PHP É MUITO BOM! <br>";
    }

    public function acessaGritar() {
      $this->gritar();
    }

    protected function falarBaixinho() {
      echo "lalala <br>";
    }

    public function acessaFalarBaixinho() {
      $this->falarBaixinho();
    }

  }

  class Programador extends Humano {

    public function acessaFalarBaixinhoProgramador() {
      $this->falarBaixinho();
    }

  }

  $sara = new Humano;

  $sara->falar();
  $sara->acessaGritar();
  $sara->acessaFalarBaixinho();

  $alexander = new Programador;

  echo $alexander->idade . "<br>";

  $alexander->falar();
  $alexander->acessaGritar();
  $alexander->acessaFalarBaixinhoProgramador();