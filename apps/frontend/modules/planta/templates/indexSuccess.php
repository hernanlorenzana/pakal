<h1>Plantas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Fk usuario</th>
      <th>Fk semilla</th>
      <th>Fecha nacimiento</th>
      <th>Madre</th>
      <th>Esqueje</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($plantas as $planta): ?>
    <tr>
      <td><a href="<?php echo url_for('planta/edit?id='.$planta->getId()) ?>"><?php echo $planta->getId() ?></a></td>
      <td><?php echo $planta->getNombre() ?></td>
      <td><?php echo $planta->getFkUsuario() ?></td>
      <td><?php echo $planta->getFkSemilla() ?></td>
      <td><?php echo $planta->getFechaNacimiento() ?></td>
      <td><?php echo $planta->getMadre() ?></td>
      <td><?php echo $planta->getEsqueje() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('planta/new') ?>">New</a>
