<?php

/**
 * Tarea form base class.
 *
 * @method Tarea getObject() Returns the current form's model object
 *
 * @package    pakal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTareaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'fecha_inicio'       => new sfWidgetFormDate(),
      'fecha_final'        => new sfWidgetFormDate(),
      'periodisidad'       => new sfWidgetFormInputText(),
      'fk_id_planta'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Planta'), 'add_empty' => false)),
      'fk_id_estado_tarea' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoTarea'), 'add_empty' => false)),
      'fk_id_tipo_tarea'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipotarea'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fecha_inicio'       => new sfValidatorDate(),
      'fecha_final'        => new sfValidatorDate(array('required' => false)),
      'periodisidad'       => new sfValidatorInteger(array('required' => false)),
      'fk_id_planta'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Planta'))),
      'fk_id_estado_tarea' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoTarea'))),
      'fk_id_tipo_tarea'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tipotarea'))),
    ));

    $this->widgetSchema->setNameFormat('tarea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tarea';
  }

}
