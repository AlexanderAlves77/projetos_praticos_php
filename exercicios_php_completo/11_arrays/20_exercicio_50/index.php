<?php

  $pessoas = [
    'Alexander' => 46,
    'Rita' => 45,
    'Kelvin' => 22,
    'Sara' => 9
  ];

?>

<table border="1">
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
      <td><?= $nome; ?></td>
      <td><?= $idade; ?></td>
    </tr>
  <?php endforeach; ?>
</table>