<?php
App::uses('CuotasController', 'Controller');

/**
 * CuotasController Test Case
 *
 */
class CuotasControllerTest extends ControllerTestCase {

	// public static function setupBeforeClass() {
	// 	$this->Cuota = ClassRegistry::init('Cuota');
	// 	$this->Cuota->query('SET foreign_key_checks = 0;');
	// }

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cuota',
		'app.recibo',
		'app.socio',
		'app.localidad',
		'app.provincia',
		'app.categoria',
		'app.cobrador',
		'app.tipocambio',
		'app.tipo',
		'app.tipodoc',
		'app.user',
		'app.rol'
	);

	public function setUp() {
		$this->Cuota->query('SET foreign_key_checks = 0;');
        parent::setUp();
        // $this->Article = ClassRegistry::init('Article');
    }

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testGenerarTodasHasta method
 *
 * @return void
 */
	public function testGenerarTodasHasta() {
		$this->markTestIncomplete('testGenerarTodasHasta not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
