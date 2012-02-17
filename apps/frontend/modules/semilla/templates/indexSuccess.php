<h1>Semillas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre semilla</th>
      <th>Fk banco</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($semillas as $semilla): ?>
    <tr>
      <td><a href="<?php echo url_for('semilla/edit?id='.$semilla->getId()) ?>"><?php echo $semilla->getId() ?></a></td>
      <td><?php echo $semilla->getNombreSemilla() ?></td>
      <td><?php echo $semilla->getFkBanco() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('semilla/new') ?>">New</a>
