<?php

  $matheus = [
    'nome' => 'Alexander',
    'idade' => 46,
    'profissao' => 'Programador'
  ];

  $alexia = [
    'nome' => 'Kelvin',
    'idade' => 22,
    'profissao' => 'Tecnico Tele Edificações'
  ];

  foreach($matheus as $carac => $value) {

    echo "$carac => $value <br>";

  }

  foreach($alexia as $value) {

    echo "$value <br>";

  }