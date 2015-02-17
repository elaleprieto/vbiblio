<?php
App::uses('Tipocambio', 'Model');

/**
 * Tipocambio Test Case
 *
 */
class TipocambioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipocambio',
		'app.socio',
		'app.localidad',
		'app.provincia',
		'app.categoria',
		'app.cobrador',
		'app.tipo',
		'app.tipodoc',
		'app.cuota',
		'app.recibo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tipocambio = ClassRegistry::init('Tipocambio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipocambio);

		parent::tearDown();
	}

}
