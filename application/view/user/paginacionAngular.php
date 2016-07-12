<div class="container">
    <h3>Paginación angular</h3>

    <div ng-app="myApp" ng-controller="paginarCrtl">
        <div class="row">
            <div class="col-md-2">Mostrar:
                <select ng-model="entryLimit" class="form-control">
                    <option>15</option>
                    <option>20</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
            <div class="col-md-3">Buscar:
                <input type="text" ng-model="search" ng-change="filter()" class="form-control" />
            </div>
            <div class="col-md-5">
                <h5>Mostrando {{ filtered.length}} de {{ totalItems}} total usuarios</h5>
            </div>
            <div class="col-md-1">
                <button type='button' class="btn btn-warning" value='Crear nuevo usuario' style="position: relative; top: -10px; left: 22%;" data-toggle="modal" data-target="#ventanaNvoUser"><i class="fa fa-user-plus" ></i> Nuevo usuario</button>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12" ng-show="filteredItems > 0">
                <table class="table-responsive table-striped table-condensed table-bordered" width="100%">
                    <thead>
                    <th>ID Usuario de aplicación&nbsp;<a ng-click="sort_by('ID_USUARIO');"><i class="fa fa-sort" aria-hidden="true"></i></a></th>
                    <th>Nombre&nbsp;<a ng-click="sort_by('NOMBRE');"><i class="fa fa-sort" aria-hidden="true"></i></a></th>
                    <th>Clave&nbsp;<a ng-click="sort_by('PASSWORD');"><i class="fa fa-sort" aria-hidden="true"></i></a></th>
                    <th>Acciones</th>
                    </thead>
                    <tbody>
                        <tr ng-repeat="data in filtered = (list| filter:search | orderBy : predicate :reverse) | startFrom:(currentPage - 1) * entryLimit | limitTo:entryLimit">
                            <td>{{data.ID_USUARIO}}</td>
                            <td>{{data.NOMBRE}}</td>
                            <td>{{data.PASSWORD}}</td>
                            <td>
                                <button type='button' ng-click="idUsuario(data.ID_USUARIO)" class="btn btn-default btn-xs" value='Cambiar contraseña' data-toggle="modal" data-target="#ventanaNvaContra"><i class="fa fa-lock"></i> Nueva Contraseña</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12" ng-show="filteredItems == 0">
                <div class="col-md-12">
                    <h4>No se encontraron resultados</h4>
                </div>
            </div>
            <div class="col-md-12 text-center" ng-show="filteredItems > 0">
                <uib-pagination total-items='filteredItems' items-per-page='entryLimit' max-size="14" ng-model="currentPage" class="pagination-md" direction-links='true' previous-text="Anterior" next-text="Siguiente" boundary-links="true" first-text="Primero" last-text="ultimo"></uib-pagination>
            </div>
        </div>
        <?php LoadFiles::load(APP . 'view/_templates/modales'); ?> 
    </div>

</div>
