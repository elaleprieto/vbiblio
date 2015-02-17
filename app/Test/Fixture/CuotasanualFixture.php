<?php
/**
 * CuotasanualFixture
 *
 */
class CuotasanualFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary', 'comment' => 'ex IdAno'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Fecha a partir de la cual vale la nueva cuota.'),
		'importe' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'ex Cuota_Anual'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'categorias_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_cuotasanuals_categorias1_idx' => array('column' => 'categorias_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fecha' => '2015-02-16',
			'importe' => 1,
			'created' => '2015-02-16 18:53:24',
			'modified' => '2015-02-16 18:53:24',
			'categorias_id' => 1
		),
	);

}
