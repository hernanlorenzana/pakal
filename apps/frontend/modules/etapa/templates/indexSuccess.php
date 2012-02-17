<h1>Etapas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($etapas as $etapa): ?>
    <tr>
      <td><a href="<?php echo url_for('etapa/edit?id='.$etapa->getId()) ?>"><?php echo $etapa->getId() ?></a></td>
      <td><?php echo $etapa->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('etapa/new') ?>">New</a>
