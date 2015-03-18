angular.module('models', ['ngResource'])

	# Socio
	.factory('Socio', ['$resource', ($resource) ->
		$resource '/socios.json'
			, { callback:'JSON_CALLBACK' }
			, search: {isArray: true, method: 'GET', url: '/socios/search.json'}
				, vender: {method: 'POST', url: '/productos/vender.json'} # USAR
	])

	# Cuota
	.factory('Cuota', ['$resource', ($resource) ->
		$resource '/cuotas.json'
			, { callback:'JSON_CALLBACK' }
			, search: {isArray: true, method: 'GET', url: '/cuotas/search.json'}
				, vender: {method: 'POST', url: '/productos/vender.json'} # USAR
	])

	# Provincia
	.factory('Provincia', ['$resource', ($resource) ->
		$resource '/provincias.json'
			, { callback:'JSON_CALLBACK' }
			, getLocalidades: {isArray: false, cache: true, method: 'GET', url: '/provincias/getLocalidades.json'}
				, vender: {method: 'POST', url: '/productos/vender.json'} # USAR
	])

	# # Movimiento
	# .factory('Movimiento', ['$resource', ($resource) ->
	# 	$resource '/movimientos.json'
	# 		, { callback:'JSON_CALLBACK' }
	# 		# , save: {cache: true, method: 'POST', url: '/movimientos.json'}
	# ])
