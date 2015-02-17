<?php
App::uses('Cuotasmensual', 'Model');

/**
 * Cuotasmensual Test Case
 *
 */
class CuotasmensualTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cuotasmensual',
		'app.recibo',
		'app.socio',
		'app.localidad',
		'app.provincia',
		'app.categoria',
		'app.cobrador',
		'app.tipocambio',
		'app.tipo',
		'app.tipodoc',
		'app.cuota'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cuotasmensual = ClassRegistry::init('Cuotasmensual');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuotasmensual);

		parent::tearDown();
	}

}
