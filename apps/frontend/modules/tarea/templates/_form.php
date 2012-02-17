<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('tarea/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('tarea/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'tarea/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['fecha_inicio']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_inicio']->renderError() ?>
          <?php echo $form['fecha_inicio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_final']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_final']->renderError() ?>
          <?php echo $form['fecha_final'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['periodisidad']->renderLabel() ?></th>
        <td>
          <?php echo $form['periodisidad']->renderError() ?>
          <?php echo $form['periodisidad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_id_planta']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_id_planta']->renderError() ?>
          <?php echo $form['fk_id_planta'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_id_estado_tarea']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_id_estado_tarea']->renderError() ?>
          <?php echo $form['fk_id_estado_tarea'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_id_tipo_tarea']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_id_tipo_tarea']->renderError() ?>
          <?php echo $form['fk_id_tipo_tarea'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
