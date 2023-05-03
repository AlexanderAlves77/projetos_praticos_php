<?php

  $pessoa = [
    'nome' => 'Alexander',
    'idade' => 46,
    'profissao' => 'Programador',
    'graduacao' => 'Sistemas da Informação'
  ];

  $maioridade = 18;

  // desafio
  if($pessoa['idade'] >= $maioridade) {
    echo "A pessoa é maior de idade!";
  }