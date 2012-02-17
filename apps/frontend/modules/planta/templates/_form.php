<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('planta/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('planta/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'planta/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_usuario']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_usuario']->renderError() ?>
          <?php echo $form['fk_usuario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_semilla']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_semilla']->renderError() ?>
          <?php echo $form['fk_semilla'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_nacimiento']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_nacimiento']->renderError() ?>
          <?php echo $form['fecha_nacimiento'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['madre']->renderLabel() ?></th>
        <td>
          <?php echo $form['madre']->renderError() ?>
          <?php echo $form['madre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['esqueje']->renderLabel() ?></th>
        <td>
          <?php echo $form['esqueje']->renderError() ?>
          <?php echo $form['esqueje'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
