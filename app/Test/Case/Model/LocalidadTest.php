<?php
App::uses('Localidad', 'Model');

/**
 * Localidad Test Case
 *
 */
class LocalidadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.localidad',
		'app.provincia',
		'app.socio',
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
		$this->Localidad = ClassRegistry::init('Localidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Localidad);

		parent::tearDown();
	}

}
