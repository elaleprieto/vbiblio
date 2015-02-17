<?php
App::uses('Provincias', 'Model');

/**
 * Provincias Test Case
 *
 */
class ProvinciasTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Provincias = ClassRegistry::init('Provincias');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Provincias);

		parent::tearDown();
	}

}
