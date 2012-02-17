<h1>Estadotareas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($estadotareas as $estadotarea): ?>
    <tr>
      <td><a href="<?php echo url_for('estadotarea/edit?id='.$estadotarea->getId()) ?>"><?php echo $estadotarea->getId() ?></a></td>
      <td><?php echo $estadotarea->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('estadotarea/new') ?>">New</a>
