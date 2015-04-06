<?php
/**
 * CuotaFixture
 *
 */
class CuotaFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Cuota', 'connection' => 'test');

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
			'vencimiento' => '2015-04-05',
			'pagada' => 1,
			'emitido' => 1,
			'created' => '2015-04-05 21:16:18',
			'modified' => '2015-04-05 21:16:18',
			'recibo_id' => 1,
			'socio_id' => 1
		),
	);

}
