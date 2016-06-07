<div ng-app="selectdependentApp" class="container">
    <br>
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Selects Anidados con Angular JS Pais/Departamento</h3>
                </div>
                <div class="panel-body">
                    <form>
                        <fieldset ng-controller="selectdependentCrtl">
                            <div class="form-group">
                                <select ng-model="sltPais" class="form-control" ng-change="mostrarDepartamentos()" ng-options="paises.ID_PAIS as paises.NOMBRE for paises in JSONPaises">
                                </select>
                            </div>
                            <div class="form-group">
                                <select ng-model="sltDepart" class="form-control" ng-options="departamentos.ID_DEPARTAMENTO as departamentos.NOMBRE for departamentos in JSONDepartamentos">
                                </select> 
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input ng-click="limpiar()" class="btn btn-lg btn-default btn-block" type="button" value="Limpiar">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div> <!-- Fin del panel panel-default -->
        </div>
    </div> <!-- Fin del Row --> 
</div> <!-- Fin del Container -->