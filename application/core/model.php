<?php

/*
 * Jonnyalexbh
 * @Descripcion: modelo de la aplicación
 */

class Model {

    protected function _getDbh() {
        return DbPdo::getInstance()->getConn();
    }

}
