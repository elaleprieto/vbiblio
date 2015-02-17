<?php
App::uses('Socio', 'Model');

/**
 * Socio Test Case
 *
 */
class SocioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.socio',
		'app.localidad',
		'app.categoria',
		'app.cobrador',
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
		$this->Socio = ClassRegistry::init('Socio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Socio);

		parent::tearDown();
	}

}
