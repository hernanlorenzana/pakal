<h1>Tipoluzs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tipoluzs as $tipoluz): ?>
    <tr>
      <td><a href="<?php echo url_for('tipoluz/edit?id='.$tipoluz->getId()) ?>"><?php echo $tipoluz->getId() ?></a></td>
      <td><?php echo $tipoluz->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipoluz/new') ?>">New</a>
