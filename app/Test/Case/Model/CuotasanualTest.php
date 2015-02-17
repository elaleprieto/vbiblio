<?php
App::uses('Cuotasanual', 'Model');

/**
 * Cuotasanual Test Case
 *
 */
class CuotasanualTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cuotasanual',
		'app.categorias'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cuotasanual = ClassRegistry::init('Cuotasanual');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuotasanual);

		parent::tearDown();
	}

}
