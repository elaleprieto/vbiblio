<?php
/**
 * CuotasmensualFixture
 *
 */
class CuotasmensualFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary', 'comment' => 'Id_Sc_Haber'),
		'importe' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'ex ImporteCuota'),
		'observaciones' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'ex control1', 'charset' => 'latin1'),
		'vencimiento' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'ex Vto'),
		'pagada' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'pago'),
		'emitido' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'recibo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index', 'comment' => 'ex Id_Rbo'),
		'socio_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index', 'comment' => 'ex Id_Socio'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_cuotas_socios1_idx' => array('column' => 'socio_id', 'unique' => 0),
			'fk_cuotas_recibos1_idx' => array('column' => 'recibo_id', 'unique' => 0)
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
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'vencimiento' => '2015-02-16',
			'pagada' => 1,
			'emitido' => 1,
			'created' => '2015-02-16 19:38:16',
			'modified' => '2015-02-16 19:38:16',
			'recibo_id' => 1,
			'socio_id' => 1
		),
	);

}
