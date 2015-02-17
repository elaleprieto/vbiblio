<?php
/**
 * TipoFixture
 *
 */
class TipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'abreviatura' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => 'ex Id_Tipo_Persona', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'ex Descripcion', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Id_Tipo_Persona' => array('column' => 'abreviatura', 'unique' => 0)
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
			'abreviatura' => 'Lorem ipsum dolor sit ame',
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
