<h1>Paiss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>X</th>
      <th>Y</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($paiss as $pais): ?>
    <tr>
      <td><a href="<?php echo url_for('pais/edit?id='.$pais->getId()) ?>"><?php echo $pais->getId() ?></a></td>
      <td><?php echo $pais->getNombre() ?></td>
      <td><?php echo $pais->getX() ?></td>
      <td><?php echo $pais->getY() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('pais/new') ?>">New</a>
