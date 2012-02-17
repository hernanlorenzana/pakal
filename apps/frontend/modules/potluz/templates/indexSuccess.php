<h1>Potluzs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Potencia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($potluzs as $potluz): ?>
    <tr>
      <td><a href="<?php echo url_for('potluz/edit?id='.$potluz->getId()) ?>"><?php echo $potluz->getId() ?></a></td>
      <td><?php echo $potluz->getPotencia() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('potluz/new') ?>">New</a>
