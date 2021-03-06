/*! BibliotecaVigil          2015-03-17 */
(function() {
    var a;
    a = angular.module("App", [ "models", "ui.bootstrap" ]), a.controller("SociosController", [ "$http", "$location", "$scope", "$timeout", "$window", "Provincia", "Socio", function(a, b, c, d, e, f, g) {
        var h, i;
        return c.provinciaChanged = function() {
            return console.log(c.provinciaSelected.Provincia.id), f.getLocalidades({
                id: c.provinciaSelected.Provincia.id
            }, function(a) {
                return c.localidades = a.localidades;
            });
        }, c.search = function() {
            return null != c.query ? g.search({
                query: c.query
            }, function(a) {
                return c.sociosBuscados = a;
            }) : void 0;
        }, c.searchReset = function(a) {
            return c.query = "", c.sociosBuscados = null, $("#" + a).focus(), this;
        }, c.clear = function() {
            return c.dt = null;
        }, c.disabled = function() {}, c.toggleMin = function() {
            var a;
            return c.minDate = null != (a = c.minDate) ? a : {
                "null": new Date()
            };
        }, c.toggleMin(), c.open = function(a, b) {
            return a.preventDefault(), a.stopPropagation(), angular.forEach(c.popup, function(a, b) {
                return c.popup[b] = !1;
            }), c.popup[b] = !0;
        }, c.popup = {}, c.dateOptions = {
            formatYear: "yy",
            startingDay: 1
        }, h = [], i = Date.now(), angular.element(e).on("keypress", function(a) {
            return a.which >= 48 && a.which <= 57 ? (Date.now() - i >= 20 && (h = []), h.push(String.fromCharCode(a.which)), 
            i = Date.now()) : 13 === a.which ? (c.searchByBarCode(h.join("").substr(-13)), h = []) : void 0;
        });
    } ]), a.controller("CuotasController", [ "$http", "$location", "$scope", "$timeout", "$window", "Cuota", function(a, b, c) {
        return c.search = function() {
            return null != c.query ? Socio.search({
                query: c.query
            }, function(a) {
                return c.sociosBuscados = a;
            }) : void 0;
        }, c.searchReset = function(a) {
            return c.query = "", c.sociosBuscados = null, $("#" + a).focus(), this;
        }, c.clear = function() {
            return c.dt = null;
        }, c.disabled = function() {}, c.toggleMin = function() {
            var a;
            return c.minDate = null != (a = c.minDate) ? a : {
                "null": new Date()
            };
        }, c.toggleMin(), c.open = function(a, b) {
            return a.preventDefault(), a.stopPropagation(), angular.forEach(c.popup, function(a, b) {
                return c.popup[b] = !1;
            }), c.popup[b] = !0;
        }, c.popup = {}, c.dateOptions = {
            formatYear: "yy",
            startingDay: 1
        };
    } ]);
}).call(this), function() {
    angular.module("models", [ "ngResource" ]).factory("Socio", [ "$resource", function(a) {
        return a("/socios.json", {
            callback: "JSON_CALLBACK"
        }, {
            search: {
                isArray: !0,
                method: "GET",
                url: "/socios/search.json"
            },
            vender: {
                method: "POST",
                url: "/productos/vender.json"
            }
        });
    } ]).factory("Cuota", [ "$resource", function(a) {
        return a("/cuotas.json", {
            callback: "JSON_CALLBACK"
        }, {
            search: {
                isArray: !0,
                method: "GET",
                url: "/cuotas/search.json"
            },
            vender: {
                method: "POST",
                url: "/productos/vender.json"
            }
        });
    } ]).factory("Provincia", [ "$resource", function(a) {
        return a("/provincias.json", {
            callback: "JSON_CALLBACK"
        }, {
            getLocalidades: {
                isArray: !1,
                cache: !0,
                method: "GET",
                url: "/provincias/getLocalidades.json"
            },
            vender: {
                method: "POST",
                url: "/productos/vender.json"
            }
        });
    } ]);
}.call(this);