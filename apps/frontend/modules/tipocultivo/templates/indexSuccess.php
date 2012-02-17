<h1>Tipocultivos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre cultivo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tipocultivos as $tipocultivo): ?>
    <tr>
      <td><a href="<?php echo url_for('tipocultivo/edit?id='.$tipocultivo->getId()) ?>"><?php echo $tipocultivo->getId() ?></a></td>
      <td><?php echo $tipocultivo->getNombreCultivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipocultivo/new') ?>">New</a>
