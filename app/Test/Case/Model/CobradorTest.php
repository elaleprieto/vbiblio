<?php
App::uses('Cobrador', 'Model');

/**
 * Cobrador Test Case
 *
 */
class CobradorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cobrador',
		'app.socio',
		'app.localidad',
		'app.provincia',
		'app.categoria',
		'app.tipocambio',
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
		$this->Cobrador = ClassRegistry::init('Cobrador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cobrador);

		parent::tearDown();
	}

}
