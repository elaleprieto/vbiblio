<?php
App::uses('Categorias', 'Model');

/**
 * Categorias Test Case
 *
 */
class CategoriasTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categorias = ClassRegistry::init('Categorias');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categorias);

		parent::tearDown();
	}

}
