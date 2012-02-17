<?php

/**
 * Luz form base class.
 *
 * @method Luz getObject() Returns the current form's model object
 *
 * @package    pakal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLuzForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'fk_tipo_luz' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoLuz'), 'add_empty' => false)),
      'fk_pot_luz'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PotLuz'), 'add_empty' => false)),
      'fk_usuario'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fk_tipo_luz' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoLuz'))),
      'fk_pot_luz'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PotLuz'))),
      'fk_usuario'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'))),
    ));

    $this->widgetSchema->setNameFormat('luz[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Luz';
  }

}
