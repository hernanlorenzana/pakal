<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TipoCultivo', 'doctrine');

/**
 * BaseTipoCultivo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre_cultivo
 * @property Doctrine_Collection $Historial
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method string              getNombreCultivo()  Returns the current record's "nombre_cultivo" value
 * @method Doctrine_Collection getHistorial()      Returns the current record's "Historial" collection
 * @method TipoCultivo         setId()             Sets the current record's "id" value
 * @method TipoCultivo         setNombreCultivo()  Sets the current record's "nombre_cultivo" value
 * @method TipoCultivo         setHistorial()      Sets the current record's "Historial" collection
 * 
 * @package    pakal
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoCultivo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_cultivo');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre_cultivo', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Historial', array(
             'local' => 'id',
             'foreign' => 'fk_tipo_cultivo'));
    }
}