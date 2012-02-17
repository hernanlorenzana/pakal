<?php

/**
 * Planta form base class.
 *
 * @method Planta getObject() Returns the current form's model object
 *
 * @package    pakal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePlantaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'nombre'           => new sfWidgetFormInputText(),
      'fk_usuario'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => false)),
      'fk_semilla'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Semilla'), 'add_empty' => false)),
      'fecha_nacimiento' => new sfWidgetFormDate(),
      'madre'            => new sfWidgetFormInputText(),
      'esqueje'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fk_usuario'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'))),
      'fk_semilla'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Semilla'))),
      'fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
      'madre'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'esqueje'          => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('planta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Planta';
  }

}
