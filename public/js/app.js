/*
 * Jonnyalexbh
 * @Descripcion: aplicación
 */

/*
 * JABH selects dependientes
 */
var app = angular.module('selectdependentApp', []);

app.controller('selectdependentCrtl', function ($scope, $http) {
    $scope.JSONPaises = [];
    $scope.JSONDepartamentos = [];
    obtenerPaises($http, $scope);

    $scope.limpiar = function () {
        limpiarForm($scope);
    };

    $scope.mostrarDepartamentos = function () {
        obtenerDepartamentos($http, $scope, $scope.sltPais); // $scope.sltPais trae el valor del select paises
    };
});



function obtenerPaises($http, $scope) {

    $http({
        url: url + 'catalogos/_loadCountry',
        method: "POST"
    }).success(function (data) {
        var array = data == null ? [] : (data.paises instanceof Array ? data.paises : [data.paises]);
        $scope.JSONPaises = array;
        $scope.sltPais = $scope.JSONPaises;
    })
            .error(function (data) {
                console.log('Error: ' + data);
            });

}

/*
 * JABH carga departamentos
 */
function obtenerDepartamentos($http, $scope, idPais) {

    $http({
        url: url + 'catalogos/_loadDepartment',
        method: "POST",
        data: {idPais: idPais}
    }).success(function (data) {
        var array = data == null ? [] : (data.departamentos instanceof Array ? data.departamentos : [data.departamentos]);
        $scope.JSONDepartamentos = array;
        $scope.sltDepart = $scope.JSONDepartamentos;
    })
            .error(function (data) {
                console.log('Error: ' + data);
            });

}

function limpiarForm($scope) {
    $scope.sltPais = '';
    $scope.sltDepart = '';
}