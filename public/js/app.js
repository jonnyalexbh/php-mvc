/*
 * Jonnyalexbh
 * @Descripcion: aplicación
 */

/*
 * Selects dependientes
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
 * Carga departamentos
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



/*
 * Paginacion usuarios angular
 */

var app = angular.module('myApp', ['ui.bootstrap']);

app.filter('startFrom', function () {
    return function (input, start) {
        if (input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});
app.controller('paginarCrtl', function ($scope, $http, $timeout) {
    $http({
        url: url + 'user/_paginacionAngular',
        method: "POST",
        data: {}
    }).success(function (data) {
        $scope.list = data;
        $scope.currentPage = 1; // Página actual
        $scope.entryLimit = 7; // máx nº de elementos a mostrar por página
        $scope.filteredItems = $scope.list.length; // Inicialmente para ningún filtro 
        $scope.totalItems = $scope.list.length;
    });


    $scope.setPage = function (pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function () {
        $timeout(function () {
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function (predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };

    // Ingresa id seleccionado a campo de modal de cambio de contraseña
    $scope.idUsuario = function (id) {
        //$("#txt_IdUserApl").val(id);
        $scope.txtIdUser = id;
    };
});

/*
 * Paginacion PHP AJAX
 */

$(document).on('ready', function () {
    $(".pagina").click(function () {
        paginacion($(this).attr("pagina"));
        //alert($(this).attr("pagina"));
    });

    //$(".pagina").on('click', function () {
    $("#lista_registros").on('click', '.pagina', function () {
        paginacion($(this).attr("pagina"));         //alert($(this).attr("pagina"));
    });

    var paginacion = function (pagina) {
        var pagina = pagina;
        var condicion = '';

        if ($("#idUsuario").val() !== "") {
            condicion += " AND U.ID_USUARIO=" + "'" + $("#idUsuario").val() + "'";
        }
        if ($("#NombreUsuario").val() !== "") {
            condicion += " AND U.NOMBRE=" + "'" + $("#NombreUsuario").val() + "'";
        }

        $.ajax({
            url: url + 'user/_paginacionPhpAjax',
            method: 'POST',
            data: {pagina: pagina, condicion: condicion},
            success: function (data) {
                $("#lista_registros").html('');
                $("#lista_registros").html(data);
            }
        });
    }

    /* JABH al dar clic en el boton buscar */
    $("#btnBuscar").click(function () {
        paginacion();
    });
});