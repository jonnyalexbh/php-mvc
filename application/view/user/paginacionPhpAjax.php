<div class="container">
    <h3>Paginación PHP Ajax</h3>
    <div class="row">

        <form class="form-horizontal" id="formTCC" action="<?php echo URL; ?>user/_paginacionPhpAjax" method="post">

            <!-- Text input-->
            <div class="form-group">
                <label class="control-label col-md-3" for="txt_pass">ID Usuario de aplicación</label>
                <div class="controls col-md-3">
                    <input name="idUsuario" id="idUsuario" size="1" class="form-control input-sm" type="text" >
                </div>
                <label class="control-label col-md-3" for="txt_pass">Nombre</label>
                <div class="controls col-md-3">
                    <input name="NombreUsuario" id="NombreUsuario" size="1" class="form-control input-sm" type="text" >
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-5 col-md-offset-5">
                    <input type="button" id="btnBuscar" class="btn btn-warning" value="Buscar">
                    <input type="reset" class="btn btn-default" value="Limpiar">
                </div>
            </div>

        </form>

        <div id="lista_registros">
            <div class="col-lg-12">
                <table id="tblactivos" class="table-responsive table-striped table-condensed table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>ID Usuario de aplicación</th>
                            <th>Nombre</th>
                            <th>Clave</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!isset($data)) {
                            foreach ($data as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['ID_USUARIO']; ?></td>
                                    <td><?php echo $row['NOMBRE']; ?></td>
                                    <td><?php echo $row['PASSWORD']; ?></td>
                                    <td><i class="fa fa-plus-square fa-lg" aria-hidden="true"></i></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php
                echo $paginacion;
            }
            ?>
        </div>
    </div>
</div>
