<h1>Tareas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Fecha inicio</th>
      <th>Fecha final</th>
      <th>Periodisidad</th>
      <th>Fk id planta</th>
      <th>Fk id estado tarea</th>
      <th>Fk id tipo tarea</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tareas as $tarea): ?>
    <tr>
      <td><a href="<?php echo url_for('tarea/edit?id='.$tarea->getId()) ?>"><?php echo $tarea->getId() ?></a></td>
      <td><?php echo $tarea->getFechaInicio() ?></td>
      <td><?php echo $tarea->getFechaFinal() ?></td>
      <td><?php echo $tarea->getPeriodisidad() ?></td>
      <td><?php echo $tarea->getFkIdPlanta() ?></td>
      <td><?php echo $tarea->getFkIdEstadoTarea() ?></td>
      <td><?php echo $tarea->getFkIdTipoTarea() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tarea/new') ?>">New</a>
