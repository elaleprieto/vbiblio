/*! BibliotecaVigil          2015-03-11 */
(function() {
    var a;
    a = angular.module("App", [ "models" ]), a.config([ "$sceProvider", function(a) {
        return a.enabled(!1), console.log(a);
    } ]), a.controller("SociosController", [ "$http", "$location", "$scope", "$timeout", "$window", "$sce", "Socio", function(a, b, c, d, e, f, g) {
        var h, i;
        return console.log(f.isEnabled()), c.search = function() {
            return null != c.query ? g.search({
                query: c.query
            }, function(a) {
                return c.sociosBuscados = a;
            }) : void 0;
        }, c.searchReset = function(a) {
            return c.query = "", c.sociosBuscados = null, $("#" + a).focus(), this;
        }, h = [], i = Date.now(), angular.element(e).on("keypress", function(a) {
            return a.which >= 48 && a.which <= 57 ? (Date.now() - i >= 20 && (h = []), h.push(String.fromCharCode(a.which)), 
            i = Date.now()) : 13 === a.which ? (c.searchByBarCode(h.join("").substr(-13)), h = []) : void 0;
        });
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
    } ]);
}.call(this);