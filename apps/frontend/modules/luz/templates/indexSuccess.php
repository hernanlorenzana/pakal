<h1>Luzs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Fk tipo luz</th>
      <th>Fk pot luz</th>
      <th>Fk usuario</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($luzs as $luz): ?>
    <tr>
      <td><a href="<?php echo url_for('luz/edit?id='.$luz->getId()) ?>"><?php echo $luz->getId() ?></a></td>
      <td><?php echo $luz->getFkTipoLuz() ?></td>
      <td><?php echo $luz->getFkPotLuz() ?></td>
      <td><?php echo $luz->getFkUsuario() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('luz/new') ?>">New</a>
