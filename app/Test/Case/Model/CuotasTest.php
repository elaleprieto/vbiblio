<?php
App::uses('Cuotas', 'Model');

/**
 * Cuotas Test Case
 *
 */
class CuotasTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cuotas = ClassRegistry::init('Cuotas');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuotas);

		parent::tearDown();
	}

}
