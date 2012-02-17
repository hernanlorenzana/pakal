<?php

/**
 * Banco filter form base class.
 *
 * @package    pakal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBancoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_banco' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre_banco' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('banco_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banco';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'nombre_banco' => 'Text',
    );
  }
}
