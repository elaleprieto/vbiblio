<?php
/**
 * CobradorFixture
 *
 */
class CobradorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary', 'comment' => 'ex IdCobrador'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'ex Nom_Cobrador', 'charset' => 'latin1'),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'ex Dir_Cobrador', 'charset' => 'latin1'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'ex TE_Cobrador', 'charset' => 'latin1'),
		'dni' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'comment' => 'ex DNI_Cobrador', 'charset' => 'latin1'),
		'observaciones' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'ex Campo1', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'IdCobrador' => array('column' => 'id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor sit amet',
			'dni' => 'Lorem ipsum d',
			'observaciones' => 'Lorem ipsum dolor sit amet'
		),
	);

}
