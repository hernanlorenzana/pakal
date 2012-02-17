<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    pakal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInputText(),
      'apellido'     => new sfWidgetFormInputText(),
      'nick'         => new sfWidgetFormInputText(),
      'email'        => new sfWidgetFormInputText(),
      'fk_localidad' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Localidad'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'apellido'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nick'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'email'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fk_localidad' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Localidad'))),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
