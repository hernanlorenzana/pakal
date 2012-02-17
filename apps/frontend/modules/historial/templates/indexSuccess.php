<h1>Historials List</h1>

<table>
  <thead>
    <tr>
      <th>Fk planta</th>
      <th>Litraje</th>
      <th>Temperatura</th>
      <th>Altura</th>
      <th>Fk tipo cultivo</th>
      <th>Hora luz</th>
      <th>Hora oscuridad</th>
      <th>Humedad</th>
      <th>Ph</th>
      <th>Fk estado</th>
      <th>Fk etapa</th>
      <th>Id</th>
      <th>Fk luz</th>
      <th>Fecha</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($historials as $historial): ?>
    <tr>
      <td><?php echo $historial->getFkPlanta() ?></td>
      <td><?php echo $historial->getLitraje() ?></td>
      <td><?php echo $historial->getTemperatura() ?></td>
      <td><?php echo $historial->getAltura() ?></td>
      <td><?php echo $historial->getFkTipoCultivo() ?></td>
      <td><?php echo $historial->getHoraLuz() ?></td>
      <td><?php echo $historial->getHoraOscuridad() ?></td>
      <td><?php echo $historial->getHumedad() ?></td>
      <td><?php echo $historial->getPh() ?></td>
      <td><?php echo $historial->getFkEstado() ?></td>
      <td><?php echo $historial->getFkEtapa() ?></td>
      <td><a href="<?php echo url_for('historial/edit?id='.$historial->getId()) ?>"><?php echo $historial->getId() ?></a></td>
      <td><?php echo $historial->getFkLuz() ?></td>
      <td><?php echo $historial->getFecha() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('historial/new') ?>">New</a>
