<?php

/**
 * Historial filter form base class.
 *
 * @package    pakal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseHistorialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fk_planta'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Planta'), 'add_empty' => true)),
      'litraje'         => new sfWidgetFormFilterInput(),
      'temperatura'     => new sfWidgetFormFilterInput(),
      'altura'          => new sfWidgetFormFilterInput(),
      'fk_tipo_cultivo' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoCultivo'), 'add_empty' => true)),
      'hora_luz'        => new sfWidgetFormFilterInput(),
      'hora_oscuridad'  => new sfWidgetFormFilterInput(),
      'humedad'         => new sfWidgetFormFilterInput(),
      'ph'              => new sfWidgetFormFilterInput(),
      'fk_estado'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'fk_etapa'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Etapa'), 'add_empty' => true)),
      'fk_luz'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Luz'), 'add_empty' => true)),
      'fecha'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'fk_planta'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Planta'), 'column' => 'id')),
      'litraje'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'temperatura'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'altura'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fk_tipo_cultivo' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoCultivo'), 'column' => 'id')),
      'hora_luz'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'hora_oscuridad'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'humedad'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ph'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fk_estado'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estado'), 'column' => 'id')),
      'fk_etapa'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Etapa'), 'column' => 'id')),
      'fk_luz'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Luz'), 'column' => 'id')),
      'fecha'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('historial_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Historial';
  }

  public function getFields()
  {
    return array(
      'fk_planta'       => 'ForeignKey',
      'litraje'         => 'Number',
      'temperatura'     => 'Number',
      'altura'          => 'Number',
      'fk_tipo_cultivo' => 'ForeignKey',
      'hora_luz'        => 'Number',
      'hora_oscuridad'  => 'Number',
      'humedad'         => 'Number',
      'ph'              => 'Number',
      'fk_estado'       => 'ForeignKey',
      'fk_etapa'        => 'ForeignKey',
      'id'              => 'Number',
      'fk_luz'          => 'ForeignKey',
      'fecha'           => 'Date',
    );
  }
}
