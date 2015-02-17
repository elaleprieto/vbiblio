<?php
App::uses('Localidade', 'Model');

/**
 * Localidade Test Case
 *
 */
class LocalidadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.localidade',
		'app.provincia',
		'app.localidad',
		'app.socio',
		'app.categoria',
		'app.cobrador',
		'app.tipocambio',
		'app.tipo',
		'app.tipodoc',
		'app.cuota',
		'app.recibo',
		'app.cuotasmensual'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Localidade = ClassRegistry::init('Localidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Localidade);

		parent::tearDown();
	}

}
