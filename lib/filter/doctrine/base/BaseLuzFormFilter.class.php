<?php

/**
 * Luz filter form base class.
 *
 * @package    pakal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLuzFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fk_tipo_luz' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoLuz'), 'add_empty' => true)),
      'fk_pot_luz'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PotLuz'), 'add_empty' => true)),
      'fk_usuario'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'fk_tipo_luz' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoLuz'), 'column' => 'id')),
      'fk_pot_luz'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PotLuz'), 'column' => 'id')),
      'fk_usuario'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuario'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('luz_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Luz';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'fk_tipo_luz' => 'ForeignKey',
      'fk_pot_luz'  => 'ForeignKey',
      'fk_usuario'  => 'ForeignKey',
    );
  }
}
