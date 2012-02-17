<?php

/**
 * Semilla filter form base class.
 *
 * @package    pakal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSemillaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_semilla' => new sfWidgetFormFilterInput(),
      'fk_banco'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Banco'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre_semilla' => new sfValidatorPass(array('required' => false)),
      'fk_banco'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Banco'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('semilla_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Semilla';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'nombre_semilla' => 'Text',
      'fk_banco'       => 'ForeignKey',
    );
  }
}
