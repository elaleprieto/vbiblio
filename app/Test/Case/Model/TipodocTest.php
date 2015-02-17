<?php
App::uses('Tipodoc', 'Model');

/**
 * Tipodoc Test Case
 *
 */
class TipodocTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipodoc',
		'app.socio',
		'app.localidad',
		'app.provincia',
		'app.categoria',
		'app.cobrador',
		'app.tipocambio',
		'app.tipo',
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
		$this->Tipodoc = ClassRegistry::init('Tipodoc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipodoc);

		parent::tearDown();
	}

}
