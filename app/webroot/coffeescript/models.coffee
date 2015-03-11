angular.module('models', ['ngResource'])
	
	# Producto
	.factory('Socio', ['$resource', ($resource) ->
		$resource '/socios.json'
			, { callback:'JSON_CALLBACK' }
			, search: {isArray: true, method: 'GET', url: '/socios/search.json'}
				, vender: {method: 'POST', url: '/productos/vender.json'} # USAR
	])	
	
	# # Movimiento
	# .factory('Movimiento', ['$resource', ($resource) ->
	# 	$resource '/movimientos.json'
	# 		, { callback:'JSON_CALLBACK' }
	# 		# , save: {cache: true, method: 'POST', url: '/movimientos.json'}
	# ])
