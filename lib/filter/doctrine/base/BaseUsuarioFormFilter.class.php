<?php

/**
 * Usuario filter form base class.
 *
 * @package    pakal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'       => new sfWidgetFormFilterInput(),
      'apellido'     => new sfWidgetFormFilterInput(),
      'nick'         => new sfWidgetFormFilterInput(),
      'email'        => new sfWidgetFormFilterInput(),
      'fk_localidad' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Localidad'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'apellido'     => new sfValidatorPass(array('required' => false)),
      'nick'         => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(array('required' => false)),
      'fk_localidad' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Localidad'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'nombre'       => 'Text',
      'apellido'     => 'Text',
      'nick'         => 'Text',
      'email'        => 'Text',
      'fk_localidad' => 'ForeignKey',
    );
  }
}
