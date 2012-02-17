<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('localidad/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('localidad/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'localidad/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
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
        <th><?php echo $form['x']->renderLabel() ?></th>
        <td>
          <?php echo $form['x']->renderError() ?>
          <?php echo $form['x'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['y']->renderLabel() ?></th>
        <td>
          <?php echo $form['y']->renderError() ?>
          <?php echo $form['y'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_region']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_region']->renderError() ?>
          <?php echo $form['fk_region'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
