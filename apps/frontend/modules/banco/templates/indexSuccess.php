<h1>Bancos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre banco</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($bancos as $banco): ?>
    <tr>
      <td><a href="<?php echo url_for('banco/edit?id='.$banco->getId()) ?>"><?php echo $banco->getId() ?></a></td>
      <td><?php echo $banco->getNombreBanco() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('banco/new') ?>">New</a>
