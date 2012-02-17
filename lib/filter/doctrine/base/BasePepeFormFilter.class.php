<?php

/**
 * Pepe filter form base class.
 *
 * @package    pakal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePepeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pepe' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'pepe' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pepe_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pepe';
  }

  public function getFields()
  {
    return array(
      'id'   => 'Number',
      'pepe' => 'Text',
    );
  }
}
