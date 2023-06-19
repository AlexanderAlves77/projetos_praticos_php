<?php

  class Humano {

  }

  class Animal {

  }

  class Professor extends Humano {

  }

  $patrick = new Humano;

  $joaquim = new Animal;

  if($patrick instanceof Humano) {
    echo "Patrick é um Humano <br>";
  } else {
    echo "Patrick não é um humano <br>";
  }

  if($joaquim instanceof Humano) {
    echo "Joaquim é um Humano <br>";
  } else {
    echo "Joaquim não é um humano <br>";
  }

  $sara = new Professor;

  if($sara instanceof Professor) {
    echo "Sara é uma Professora <br>";
  } else {
    echo "Sara não é uma Professora <br>";
  }

  if($sara instanceof Humano) {
    echo "Sara é um Humano <br>";
  } else {
    echo "Sara não é um humano <br>";
  }

  if($joaquim instanceof Professor) {
    echo "Joaquim é um Professor <br>";
  } else {
    echo "Joaquim não é um Professor <br>";
  }