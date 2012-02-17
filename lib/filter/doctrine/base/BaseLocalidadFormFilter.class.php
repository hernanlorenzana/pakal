<?php

/**
 * Localidad filter form base class.
 *
 * @package    pakal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLocalidadFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'x'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'y'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fk_region' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Region'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'    => new sfValidatorPass(array('required' => false)),
      'x'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'y'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fk_region' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Region'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('localidad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Localidad';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'nombre'    => 'Text',
      'x'         => 'Number',
      'y'         => 'Number',
      'fk_region' => 'ForeignKey',
    );
  }
}
