<?php

/**
 * Historial form base class.
 *
 * @method Historial getObject() Returns the current form's model object
 *
 * @package    pakal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHistorialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fk_planta'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Planta'), 'add_empty' => false)),
      'litraje'         => new sfWidgetFormInputText(),
      'temperatura'     => new sfWidgetFormInputText(),
      'altura'          => new sfWidgetFormInputText(),
      'fk_tipo_cultivo' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoCultivo'), 'add_empty' => false)),
      'hora_luz'        => new sfWidgetFormInputText(),
      'hora_oscuridad'  => new sfWidgetFormInputText(),
      'humedad'         => new sfWidgetFormInputText(),
      'ph'              => new sfWidgetFormInputText(),
      'fk_estado'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => false)),
      'fk_etapa'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Etapa'), 'add_empty' => false)),
      'id'              => new sfWidgetFormInputHidden(),
      'fk_luz'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Luz'), 'add_empty' => false)),
      'fecha'           => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'fk_planta'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Planta'))),
      'litraje'         => new sfValidatorInteger(array('required' => false)),
      'temperatura'     => new sfValidatorNumber(array('required' => false)),
      'altura'          => new sfValidatorNumber(array('required' => false)),
      'fk_tipo_cultivo' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoCultivo'))),
      'hora_luz'        => new sfValidatorInteger(array('required' => false)),
      'hora_oscuridad'  => new sfValidatorInteger(array('required' => false)),
      'humedad'         => new sfValidatorNumber(array('required' => false)),
      'ph'              => new sfValidatorNumber(array('required' => false)),
      'fk_estado'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'))),
      'fk_etapa'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Etapa'))),
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fk_luz'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Luz'))),
      'fecha'           => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('historial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Historial';
  }

}
