<?php

/*
 * Jonnyalexbh
 * @Descripcion: modelo usuarios
 */

class UserModel extends Model {
    /*
     * usuarios
     */

    public function usuario($condicion = '') {
        $sql = $this->_getDbh()->query('SELECT * FROM usuario U WHERE 1=1' . $condicion);

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

}
