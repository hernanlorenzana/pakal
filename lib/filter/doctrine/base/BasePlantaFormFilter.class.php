<?php

/**
 * Planta filter form base class.
 *
 * @package    pakal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePlantaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'           => new sfWidgetFormFilterInput(),
      'fk_usuario'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => true)),
      'fk_semilla'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Semilla'), 'add_empty' => true)),
      'fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'madre'            => new sfWidgetFormFilterInput(),
      'esqueje'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'fk_usuario'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuario'), 'column' => 'id')),
      'fk_semilla'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Semilla'), 'column' => 'id')),
      'fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'madre'            => new sfValidatorPass(array('required' => false)),
      'esqueje'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('planta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Planta';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'nombre'           => 'Text',
      'fk_usuario'       => 'ForeignKey',
      'fk_semilla'       => 'ForeignKey',
      'fecha_nacimiento' => 'Date',
      'madre'            => 'Text',
      'esqueje'          => 'Number',
    );
  }
}
