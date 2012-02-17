<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Localidad', 'doctrine');

/**
 * BaseLocalidad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property float $x
 * @property float $y
 * @property integer $fk_region
 * @property Region $Region
 * @property Doctrine_Collection $Usuario
 * 
 * @method integer             getId()        Returns the current record's "id" value
 * @method string              getNombre()    Returns the current record's "nombre" value
 * @method float               getX()         Returns the current record's "x" value
 * @method float               getY()         Returns the current record's "y" value
 * @method integer             getFkRegion()  Returns the current record's "fk_region" value
 * @method Region              getRegion()    Returns the current record's "Region" value
 * @method Doctrine_Collection getUsuario()   Returns the current record's "Usuario" collection
 * @method Localidad           setId()        Sets the current record's "id" value
 * @method Localidad           setNombre()    Sets the current record's "nombre" value
 * @method Localidad           setX()         Sets the current record's "x" value
 * @method Localidad           setY()         Sets the current record's "y" value
 * @method Localidad           setFkRegion()  Sets the current record's "fk_region" value
 * @method Localidad           setRegion()    Sets the current record's "Region" value
 * @method Localidad           setUsuario()   Sets the current record's "Usuario" collection
 * 
 * @package    pakal
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLocalidad extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('localidad');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('x', 'float', 13, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 13,
             'scale' => '10',
             ));
        $this->hasColumn('y', 'float', 13, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 13,
             'scale' => '10',
             ));
        $this->hasColumn('fk_region', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Region', array(
             'local' => 'fk_region',
             'foreign' => 'id'));

        $this->hasMany('Usuario', array(
             'local' => 'id',
             'foreign' => 'fk_localidad'));
    }
}