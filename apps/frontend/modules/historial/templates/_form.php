<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('historial/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('historial/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'historial/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['fk_planta']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_planta']->renderError() ?>
          <?php echo $form['fk_planta'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['litraje']->renderLabel() ?></th>
        <td>
          <?php echo $form['litraje']->renderError() ?>
          <?php echo $form['litraje'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['temperatura']->renderLabel() ?></th>
        <td>
          <?php echo $form['temperatura']->renderError() ?>
          <?php echo $form['temperatura'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['altura']->renderLabel() ?></th>
        <td>
          <?php echo $form['altura']->renderError() ?>
          <?php echo $form['altura'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_tipo_cultivo']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_tipo_cultivo']->renderError() ?>
          <?php echo $form['fk_tipo_cultivo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['hora_luz']->renderLabel() ?></th>
        <td>
          <?php echo $form['hora_luz']->renderError() ?>
          <?php echo $form['hora_luz'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['hora_oscuridad']->renderLabel() ?></th>
        <td>
          <?php echo $form['hora_oscuridad']->renderError() ?>
          <?php echo $form['hora_oscuridad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['humedad']->renderLabel() ?></th>
        <td>
          <?php echo $form['humedad']->renderError() ?>
          <?php echo $form['humedad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ph']->renderLabel() ?></th>
        <td>
          <?php echo $form['ph']->renderError() ?>
          <?php echo $form['ph'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_estado']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_estado']->renderError() ?>
          <?php echo $form['fk_estado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_etapa']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_etapa']->renderError() ?>
          <?php echo $form['fk_etapa'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fk_luz']->renderLabel() ?></th>
        <td>
          <?php echo $form['fk_luz']->renderError() ?>
          <?php echo $form['fk_luz'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
