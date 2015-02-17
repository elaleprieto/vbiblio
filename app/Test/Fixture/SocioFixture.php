<?php
/**
 * SocioFixture
 *
 */
class SocioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary', 'comment' => 'IdSocioActual'),
		'numero_entrada' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'ex N_Entrada'),
		'apellido' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'denominacion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'docnumber' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cuit' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'calle' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'piso' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'localidad_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'ingreso' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'egreso' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'causa' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cuentas_suscriptas' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'comment' => 'ex Ctas Sociales Suscriptas'),
		'cuentas_integradas' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'comment' => 'ex Ctas Sociales Integradas'),
		'observaciones' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'socionum' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'nacimiento' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'caracteristica' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'celular' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'presentador' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'profesion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'campa_socios' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'ex Campa_socios', 'charset' => 'latin1'),
		'ent_solicitud' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'ex ENT_SOLICITUD'),
		'ent_dni' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'ENT_DNI'),
		'ent_servicio' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'ENT_SERVICIO'),
		'cobranza_domicilio' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cobranza_localidad' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cobranza_no_print_rbo' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'cobranza_zona' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cobranza_recorrido' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'foto' => array('type' => 'binary', 'null' => true, 'default' => null),
		'carnet_pago' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'carnet_pedido' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'categoria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index', 'comment' => 'Categoria'),
		'cobrador_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index', 'comment' => 'IdCobrador'),
		'tipocambio_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index', 'comment' => 'ex Tipo de cambio'),
		'tipo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index', 'comment' => 'Tipo Persona'),
		'tipodoc_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index', 'comment' => 'Tipo Documento'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Tipo Persona' => array('column' => 'tipo_id', 'unique' => 0),
			'Sc_CategoriasSc_Actuales' => array('column' => 'categoria_id', 'unique' => 0),
			'IdCobrador' => array('column' => 'cobrador_id', 'unique' => 0),
			'Categoría' => array('column' => 'categoria_id', 'unique' => 0),
			'Tipo de cambio' => array('column' => 'tipocambio_id', 'unique' => 0),
			'Tipo Documento' => array('column' => 'tipodoc_id', 'unique' => 0),
			'fk_socios_localidades1_idx' => array('column' => 'localidad_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'numero_entrada' => 1,
			'apellido' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'denominacion' => 'Lorem ipsum dolor sit amet',
			'docnumber' => 'Lorem ipsum d',
			'cuit' => 1,
			'calle' => 'Lorem ipsum dolor sit amet',
			'numero' => 'Lorem ipsum dolor sit amet',
			'piso' => 'Lorem ipsum dolor sit amet',
			'localidad_id' => 1,
			'ingreso' => '2015-02-16 18:48:28',
			'egreso' => '2015-02-16 18:48:28',
			'causa' => 'Lorem ipsum dolor sit amet',
			'cuentas_suscriptas' => 1,
			'cuentas_integradas' => 1,
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'socionum' => 1,
			'nacimiento' => '2015-02-16 18:48:28',
			'email' => 'Lorem ipsum dolor sit amet',
			'caracteristica' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor sit amet',
			'celular' => 'Lorem ipsum dolor sit amet',
			'presentador' => 'Lorem ipsum dolor sit amet',
			'profesion' => 'Lorem ipsum dolor sit amet',
			'campa_socios' => 'Lorem ipsum dolor sit amet',
			'ent_solicitud' => 1,
			'ent_dni' => 1,
			'ent_servicio' => 1,
			'cobranza_domicilio' => 'Lorem ipsum dolor sit amet',
			'cobranza_localidad' => 'Lorem ipsum dolor sit amet',
			'cobranza_no_print_rbo' => 1,
			'cobranza_zona' => 'Lore',
			'cobranza_recorrido' => 1,
			'foto' => 'Lorem ipsum dolor sit amet',
			'carnet_pago' => 1,
			'carnet_pedido' => 1,
			'categoria_id' => 1,
			'cobrador_id' => 1,
			'tipocambio_id' => 1,
			'tipo_id' => 1,
			'tipodoc_id' => 1
		),
	);

}
