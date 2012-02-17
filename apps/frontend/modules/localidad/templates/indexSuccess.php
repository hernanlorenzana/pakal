<h1>Localidads List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>X</th>
      <th>Y</th>
      <th>Fk region</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($localidads as $localidad): ?>
    <tr>
      <td><a href="<?php echo url_for('localidad/edit?id='.$localidad->getId()) ?>"><?php echo $localidad->getId() ?></a></td>
      <td><?php echo $localidad->getNombre() ?></td>
      <td><?php echo $localidad->getX() ?></td>
      <td><?php echo $localidad->getY() ?></td>
      <td><?php echo $localidad->getFkRegion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('localidad/new') ?>">New</a>
