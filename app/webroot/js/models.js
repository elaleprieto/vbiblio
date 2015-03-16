(function() {
  angular.module('models', ['ngResource']).factory('Socio', [
    '$resource', function($resource) {
      return $resource('/socios.json', {
        callback: 'JSON_CALLBACK'
      }, {
        search: {
          isArray: true,
          method: 'GET',
          url: '/socios/search.json'
        },
        vender: {
          method: 'POST',
          url: '/productos/vender.json'
        }
      });
    }
  ]).factory('Cuota', [
    '$resource', function($resource) {
      return $resource('/cuotas.json', {
        callback: 'JSON_CALLBACK'
      }, {
        search: {
          isArray: true,
          method: 'GET',
          url: '/cuotas/search.json'
        },
        vender: {
          method: 'POST',
          url: '/productos/vender.json'
        }
      });
    }
  ]);

}).call(this);
