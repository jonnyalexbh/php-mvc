<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal titulo</h4>
                </div>
                <div class="modal-body">
                    <p>Contenido de la modal</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- Ventana modal nuevo usuario-->

<div class="container">	

    <div class="modal fade" id="ventanaNvoUser" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="height: 633px;">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="ModalLabel">Creación de nuevo usuario</h4>
                    <span class="help-block">Introduzca usuario de aplicación, nueva contraseña y la confirmación de la misma. </span>
                </div>
                <form class="form-horizontal" id="formNvoUser" name="formNvoUser" action="" method="post" data-parsley-validate>
                    <div class="modal-body" style="height: 471px;">
                        <table align="center">
                            <tr><td align="center" style="position: relative;top: 17px;width: 40%;left: 31%;">Usuario de aplicación<input id="txt_IdUserAplNvo" name="txt_IdUserAplNvo" type="text" class="id_modal" style="text-align: center;" onkeyup="javascript:this.value = this.value.toUpperCase();"/><div id="containerNvoUser" style="position: relative;text-align: center;left: 1%;"></div></td>
                                <td align="center" style="position:relative;top: 115px;width: 28%;left: -4%;">Contraseña<input id="txt_NvaContraNvo" name="txt_NvaContraNvo" type="password" class="nombre_modal" required /></td>
                                <td align="center" style="position: relative;width: 29%;top: 220px;right: 34%;">Confirmar contraseña<input id="txt_ConfContraNvo" name="txt_ConfContraNvo" type="password" class="nombre_modal" required /></td>
                            </tr>        
                            <tr><td align="center"><a href=''><button type="submit" id='btnCrearNvoUser' name='btnCrearNvoUser' class="btn btn-primary"  style="position: relative;top: 260px;left: 51%;color: #fff;background-color: #ec971f; border-color: #d58512;">Crear</button></a></td>
                                <td><button type="button" class="btn btn-primary" data-dismiss="modal" style="position: relative;top: 260px;left: 46%;color: #333;background-color: #fff;border-color: darkgrey;">Cancelar</button></td></tr>
                        </table>
                        <br>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- JELO Ventana Modal Cambiar Contraseña-->

<div class="container">	

    <div class="modal fade" id="ventanaNvaContra" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="height: 633px;">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="ModalLabel">Establecimiento de contraseña</h4>
                    <span class="help-block">Introduzca la nueva contraseña y la confirmación de la misma. </span>
                </div>
                <form class="form-horizontal" action="" method="post">    
                    <div class="modal-body" style="height: 471px;">
                        <table align="center">
                            <tr><td align="center" style="position: relative;top: 17px;width: 40%;left: 31%;">Usuario de aplicación<input id="txtIdUser" ng-model="txtIdUser" name="txtIdUser" type="text" class="id_modal" readonly="readonly" style="text-align: center;background-color: rgba(230, 230, 226, 0.87);"/></td>
                                <td align="center" style="position:relative;top: 115px;width: 28%;left: -4%;">Nueva contraseña<input id="txt_NvaContra" name="txt_NvaContra" type="password" class="nombre_modal" required /></td>
                                <td align="center" style="position: relative;width: 29%;top: 220px;right: 34%;">Confirmar contraseña<input id="txt_ConfContra" name="txt_ConfContra" type="password" class="nombre_modal"  required /></td>
                            </tr>        
                            <tr><td align="center"><a href=''><button type="submit" class="btn btn-primary"  style="position: relative;top: 290px;left: 51%;color: #fff;background-color: #ec971f; border-color: #d58512;">Aceptar</button></a></td>
                                <td><button type="button" class="btn btn-primary" data-dismiss="modal" style="position: relative;top: 290px;left: 46%;color: #333;background-color: #fff;border-color: darkgrey;">Cancelar</button></td></tr>
                        </table>
                        <br>
                    </div>
                </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
</div>