<div class="container">
    <h3>Paginación PHP</h3>
    <div class="row">
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
                        if (isset($data)) {
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
