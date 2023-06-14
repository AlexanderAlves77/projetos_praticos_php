<?php

  $arr = [
    'Alexander' => 29,
    'Kelvin' => 18,
    'Sara' => 12,
    'Joaquim' => 14
  ];

  asort($arr);

  print_r($arr);
  echo "<br>";

  $arr2 = [
    'Alexander' => 12,
    'Kelvin' => 44,
    'Sara' => 32,
    'Joaquim' => 14
  ];


  arsort($arr2);

  print_r($arr2);
  echo "<br>";

  ksort($arr2);

  print_r($arr2);
  echo "<br>";

  krsort($arr2);

  print_r($arr2);
  echo "<br>";