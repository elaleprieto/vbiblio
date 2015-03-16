(function() {
  var App;

  App = angular.module('App', ['models', 'ui.bootstrap']);

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
      $scope.clear = function() {
        return $scope.dt = null;
      };
      $scope.disabled = function(date, mode) {};
      $scope.toggleMin = function() {
        var _ref;
        return $scope.minDate = (_ref = $scope.minDate) != null ? _ref : {
          "null": new Date()
        };
      };
      $scope.toggleMin();
      $scope.open = function($event, element) {
        $event.preventDefault();
        $event.stopPropagation();
        angular.forEach($scope.popup, function(p, index) {
          return $scope.popup[index] = false;
        });
        return $scope.popup[element] = true;
      };
      $scope.popup = {};
      $scope.dateOptions = {
        formatYear: 'yy',
        startingDay: 1
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

  /* ***************************************************************************
        Productos
  ***************************************************************************
  */


  App.controller('CuotasController', [
    '$http', '$location', '$scope', '$timeout', '$window', 'Cuota', function($http, $location, $scope, $timeout, $window, Cuota) {
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
      $scope.clear = function() {
        return $scope.dt = null;
      };
      $scope.disabled = function(date, mode) {};
      $scope.toggleMin = function() {
        var _ref;
        return $scope.minDate = (_ref = $scope.minDate) != null ? _ref : {
          "null": new Date()
        };
      };
      $scope.toggleMin();
      $scope.open = function($event, element) {
        $event.preventDefault();
        $event.stopPropagation();
        angular.forEach($scope.popup, function(p, index) {
          return $scope.popup[index] = false;
        });
        return $scope.popup[element] = true;
      };
      $scope.popup = {};
      return $scope.dateOptions = {
        formatYear: 'yy',
        startingDay: 1
      };
    }
  ]);

}).call(this);
