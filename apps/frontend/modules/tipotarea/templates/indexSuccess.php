<h1>Tipotareas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tipotareas as $tipotarea): ?>
    <tr>
      <td><a href="<?php echo url_for('tipotarea/edit?id='.$tipotarea->getId()) ?>"><?php echo $tipotarea->getId() ?></a></td>
      <td><?php echo $tipotarea->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipotarea/new') ?>">New</a>
