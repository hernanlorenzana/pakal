<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('luz/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('luz/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'luz/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['fk_tipo_luz']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_tipo_luz']->renderError() ?>
          <?php echo $form['fk_tipo_luz'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_pot_luz']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_pot_luz']->renderError() ?>
          <?php echo $form['fk_pot_luz'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_usuario']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_usuario']->renderError() ?>
          <?php echo $form['fk_usuario'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
