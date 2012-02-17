<h1>Regions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>X</th>
      <th>Y</th>
      <th>Fk pais</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($regions as $region): ?>
    <tr>
      <td><a href="<?php echo url_for('region/edit?id='.$region->getId()) ?>"><?php echo $region->getId() ?></a></td>
      <td><?php echo $region->getNombre() ?></td>
      <td><?php echo $region->getX() ?></td>
      <td><?php echo $region->getY() ?></td>
      <td><?php echo $region->getFkPais() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('region/new') ?>">New</a>
