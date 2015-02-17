<?php
/**
 * ReciboFixture
 *
 */
class ReciboFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary', 'comment' => 'IdRecibo'),
		'importe' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Importe'),
		'emision' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Emision. Fecha de Emisión del Recibo.'),
		'imputado' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'anulado' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'socio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index', 'comment' => 'Socio'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'IdRecibo' => array('column' => 'id', 'unique' => 0),
			'Importe' => array('column' => 'importe', 'unique' => 0),
			'Socio' => array('column' => 'socio_id', 'unique' => 0)
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
			'importe' => 1,
			'emision' => '2015-02-16 18:51:44',
			'imputado' => 1,
			'anulado' => 1,
			'created' => '2015-02-16 18:51:44',
			'modified' => '2015-02-16 18:51:44',
			'socio_id' => 1
		),
	);

}
