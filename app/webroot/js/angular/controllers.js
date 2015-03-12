(function() {
  var App;

  App = angular.module('App', ['models']);

  /* ***************************************************************************
        Definición de variables
  ***************************************************************************
  */


  /* ***************************************************************************
        Productos
  ***************************************************************************
  */


  App.controller('SociosController', [
    '$http', '$location', '$scope', '$timeout', '$window', '$sce', 'Socio', function($http, $location, $scope, $timeout, $window, $sce, Socio) {
      var barcodeAux, lastBarcodeAux;
      $scope.search = function() {
        if ($scope.query != null) {
          return Socio.search({
            query: $scope.query
          }, function(data) {
            return $scope.sociosBuscados = data;
          });
        }
      };
      $scope.searchReset = function(input) {
        $scope.query = '';
        $scope.sociosBuscados = null;
        $('#' + input).focus();
        return this;
      };
      barcodeAux = [];
      lastBarcodeAux = Date.now();
      return angular.element($window).on('keypress', function(e) {
        if (e.which >= 48 && e.which <= 57) {
          if (Date.now() - lastBarcodeAux >= 20) {
            barcodeAux = [];
          }
          barcodeAux.push(String.fromCharCode(e.which));
          return lastBarcodeAux = Date.now();
        } else if (e.which === 13) {
          $scope.searchByBarCode(barcodeAux.join('').substr(-13));
          return barcodeAux = [];
        }
      });
    }
  ]);

}).call(this);
