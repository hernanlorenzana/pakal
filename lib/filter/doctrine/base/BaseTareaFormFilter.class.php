<?php

/**
 * Tarea filter form base class.
 *
 * @package    pakal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTareaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_inicio'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_final'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'periodisidad'       => new sfWidgetFormFilterInput(),
      'fk_id_planta'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Planta'), 'add_empty' => true)),
      'fk_id_estado_tarea' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoTarea'), 'add_empty' => true)),
      'fk_id_tipo_tarea'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipotarea'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'fecha_inicio'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_final'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'periodisidad'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fk_id_planta'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Planta'), 'column' => 'id')),
      'fk_id_estado_tarea' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EstadoTarea'), 'column' => 'id')),
      'fk_id_tipo_tarea'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tipotarea'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('tarea_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tarea';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'fecha_inicio'       => 'Date',
      'fecha_final'        => 'Date',
      'periodisidad'       => 'Number',
      'fk_id_planta'       => 'ForeignKey',
      'fk_id_estado_tarea' => 'ForeignKey',
      'fk_id_tipo_tarea'   => 'ForeignKey',
    );
  }
}
