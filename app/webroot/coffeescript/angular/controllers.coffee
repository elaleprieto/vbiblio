# App = angular.module('App', ['ngRoute', 'models', 'ui.bootstrap', 'ui.keypress'])
App = angular.module('App', ['models', 'ui.bootstrap'])

### ***************************************************************************
      Definición de variables
*************************************************************************** ###
# App.value '$strapConfig', datepicker: language: 'es'

### ***************************************************************************
      Productos
*************************************************************************** ###
App.controller 'SociosController'
  , ['$http', '$location', '$scope', '$timeout', '$window', '$sce', 'Socio'
    , ($http, $location, $scope, $timeout, $window, $sce, Socio) ->

  $scope.search = ->
    if $scope.query?
      Socio.search {query: $scope.query}
        , (data) ->
          $scope.sociosBuscados = data

  $scope.searchReset = (input) ->
    $scope.query = ''
    $scope.sociosBuscados = null
    $('#'+input).focus()
    @

  # $scope.today = ->
  #   $scope.dt = new Date()

  # $scope.today()

  $scope.clear =  ->
    $scope.dt = null


  # Disable weekend selection
  $scope.disabled = (date, mode) ->
    # ( mode is 'day' and ( date.getDay() is 0 || date.getDay() is 6 ) )


  $scope.toggleMin = ->
    $scope.minDate = $scope.minDate ? null : new Date()

  $scope.toggleMin()

  $scope.open = ($event, element) ->
    $event.preventDefault()
    $event.stopPropagation()
    angular.forEach $scope.popup, (p, index) ->   # Se ocultan todos los popups
      $scope.popup[index] = false

    $scope.popup[element] = true    # Se habilita la visualización del elemento pasado como parámetro.

  $scope.popup = {}
  $scope.dateOptions =
    formatYear: 'yy',
    startingDay: 1


  barcodeAux = []
  lastBarcodeAux = Date.now()
  angular.element($window).on 'keypress', (e) ->
    # Si es un número, lo agrego al barcodeAux
    if e.which >= 48 and e.which <= 57
      # Si el tiempo en milisegundos es mayor a 20, blanqueo la variable lastBarcodeAux antes de agregar el número.
      # Esto es así porque lo más rápido que puede apretar un tecla el usuario, parece que es 30 milisegundos, manteniendo la tecla apretada.
      # El lector lee a 8 milisegundos.
      if Date.now() - lastBarcodeAux >= 20 then barcodeAux = []
      barcodeAux.push(String.fromCharCode(e.which))
      lastBarcodeAux = Date.now()
    # Si es un enter, tomo los últimos 13 números agregados (EAN13) y busco por BarCode
    else if e.which is 13
      $scope.searchByBarCode(barcodeAux.join('').substr(-13))
      barcodeAux = []

]

### ***************************************************************************
      Productos
*************************************************************************** ###
App.controller 'CuotasController'
  , ['$http', '$location', '$scope', '$timeout', '$window', 'Cuota'
    , ($http, $location, $scope, $timeout, $window, Cuota) ->

  $scope.search = ->
    if $scope.query?
      Socio.search {query: $scope.query}
        , (data) ->
          $scope.sociosBuscados = data

  $scope.searchReset = (input) ->
    $scope.query = ''
    $scope.sociosBuscados = null
    $('#'+input).focus()
    @


  $scope.clear =  ->
    $scope.dt = null


  # Disable weekend selection
  $scope.disabled = (date, mode) ->
    # ( mode is 'day' and ( date.getDay() is 0 || date.getDay() is 6 ) )


  $scope.toggleMin = ->
    $scope.minDate = $scope.minDate ? null : new Date()

  $scope.toggleMin()

  $scope.open = ($event, element) ->
    $event.preventDefault()
    $event.stopPropagation()
    angular.forEach $scope.popup, (p, index) ->   # Se ocultan todos los popups
      $scope.popup[index] = false

    $scope.popup[element] = true    # Se habilita la visualización del elemento pasado como parámetro.

  $scope.popup = {}
  $scope.dateOptions =
    formatYear: 'yy',
    startingDay: 1

]
