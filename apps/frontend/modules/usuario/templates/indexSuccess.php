<h1>Usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Nick</th>
      <th>Email</th>
      <th>Fk localidad</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('usuario/edit?id='.$usuario->getId()) ?>"><?php echo $usuario->getId() ?></a></td>
      <td><?php echo $usuario->getNombre() ?></td>
      <td><?php echo $usuario->getApellido() ?></td>
      <td><?php echo $usuario->getNick() ?></td>
      <td><?php echo $usuario->getEmail() ?></td>
      <td><?php echo $usuario->getFkLocalidad() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usuario/new') ?>">New</a>
