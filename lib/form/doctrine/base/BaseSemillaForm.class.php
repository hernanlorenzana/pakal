<?php

/**
 * Semilla form base class.
 *
 * @method Semilla getObject() Returns the current form's model object
 *
 * @package    pakal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSemillaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'nombre_semilla' => new sfWidgetFormInputText(),
      'fk_banco'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Banco'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre_semilla' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fk_banco'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Banco'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('semilla[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Semilla';
  }

}
